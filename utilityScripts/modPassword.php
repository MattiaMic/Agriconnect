<?php 
session_start();

// Script per la modifica della password - made by @stef.a99 & @ferr34 

// Prendo i dati in POST 
$password = $_POST['psw'];
$password2 = $_POST['psw2'];

// Controllo coincidenza password 
if($password != $password2)
{
  // Le due password non coincidono
  ?>
    <script> 
      alert('Le due password non coincidono. Reinserire assicurandosi che le password corrispondano');
      open('../profilo.php','_self');
    </script>
  <?php
}
else 
{
  // Le password coincidono, sostituzione nel database
  
  // Creazione connessione 
  $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

  if(!$conn)
  {
    // Connessione al DBMS non andata a buon fine 
    echo "Errore nella connessione al DBMS rilevato: {$conn -> error}";
  }
else 
{
  // Connessione andata a buon fine -> selezione DB 
  $conn -> select_db("my_everyfarmpoliba");
  
  // Query e somministrazione 
  $query = "UPDATE utente SET password = '".addslashes($password)."' WHERE username = '".$_SESSION['username']."' ";
  $resAggiornaPass = $conn -> query($query) or die("Errore aggiornamento password:{$conn -> error}");
  
  ?>
      <script> 
        alert('Password correttamente aggiornata.');
        
        // Ritorno alla pagina principale 
        open('../profilo.php','_self');
      </script>
  <?php
 
}
  // Chiusura connessione 
    mysqli_close($conn);  
}

?>