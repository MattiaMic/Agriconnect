<?php 

  // Script per la modifica dei 

  session_start();
 // Collegamento al database 
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
  
      // Prendo i dati ricevuti dal form in GET
      $nome = $_GET['nome']; 
      $cognome = $_GET['cognome'];
      $email = $_GET['email']; 
      $username = $_GET['user']; 
      $giornoNascita = $_GET['giornoNascita'];
      $meseNascita = $_GET['meseNascita']; 
      $annoNascita = $_GET['annoNascita']; 
      $regioneResidenza = $_GET['regioneResidenza']; 
      $numTel = $_GET['numeroTelefono']; 
      $foto = $_GET['foto']; 
      $bio = $_GET['bio']; 
      
      // Chiamata alle funzioni per il controllo delle email e del numero di telefono 
      controllaEmail($connessione,$email);
      controllaTelefono($numTel);
  
      // Creazione data di nascita 
      $ddn = $giornoNascita."/".$meseNascita."/".$annoNascita;
      
      if($foto != null)
      {
        // Query di modifica con nuova foto 
        $_SESSION['fotoP'] = $foto;
        
      $modificaDati = "UPDATE `utente` SET `email`= '".$email."',`nome`= '".$nome."',`cognome`='".$cognome."',`username`='".$username."',
      `fotoUtente`='".$foto."',`dataNascita`='".$ddn."',`regioneResidenza`='".$regioneResidenza."',`numeroTelefono`=".$numTel.",`bio`= '".$bio."' WHERE username = '".$_SESSION['username']."' ";
      }
  else 
  {
    // Query di modifica senza nuova foto 
      $modificaDati = "UPDATE `utente` SET `email`= '".$email."',`nome`= '".$nome."',`cognome`='".$cognome."',`username`='".$username."',
      `dataNascita`='".$ddn."',`regioneResidenza`='".$regioneResidenza."',`numeroTelefono`=".$numTel.",`bio`= '".$bio."' WHERE username = '".$_SESSION['username']."' ";
  }
  		
      // Somministrazione query di modifica 
      $resModificaDati = $connessione -> query($modificaDati) or die("Errore nella modifica dei terreni:{$connessione -> error}"); 
      
      // Passaggio nuovi dati in SESSION
      $_SESSION['username'] = $username; 
      $_SESSION['nome'] = $nome;
      $_SESSION['cognome'] = $cognome;
      $_SESSION['email'] = $email;
      
      ?>
          <script>
          	// Messaggio di conferma + ritorno alla pagina principale 
            window.alert('I nuovi dati saranno correttamente visualizzabili dal prossimo login.');
            window.open('../home_princ.php?numPagina=1&numPaginaVecchio=1','_self');
        </script>

      <?php
      
  }

// Funzione di controllo email 
function controllaEmail($c,$em)
{
  // Inizializzazione variabili ausiliarie 
  $ris = 0; 
  $contaChiocciole = 0;
  
  // Secondo controllo: email correttamente formata 
  for($i = 0; $i < strlen($em); $i++)
  {
    if($em[$i] == '@')
    {
      if($contaChiocciole <= 1)
      {
        $contaChiocciole++;
      }
      else 
      {
        // Errore, mando alert 
        ?>
             <!-- Alert di avviso errore --> 
          <html>
              <head>
                <title>Qualcosa è andato storto...</title>
            </head>
            <body>
              <script type = "text/javascript">
                window.alert("E-mail non valida. Troppe @ presenti");
                
                // Ritorno alla pagina 
                window.location.replace('http://everyfarmpoliba.altervista.org/public/registrazione.php?modifica=1');
              </script>
            </body>
          </html>
  
        <?php
        
        break;
      }
    }
  }
  
  
}

// Controllo numero di telefono 
function controllaTelefono($tn)
{

  if(strlen($tn) != 10)
  {
    // Formato numero di telefono non valido 
    ?>
        <html>
            <head>
              <title>Qualcosa è andato storto... </title>
          </head>  
          <body>
            <script type = "text/javascript">
              window.alert('Il numero di telefono deve essere composto da 10 cifre.');
              window.location.replace('http://everyfarmpoliba.altervista.org/public/registrazione.php');
           </script>
          </body>
        </html>
        
    <?php
  }
  
  // Controllo che vengano inseriti solo numeri 
 if(!is_numeric($tn))
 {
   // Sono state inserite delle lettere 
   ?>
      <html>
      <head>
         <title>Qualcosa è andato storto... </title>
        </head>  
        <body>
          <script type = "text/javascript">
             window.alert('Il numero di telefono deve essere composto da soli numeri.'); 
            
             // Ritorno alla pagina
             window.open('http://everyfarmpoliba.altervista.org/public/registrazione.php','_self'); 
          </script>
        </body>     
      </html>

    <?php
 }
  
  
}

// Chiusura connessione al DBMS 
mysqli_close($connessione);

?> 