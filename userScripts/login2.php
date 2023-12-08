<?php 

// Script per il login - made by @stef.a99 feat. @ferr34 

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
  // Connessione andata a buon fine 
  session_start(); // Avvio sessione 
  
  // Inizializzazione variabili ausiliarie
  $_SESSION['contLogin'] = 0; 
  
  // Selezione database
  $conn -> select_db("my_everyfarmpoliba");
  
  // Prendo i dati dal popup inviati in POST 
  $email = $_POST['uname']; 
  $password = $_POST['psw'];
  $ricordami = $_POST['remember'];
 
  // Creazione query di controllo di effettiva presenza dei dati inseriti dall'utente nel database
  $query ="SELECT * FROM utente WHERE email = '".$email."' AND password = '".$password."' "; // La query viene formata correttamente
  
  // Somministrazione query 
  $res2 = $conn -> query($query) or die("Last error: {$conn -> error} \n");
  
  // Fetch dei risultati 

  if(mysqli_num_rows($res2) == 0)
  {
  	// Credenziali non valide 
    $_SESSION['contLogin'] = 1;
    ?>
    <script> 
      // Messaggio di avviso + ritorno alla pagina principale 
      alert('Credenziali non valide! Riprovare');
      open('../home_nologin.php','_self');
    </script>
    <?php
  }
  else 
  {
  	 // Dati trovati -> fetch dei risultati 
     while($row = $res2 -> fetch_array(MYSQLI_ASSOC))
    { 
     // Controllo presenza dati 
      if($row['email'] != null && $row['password'] != null)
      {
      // Credenziali trovati -> Avvio della sessione 
        $_SESSION['nome'] = $row['nome']; 
        $_SESSION['cognome'] = $row['cognome']; 
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $row['username'];
        $_SESSION['rmbrMe'] = $ricordami;
        $_SESSION['fotoP'] = $row['fotoUtente'];
        
        ?>
          <script>
          	// Messaggio di bentornato + ritorno alla pagina principale 
            alert('Bentornato in EveryFarm!');
            open('../home_princ.php?numPagina=1&numPaginaVecchio=1','_self');
          </script>
        <?php
    }
  }
  }
  
  
 
}

// Chiusura connessione 
mysqli_close($conn);

?>