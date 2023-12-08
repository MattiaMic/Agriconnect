<?php
// Modifica dati pianta - made by @ferr34
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
          
          // Prendo i dati mandati in GET 
          $idPianta = $_GET['idPianta'];
          $nomeNuovo = $_GET['nuovoNome'];
          $nuovaDimensione = $_GET['nuovaDimensione'];
          $nuovaBio = $_GET['nuovaBio'];
          $nuovaFoto = $_GET['nuovaFoto'];
          
          // Se sono nulli lascio il nome vecchio, onde evitare controlli troppo facoltosi 
          $queryPartenza = "UPDATE pianta SET ";
          
          if($nomeNuovo != " " && $nomeNuovo != null)
          {
          	// Aggiunta alla query di update
            $queryPartenza = $queryPartenza." nomeComune = '".$nomeNuovo."',";
          }
          
          if($nuovaDimensione != " " && $nuovaDimensione != null)
          {
           // Aggiunta alla query di update
            $queryPartenza = $queryPartenza." dimensionePianta = '".$nuovaDimensione."',";
          }
          
          if($nuovaBio != " " && $nuovaBio != null)
          {
          	 // Aggiunta alla query di update
             $queryPartenza = $queryPartenza." bioPianta = '".$nuovaBio."'";
          }
          
          if($nuovaFoto != null && $nuovaFoto != " ")
          {
             // Aggiunta alla query di update
             $queryPartenza = $queryPartenza." ,fotoPianta = '".$nuovaFoto."' ";
          }
          
          // Finalizzazzione query 
           $queryPartenza = $queryPartenza." WHERE idPianta = ".$idPianta." ";
           
           // Somministrazione query 
          $resModificaPianta = $conn -> query($queryPartenza) or die("Errore modifica piante:{$conn -> error}");
          
          // Chiusura connessione al DBMS 
          mysqli_close($conn);
        }

?>
<script>
  // Ritorno a "Le mie piante"
  window.alert("Modifica correttamente avvenuta.");
  window.open('../lemiepiante.php?idTerreno=inserisci','_self');
</script>
  <?php
?>