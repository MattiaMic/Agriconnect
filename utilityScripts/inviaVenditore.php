<?php

  // Script di invio email al venditore -> Da vetrina.php 
  
session_start(); // Avvio sessione 
  
   // Connessione al DBMS 
   $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

  // Controllo connessione 
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
      
     // Dati ricevuti dal form in POST 
     $oggetto = $_POST['oggetto'];
     $messaggio = $_POST['messaggio'];
     $email = $_SESSION['emailAnnuncio'];
    
      // Invio e-mail
      $headers = "Ciao! Qualcuno ha visto il tuo terreno su EveryFarm e ti ha contattato. Oggetto:".$oggetto;
      mail($email,"Mi interessa il tuo terreno",$message);
    
     unset($_SESSION['emailAnnuncio']); // Unset delle variabili non necessarie 
    
    $idTerreno = $_SESSION['idTerreno']; 
    
    unset($_SESSION['idTerreno']); // Unset delle variabili non necessarie 
    
      ?>
        <script>
          window.alert('Email al venditore correttamente inviata.');
          
          // Ritorno alla pagina precedente
          window.open('../vetrina.php?idTerr=<?php echo $idTerreno; ?>','_self');
        </script>
      <?php
      
     }
// Chiusura connessione 
mysqli_close($conn);
?>