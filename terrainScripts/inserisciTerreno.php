<?php
session_start();
// Script per l'inserimento nel terreno del database - made by @ferr34 

// Connessione al DBMS 
$conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974");

if(!$conn)
{
  // Connessione non riuscita
  die("Errore nella connessione al DBMS rilevato: {$conn -> error}");
}
else 
{
  // Connessione andata a buon fine -> Selezione database 
  $conn -> select_db("my_everyfarmpoliba");
  
  // Settaggio variabili ausiliare 
  $contaFoto = 0;
  
  // Prendo i dati inviati in GET 
  $nomeTerreno = $_GET['nomeTerreno'];
  $dimensioneTerreno = $_GET['dimensioneTerreno'];
  
  // Controllo che il dato inviato sia completamente numerico 
  if(!is_numeric($dimensioneTerreno))
  {
    // Tipo di dato errato 
    ?>
        <html>
           <head>
              <title>Errore dati</title>
          </head>
          <body>
             <script>
               window.alert('La dimensione del terreno deve essere rappresentata da un numero.'); 
               window.open('../bollettino.php','_self');
            </script>
          </body>
        </html>
    <?php
  }
  
  // Ulteriori dati inviati 
  $posTerreno = $_GET['posizioneTerreno'];
  $utilizzoTerreno = $_GET['utilizzoTerreno'];
  $prezzoTerreno = $_GET['prezzoTerreno'];
  
  // Controllo che il dato inviato sia completamente numerico 
  if(!is_numeric($prezzoTerreno))
  {
    // Tipo di dato errato 
     ?>
        <html>
           <head>
              <title>Errore dati</title>
          </head>
          <body>
             <script>
               window.alert('Il prezzo del terreno deve essere rappresentato da un numero senza virgole nè punti.'); 
               window.open('../bollettino.php','_self');
            </script>
          </body>
        </html>
    <?php
  }
  
  $bioTerreno = $_GET['bioTerreno'];
  
  // Prendo i dati degli animali -> Controllo i dati "fastidiosi" cioe' dimensioneTerreno, prezzo, peso animale 
  for($i = 0; $i < $_SESSION['numAnimali']; $i++)
  {
    // Progressivita' delle variabili per mantenere i benefici dei cookie e dell'invio dalla pagina precedente 
    ${'Animale'.$i} = $_GET['Animale'.$i]; 
    ${'nomeB'.$i} = $_GET['nomeB'.$i]; 
    ${'specieB'.$i} = $_GET['specieB'.$i];
    ${'etaB'.$i} = $_GET['etaB'.$i]; 
    ${'pesoB'.$i} = $_GET['pesoB'.$i];
    ${'bioB'.$i} = $_GET['bioB'.$i];
    
    // Controllo che il dato inviato sia completamente numerico 
    if(!is_numeric(${'pesoB'.$i}))
    {
      // Peso non corretto 
      ?>
        <html>
          <head>
            <title>Errore nel peso dell'animale</title> 
          </head>
          <body>
             <script>
                window.alert("Errore nel peso dell'animale n.<?php echo $i+1 ?>. Deve essere un valore SOLO numerico.");
               window.open('bollettino.php','_self');
            </script>
          </body>
        </html>
      <?php
    }
    
    ${'bioB'.$i} = $_GET['bioB'.$i];
  }
  
  // Prendo i dati delle piante -> Qui non ci sono dati sensibili
  for($i = 0; $i < $_SESSION['numPiante']; $i++)
  {
    ${'Pianta'.$i} = $_GET['Pianta'.$i];
    ${'nomeP'.$i} = $_GET['nomeP'.$i];
    ${'dimensioneP'.$i} = $_GET['dimensioneP'.$i];
    ${'bioP'.$i} = $_GET['bioP'.$i];
  }
  
  // Da qui dati corretti -> Creazione query e inserimento nel database 
  // Ordine: 
  // 1. Inserimento dati del terreno
  // 2. Inserimento tupla in utenteTerreno ( retrieval con query tramite variabili di sessione dell'id dell'utente)
  // 3. Inserimento in fotoTerreno delle foto 
  // 4. Inserimento tuple in terreni (idTerreno e idFoto)
  // 5. Inserimento tuple in animale
  // 6. Inserimento tuple in piante 
  
  $queryInserimentoTerreno = "INSERT INTO `terreno`(`idTerreno`, `nomeTerreno`, `dimensione`, `prezzo`, `utilizzo`, `via`, `descrizione`, `numFotoInserite`)
                              VALUES (null,'".$nomeTerreno."',".$dimensioneTerreno.",".$prezzoTerreno.",'".$utilizzoTerreno."','".$posTerreno."','".$bioTerreno."',null)";
  
  // Somministro la query 
  $resTerreno = $conn -> query($queryInserimentoTerreno) or die("Errore inserimento dati terreno:{$conn -> error}\n");
  
  // Query n.2
  $queryPrendiId = "SELECT username FROM utente WHERE email = '".$_SESSION['email']."'";
  $resCercaId = $conn -> query($queryPrendiId) or die("Errore ricerca username: {$conn -> error}\n");
  
  // Fetch dei risultati 
  while($row = $resCercaId -> fetch_array(MYSQLI_ASSOC))
  {
    if($row['username'] != null)
    {
      // Username trovato -> Effettuo un controllo aggiuntivo 
      $idUtente = $row['username'];
      
      // Ometto break poiche' sarà un elemento unico 
    }
  }
  
  // Inserimento tupla in utente terreno 
  
  // Query 
  $estraiTerreno = "SELECT idTerreno FROM `terreno` WHERE nomeTerreno = '".$nomeTerreno."' AND dimensione = ".$dimensioneTerreno." AND prezzo = ".$prezzoTerreno." and utilizzo = '".$utilizzoTerreno."' 
                    AND via = '".$posTerreno."' AND descrizione = '".$bioTerreno."' ";
  
  // Somministrazione query 
  $resEstraiTerreno = $conn -> query($estraiTerreno) or die("Errore retrieval ID terreno:{$conn -> error}\n");
  
  // Fetch dei risultati 
  while($row2 = $resEstraiTerreno -> fetch_array(MYSQLI_ASSOC))
  {
    if($row2['idTerreno'] != null)
    {
      $idTerreno = $row2['idTerreno'];
      
      // Ometto break poiche' sarà un elemento unico 
    }
  }
  
  // Creazione query 
  $inserisciUtenteTerreno = "INSERT INTO `utenteTerreno`(`idTerreno`, `username`) VALUES (".$idTerreno.",'".$idUtente."')";
  
  // Somministrazione query 
  $resInserisciUtenteTerreno = $conn -> query($inserisciUtenteTerreno) or die("Errore inserimento in utenteTerreno: {$conn -> error}\n");
  
  // Query n.3 + Query n.4 
  
  // Prendo i dati ricevuti dall'inserimento del terreno -> Vengono correttamente presi -> Controllo che siano logicamente corretti 

  // Controllo quante foto sono state inserite 
  for($j = 1; $j <= 6; $j++)
  {
     if($_GET['urlTerreno'.$j] != "undefined")
    {
      // Foto presente 
      $foto = $_GET['urlTerreno'.$j];
      
   // Inserisco la foto con il relativo idTerreno
   $inserisciFotoTerreno = "INSERT INTO `fotoTerreno`(`idFoto`, `foto`, `idTerreno`) VALUES (null,'".$foto."',".$idTerreno.");";
   $resInserisciFotoTerreno = $conn -> query($inserisciFotoTerreno) or die("Errore inserimento foto terreno n.".$j.":{$conn -> error}\n");
   
   // Aumento valore variabile ausiliaria
      $contaFoto = $contaFoto + 1;
    }
  }
  

  
  // Modifico il valore di conta foto 
  $modificaNumFoto = "UPDATE `terreno` SET `numFotoInserite`= ".$contaFoto." WHERE terreno.idTerreno = ".$idTerreno." ";
  
  // Somministrazione query 
  $resModificaNumFoto = $conn -> query($modificaNumFoto) or die("Errore aggiornamento numFoto:{$conn -> error};");
  
  // Query n.5 -> Inserimento tuple animale 
  for($i = 0; $i < $_SESSION['numAnimali']; $i++)
  {
  	// Creazione query 
    $inserisciAnimale = "INSERT INTO `animale`(`idAnimale`, `nomeComune`, `specie`, `eta`, `peso`, `idTerreno`, `fotoAnimale`, `bioAnimale`)
                         VALUES (null,'".${'nomeB'.$i}."','".${'specieB'.$i}."',".${'etaB'.$i}.",".${'pesoB'.$i}.",".$idTerreno.",'".${'Animale'.$i}."','".addslashes(${'bioB'.$i})."')";
    
    // Somministrazione query 
    $resInserisciAnimale = $conn -> query($inserisciAnimale) or die("Errore nell'inserimento dell'animale n. ".$i.": {$conn -> error}\n ");   
  }
  
  for($i = 0; $i < $_SESSION['numPiante']; $i++)
  {
  	// Creazione query 
    $inserisciPianta = " INSERT INTO `pianta`(`idPianta`, `nomeComune`, `dimensionePianta`, `fotoPianta`, `idTerreno`, `bioPianta`) 
                             VALUES (null,'".${'nomeP'.$i}."','".${'dimensioneP'.$i}."','".${'Pianta'.$i}."',".$idTerreno.",'".${'bioP'.$i}."') ";
    
    // Somministrazione query 
    $resInserisciPianta = $conn -> query($inserisciPianta) or die("Errore nell'inserimento della pianta n.".$i.":{$conn -> error}");
  }
  
  
}

// Ritorno alla home 

// Unset delle variabili contenenti il numero di piante e animali
unset($_SESSION['numAnimali']);
unset($_SESSION['numPiante']);

// Ritorno alla pagina principale 
header('Location: ../home_princ.php?numPagina=1&numPaginaVecchio=1');

// Chiusura connessione
mysqli_close($conn);

?>
