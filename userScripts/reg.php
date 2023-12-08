<?php
 // Script per la registrazione dell'utente - made by @ferr34

 // Cosa deve fare questo script? 
 // 1. Mantenere l'utente loggato 
 // 2. Implementare anche HTML per rimandare alla pagina di registrazione con eventuale alert (sia con esito positivo che esito negativo)
 // 3. Quando inseriamo il numero di telefono, ricordiamoci di aggiungere il +39


// Avvio sessione
session_start();

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
      // Connessione andata a buon fine -> selezione del database
      $connessione -> select_db("my_everyfarmpoliba");
  
      // Prendo i dati ricevuti dal form in POST
      $nome = $_GET['nome']; 
      $cognome = $_GET['cognome'];
      $email = $_GET['email']; 
      $password = $_GET['password']; 
      $username = $_GET['user']; 
      $giornoNascita = $_GET['giornoNascita'];
      $meseNascita = $_GET['meseNascita']; 
      $annoNascita = $_GET['annoNascita']; 
      $regioneResidenza = $_GET['regioneResidenza']; // Non viene presa correttamente 
      $numTel = $_GET['numeroTelefono']; 
      $foto = $_GET['foto']; 
      $bio = $_GET['bio']; 
  
      
      // Devo controllare la correttezza di username e password, oltre alla loro eventuale presenza all'interno del database 
  
      // Chiamata a funzioni di controllo dati
      controllaEmail($connessione,$email);
      controllaUsername($connessione,$username);
      controllaTA($bio); 
      controllaTelefono($numTel);
  
      // In caso di errore, viene bloccata la pagina + ritorno alla pagina iniziale 
  
      // Controllo sulla data di nascita 
      if($giornoNascita == null)
      {
        $giornoNascita = 1;
      }
  
      if($meseNascita == null)
      {
        $meseNascita = 1;
      }
      
      if($annoNascita == null)
      {
        $annoNascita = 1920;
      }
      
      if($regioneResidenza == null)
      {
        $regioneResidenza = "Abruzzo";
      }
  
      if($foto == 'undefined')
      {
        $foto ="https://firebasestorage.googleapis.com/v0/b/everyfarm-b43bf.appspot.com/o/tu.png?alt=media"; // Foto di default -> utente che non ha inserito foto profilo
      }
  
      
      // Creazione data di nascira 
      $ddn = $giornoNascita."/".$meseNascita."/".$annoNascita;
  
      
      // Inserimento nel database + inizio sessione 
      $inserisciUtente = "INSERT INTO utente(`email`, `nome`, `cognome`, `password`, `username`, `fotoUtente`, `dataNascita`, `regioneResidenza`, `numeroTelefono`, `bio`) 
                              VALUES ('".$email."','".addslashes($nome)."','".addslashes($cognome)."','".$password."','".$username."','".$foto."','".$ddn."','".$regioneResidenza."',
                                ".$numTel.",'".addslashes($bio)."')";
      $inserimento = $connessione -> query($inserisciUtente) or die("Errore rilevato: {$connessione->error}\n"); 
  
      // Avvio sessione con dati nuovo utente
      session_start(); 
      $_SESSION['nome'] = $nome; 
      $_SESSION['cognome'] = $cognome;
      $_SESSION['email'] = $email;
      $_SESSION['username'] = $username;
      $_SESSION['fotoP'] = $foto;
  
      
      // Mando mail all'utente di avvenuta registrazione 
      $message = "Registrazione ad EveryFarm correttamente avvenuta. Di seguito le tue credenziali:\n Email: ".$email." \n Password: ".$password."\n Username: ".$username."\n Benvenuto in EveryFarm!";
      $headers = "From: everyfarmpoliba@gmail.com";
  mail($email,"Registrazione ad EveryFarm",$message); // Mail function
      
      // Alert + redirect 
      ?>
           <!-- Alert di corretta registrazione --> 
          <html>
              <head>
                <title>Registrazione correttamente avvenuta!</title>
            </head>
            <body>
              <script type = "text/javascript">
                window.alert("Benvenuto/a in EveryFarm");
                
                // Redirect alla pagina principale 
                window.open('http://everyfarmpoliba.altervista.org/public/home_princ.php?numPagina=1&numPaginaVecchio=1',"_self");
              </script>
            </body>
          </html>
      <?php
      
      
  }

// Funzione di controllo email 
function controllaEmail($c,$em)
{
  // Inizializzazione variabili ausiliarie 
  $ris = 0; 
    
  // Primo controllo : Esistenza dell'email nel database 
  // Estraggo gli elementi dal database 
  $query = "SELECT * FROM `utente` WHERE email = '".$em."' ";
  
  // Somministrazione query 
  $res1 = $c -> query($query); 
  
  // Fetch dei risultati
  while($row = $res1 -> fetch_array(MYSQLI_ASSOC))
  {     
    // Controllo dei risultati
    if($row['email'] != null)
    {
        ?> 
        <!-- Alert di avviso errore --> 
          <html>
              <head>
                <title>Qualcosa è andato storto...</title>
            </head>
            <body>
              <script type = "text/javascript">
                window.alert("E-mail gia' esistente!");
                
                // Ritorno alla pagina precedente 
                window.location.replace('http://everyfarmpoliba.altervista.org/public/registrazione.php');
              </script>
            </body>
          </html>
  
      <?php
      break; 
    }
  }
  
  $contaChiocciole = 0; 
  
  // Secondo controllo: email correttamente formata 
  for($i = 0; $i < strlen($em); $i++)
  { 
    if($em[$i] == '@')
    { 
      // Rilevazione carattere 
     $contaChiocciole++;
    }
  }
  
  if($contaChiocciole >= 2)
  {
    ?>
      <script>
        alert('E-mail non valide. Troppi @ inseriti.');
        open('../registrazione.php','_self');
      </script>
    <?php
  }
  
  
  for($i = 0; $i < strlen($em); $i++)
  {
    // Controllo dei caratteri di escape (danno problemi con il DBMS)
    if($em[$i] == "'")
    {
      // Errore 
      ?>
          <script>
              window.alert('L\'email non deve contenere apostrofi!');
              window.open('../registrazione.php','_self');
          </script> 
      <?php
    }
  }
  
  
}

function controllaUsername($c,$usr)
{
  // Questa funzione controlla che l'username non sia gia' presente nel database
  $query2 = "SELECT * FROM utente WHERE username = '".$usr."' ";
  $res2 = $c -> query($query2) or die("Last error: {$c->error}\n");  
  
  while($row2 = $res2 -> fetch_array(MYSQLI_ASSOC))
  {
    if($row2['username'] != null)
    {
      // Nome utente gia' presente, mandare alert 
      ?>
         <script>
            alert("Nome utente non disponibile!");   
           
            // Ritorno alla pagina precedente
            open('../registrazione.php','_self');
          </script>
     
      <?php
      
      break;
    }
  }
  
  // Controllo caratteri di escape 
  for($i = 0; $i < strlen($usr); $i++)
  {
    if($usr[$i] == "'")
    {
      ?>
        <script> 
            window.alert('L\'username non deve contenere apostrofi!');
              window.open('../registrazione.php','_self');
        </script>
      <?php
    }
  }
}

// Controllo textarea della bio
function controllaTA($b)
{
  if(strlen($b) > 200)
  {
    // Bio troppo lunga 
    
    ?> 
    <script>    
      alert("Bio troppo lunga!");          
               
      // Ritorno alla pagina precedente 
      open('../registrazione.php','_self')  
</script>
          
    <?php
    
  }
  
}

// Controllo numero di telefono 
function controllaTelefono($tn)
{

  if(strlen($tn) != 10)
  {
    // Formato numero di telefono non valido 
    ?>
      
            <script>
              alert('Il numero di telefono deve essere composto da 10 cifre.');
              
              // Ritorno alla pagina precedente 
              open('../registrazione.php','_self');
           </script>
        
        
    <?php
  }
  
  // Controllo che vengano inseriti solo numeri 
 if(!is_numeric($tn))
 {
   // Sono state inserite delle lettere 
   ?>
          <script>
             alert('Il numero di telefono deve essere composto da soli numeri.'); 
             open('../registrazione.php','_self'); 
          </script>
    <?php
 }
  
  
}

// Chiusura connessione 
mysqli_close($connessione);   
?>