<?php

// Script di eliminazione degli animali

$idAnimale = $_GET['idAnim'];

// Creazione connessione al DBMS
      $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974");

      if(!$conn)
         {
                // Connessione non riuscita
                echo "Errore di connessione:";
                echo mysqli_errno();
         }
         else 
          {
           // Selezione database 
               $conn -> select_db("my_everyfarmpoliba");
           
               // Creazione query e somministrazione 
               $query = "DELETE anim.* from animale as anim where idAnimale=".$idAnimale.";";
               $res = $conn -> query($query) or die("Last error: {$conn -> error} \n");
              }

      // Chiusura connessione 
      mysqli_close($conn);
      
      // Ritorno alla pagina precedente 
      header("Location: imieianimali.php?nomeTerreno=inserisci");
?>