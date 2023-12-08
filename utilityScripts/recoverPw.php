<?php
// Recupero password pure PHP - made by @ferr34

// Collegamento al DBMS 
$conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarm","Mc6xAMaFG974"); 

// Controllo connessione 
if(!$conn)
{
  // Connessione non andata a buon fine 
  die("Errore rilevato nella connessione al database: {$conn -> error}");
}
else 
{
  // Connessione andata a buon fine -> selezione database
  $conn -> select_db("my_everyfarmpoliba"); 
  
  // Variabili ricevute in POST 
  $emailToCheck = $_POST['emRic']; 
  
  // Controllo se l'email e' presente nel database 
  $query = "SELECT * FROM utente WHERE email = '".$emailToCheck."' "; // Query dinamica
  
  // Somministrazione 
  $res = $conn -> query($query) or die("Errore nella somministrazione della query: {$conn -> error}"); 
  
    if($res -> num_rows == 0)
    {
    // E - mail non trovata nel database -> Invio messaggio di errore 
    ?>
        <html>
            <head>
              <title>Qualcosa è andato storto... </title>   
           </head>
            <body>
                <script>
                  window.alert('E-mail non registrata ad EveryFarm! Riprovare'); 
                  
                  // Ritorno alla pagina principale
                  window.location.replace('http://everyfarmpoliba.altervista.org/public/home_nologin.php');
                </script>
            </body>
       </html>
       
    <?php
    }
      else
  {
    // E- mail trovata -> Recupero password + invio 
    
    $recPass = "SELECT password FROM utente WHERE email = '".$emailToCheck."'"; // Query dinamica
        
    // Somministrazione query 
    $res1 = $conn -> query($recPass) or die("Errore query di recupero password: {$conn -> error}");
    
    while($row = $res1 -> fetch_array(MYSQLI_BOTH))
    {
      // Fetch dei risultati 
      $subject = "Recupero password"; 
      $message = "Ecco la tua password come da te richiesto: ".$row['password'].".\n Saluti dal team EveryFarm!" ; 
    
      // Invio mail con password 
      mail($emailToCheck,$subject,$message);
      
      // La mail viene correttamente inviata 
      
      // Redirect alla pagina principale 
      
      ?> 
           <script>
              alert("La tua password è stata inviata al tuo indirizzo e-mail!");
              open('../home_nologin.php','_self');
           </script> 
      <?php
      break; 
    }
    
  }   
  
}

mysqli_close($conn);

?>