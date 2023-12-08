<?php 
session_start(); // Avvio sessione
// Inserimento nuova URL per foto profilo

 // Collegamento al DBMS 
  $connessione = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

  // Controllo connessione 
  if(!$connessione)
  {
    // Connessione non andata a buon fine, messaggio di errore 
    echo "Connessione non riuscita".mysql_errno();
  }
else
  {
      // Connessione andata a buon fine -> selezione del DB 
      $connessione -> select_db("my_everyfarmpoliba");
  
      // Dati ricevuti in GET 
      $username = $_GET['username'];
      $fotoProfilo = $_GET['nuovaUrl'];
  
      // Query aggiornamento foto
      $aggiornaFoto = "UPDATE `utente` SET `fotoUtente`='".$fotoProfilo."' WHERE username = '".$username."' ";
  
      // Somministrazione query 
      $resAggiornaFoto = $connessione -> query($aggiornaFoto) or die("Errore aggiornamento foto profilo:{$connessione -> error}");  
  
      // Aggiorno riferimento foto profilo 
      $_SESSION['fotoP'] = $fotoProfilo; 
  
      ?>
        <script>
          // Ritorno alla pagina principale 
          window.open('../home_princ.php?numPagina=1&numPaginaVecchio=1','_self');
      </script>
      <?php
  }

// Chiusura connessione 
mysqli_close($connessione);
?>