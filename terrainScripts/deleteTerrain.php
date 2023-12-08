<?php

// Script per l'eliminazione di un terreno e di tutti gli elementi collegati ad esso - made by @ferr34

// Elementi ricevuti in GET dalla pagina "I miei terreni" 
$idTerreno = $_GET['idTerreno']; 

// Connessione al DBMS
$conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

if(!$conn)
  {
    // Connessione non riuscita 
    echo "Errore di connessione:";
    echo mysqli_errno();
  }
 else 
  {
    // Connessione andata a buon fine -> selezione DB 
    $conn -> select_db("my_everyfarmpoliba");
   
    // Query di eliminazione delle piante collegate + somministrazione al DBMS
    $eliminaPiante = "DELETE FROM `pianta` WHERE idTerreno = ".$idTerreno." ";
    $resEliminaPiante = $conn -> query($eliminaPiante) or die("Errore eliminazione piante: {$conn -> error} ");
   
    // Query di eliminazione degli animali collegati + somministrazione al DBMS
    $eliminaAnimali = "DELETE FROM `animale` WHERE idTerreno = ".$idTerreno." "; 
    $resEliminaAnimali = $conn -> query($eliminaAnimali) or die("Errore eliminazione animali: {$conn -> error} ");
   
    // Elimino le foto collegate al terreno + somministrazione al DBMS
    $eliminaFotoTerreno = "DELETE FROM `fotoTerreno` WHERE idTerreno = ".$idTerreno." ";
    $resEliminaFotoTerreno = $conn -> query($eliminaFotoTerreno) or die("Errore eliminazione fotoTerreno: {$conn -> error} ");
   
    $eliminaUtenteTerreno = "DELETE FROM utenteTerreno WHERE idTerreno = ".$idTerreno." ";
    $resEliminaUtenteTerreno = $conn -> query($eliminaUtenteTerreno) or die("Errore eliminazione tupla utenteTerreno: {$conn -> error}");
    
    // Eliminazione terreno + somministrazione al DBMS
    $eliminaTerreno = "DELETE FROM `terreno` WHERE idTerreno = ".$idTerreno." ";
    $resEliminaTerreno = $conn -> query($eliminaTerreno) or die("Errore eliminazione terreno: {$conn -> error} ");
   
  }  

// Eliminazione completata -> chiusura della connessione al DBMS
mysqli_close($conn);

?>
<script> 
	// Ritorno alla pagina principale 
    alert('Eliminazione del terreno correttamente avvenuta.');
    open('../home_princ.php?numPagina=1&numPaginaVecchio=1','_self');
</script>
<?php


?>