<?php

// Script PHP che inserisci nel database i nuovi animali inseriti tramite la pagina "I miei animali"

// Devo controllare che i dati siano corretti 

$conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

if(!$conn)
       {
         // Connessione non riuscita 
         echo "Errore di connessione:";
         echo mysqli_errno();
       }
else 
   {
     $conn -> select_db("my_everyfarmpoliba");
  
     $numAnimali = $_GET['numPiante'];
     $idTerreno = $_GET['idTerreno'];
      
     for($i = 0; $i < $numAnimali; $i++)
     {
       ${'nomeComune'.$i} = $_GET['nomeComune'.$i];
       ${'dimensionePianta'.$i} = $_GET['dimensionePianta'.$i];
       ${'bioPianta'.$i} = $_GET['bioPianta'.$i];
       ${'fotoPianta'.$i} = $_GET['fotoPianta'.$i];
       
       // Query di inserimento 
       $inserisciPianta = "INSERT INTO `pianta`(`idPianta`, `nomeComune`, `dimensionePianta`, `fotoPianta`, `idTerreno`, `bioPianta`) 
              VALUES (null,'".${'nomeComune'.$i}."','".${'dimensionePianta'.$i}."','".${'fotoPianta'.$i}."',".$idTerreno.",'".${'bioPianta'.$i}."')";
       
       $resInserisciAnimale = $conn -> query($inserisciPianta) or die("Errore inserimento nuove piante: {$conn -> error}");
          
     }
   }

mysqli_close($conn);
?>
<script> 
window.open('../home_princ.php?numPagina=1&numPaginaVecchio=1');
</script>