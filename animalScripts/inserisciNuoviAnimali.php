<?php

// Script PHP che inserisci nel database i nuovi animali inseriti tramite la pagina "I miei animali" - made by @ferr34 

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
     // Connessione riuscita -> selezione database
     $conn -> select_db("my_everyfarmpoliba");
  
     $numAnimali = $_GET['numAnimali'];
     $idTerreno = $_GET['idTerreno'];
  
  // Devo controllare che i dati ricevuti siano corretti
      
     for($i = 0; $i < $numAnimali; $i++)
     {
       ${'nomeComune'.$i} = $_GET['nomeComune'.$i];
       ${'specie'.$i} = $_GET['specie'.$i];
       ${'peso'.$i} = $_GET['peso'.$i];
       ${'bio'.$i} = $_GET['bio'.$i];
       ${'eta'.$i} = $_GET['eta'.$i];
       ${'fotoAnimale'.$i} = $_GET['fotoAnimale'.$i];
       
       // Query di inserimento 
       $inserisciAnimale = "INSERT INTO `animale`(`idAnimale`, `nomeComune`, `specie`, `eta`, `peso`, `idTerreno`, `fotoAnimale`, `bioAnimale`) 
                                      VALUES (null,'".${'nomeComune'.$i}."','".${'specie'.$i}."',". ${'eta'.$i}.",".${'peso'.$i}.",".$idTerreno.",'". ${'fotoAnimale'.$i}."','".${'bio'.$i}."')";
       
       // Somministrazione query
       $resInserisciAnimale = $conn -> query($inserisciAnimale) or die("Errore inserimento nuovi animali: {$conn -> error}");
          
     }
   }

mysqli_close($conn);
?>
<script> 
window.open('../home_princ.php?numPagina=1&numPaginaVecchio=1');
</script>