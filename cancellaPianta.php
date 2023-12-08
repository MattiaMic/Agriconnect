<?php

// Script di eliminazione delle piante - made by @stef.a99

$idPianta = $_GET['idPia'];
 
// Creazione connessione per visualizzazzione terreni
 $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
 
if(!$conn)
      {
         // Connessione non riuscita 
         echo "Errore di connessione:";
         echo mysqli_errno();
       }
              else 
              {
                // Connessione andata a buon fine -> selezione database
                $conn -> select_db("my_everyfarmpoliba");
                
                // Creazione query e somministrazione 
                $query = "DELETE pian.* from pianta as pian where idPianta=".$idPianta.";";
                $res = $conn -> query($query) or die("Last error: {$conn -> error} \n");
              }

// Chiusura connessione 
mysqli_close($conn);

// Remind alla pagina precedente
header("Location: lemiepiante?idTerreno=inserisci ");

?>