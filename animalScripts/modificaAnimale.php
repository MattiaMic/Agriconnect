<?php
// Modifica dati animale - made by @ferr34

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
          session_start(); // Avvio della sessione 
          
          // Connessione riuscita -> selezione database 
          $conn -> select_db("my_everyfarmpoliba");
          
          // Prendo i dati inviati in GET 
          $idAnimale = $_GET['idAnimale'];
          $nomeNuovo = $_GET['nuovoNome'];
          $nuovaSpecie = $_GET['nuovaSpecie'];
          $nuovoPeso = $_GET['nuovoPeso'];
          $nuovaEta = $_GET['nuovaEta'];
          $nuovaBio = $_GET['nuovaBio'];
          $nuovaFoto = $_GET['nuovaFoto'];
          
          // Se sono nulli o vuoti lascio il nome vecchio, onde evitare controlli troppo facoltosi 
          $queryPartenza = "UPDATE animale SET ";
          
          // Controllo valori rilevati 
          if($nomeNuovo != " " && $nomeNuovo != null)
          {
            // Aggiunta alla query di UPDATE
            $queryPartenza = $queryPartenza." nomeComune = '".$nomeNuovo."',";
          }
          
          if($nuovaSpecie != " " && $nuovaSpecie != null)
          {
            // Aggiunta alla query di UPDATE
            $queryPartenza = $queryPartenza." specie = '".$nuovaSpecie."',";
          }
          
          if($nuovoPeso != " " && $nuovoPeso != null)
          {
            // Aggiunta alla query di UPDATE
             $queryPartenza = $queryPartenza." peso = ".$nuovoPeso.",";
          }
          
          if($nuovaEta != " " && $nuovaEta != null)
          {
            // Aggiunta alla query di UPDATE
             $queryPartenza = $queryPartenza." eta = ".$nuovaEta." ,";
          }
          
          if($nuovaBio != " " && $nuovaBio != null)
          {
            // Aggiunta alla query di UPDATE
             $queryPartenza = $queryPartenza." bioAnimale = '".$nuovaBio."'";
          }
          
          if($nuovaFoto != null && $nuovaFoto != " ")
          {
            // Aggiunta alla query di UPDATE
             $queryPartenza = $queryPartenza." ,fotoAnimale = '".$nuovaFoto."' ";
          }
          
           $queryPartenza = $queryPartenza." WHERE idAnimale = ".$idAnimale." "; // Creazione query finale 
          
          // Somminstrazione query 
          $resModificaAnimale = $conn -> query($queryPartenza) or die("Errore modifica animali:{$conn -> error}");
          
          // Ritorno a i miei animali 
          mysqli_close($conn);
        }

?>
<script>
  
  // Messaggio di conferma + ritorno alla pagina iniziale
  
  window.alert("Modifica correttamente avvenuta.");
  window.open('../imieianimali.php?nomeTerreno=inserisci','_self');
</script>
  <?php
?>