<?php 

// Script per il conteggio degli animali e delle piante che verranno inserite p- made by @ferr34 & @stef.a99

// Avvio sessione 
session_start();

// Inizializzazione variabili di sessione 
$_SESSION['numAnimOld'] = $_SESSION['numAnimali']; 
$_SESSION['numPiantOld'] = $_SESSION['numPiante'];

// Dati presi dalla pagina inviati in POST 
$numAnimali = $_POST['numAnimali'];
$numPiante = $_POST['numPiante'];

// Se sono vuoti non devo riscontrare errore -> un terreno può non avere animali o piante
if($numAnimali == null || $numPiante == null)
{
    ?>
      <html>
   <head>
     <title>Niente animali</title>
  </head>
  <body>
      <script type = "text/javascript">
   window.alert("Non saranno inserite piante e/o animali. É possibile sistemare compilando di nuovo l'apposita sezione.");
   
   // Ritorno alla pagina precedente
   window.open('../caricaTerreno.php','_self');
</script>
  </body>
</html>

<?php
    // Aggiornamento variabili per coerenza di funzionamento 
  $_SESSION['numAnimali'] = $numAnimali; 
  $_SESSION['numPiante'] = $numPiante;
  
// Apro la nuova pagina 
header('Location: ../caricaTerreno.php');
  
  }
else 
{
  // Controllo se sono stati inseriti soli valori numerici 
  if(!is_numeric($numAnimali) || !is_numeric($numPiante))
  {
  // Non valido -> Alert 
  ?>
      <script type = "text/javascript">
        alert('Valori non validi per il numero di animali o di piante. Inserire solo valori numerici!');
        open('../caricaTerreno.php','_self');
      </script>
   <?php
  }
  else 
  {
  // Valido -> Impostazione variabili sessione per pagine successive
  $_SESSION['numAnimali'] = $numAnimali; 
  $_SESSION['numPiante'] = $numPiante;
  
  // Apro la nuova pagina 
  header('Location: ../caricaTerreno.php');
  }
  
}

?> 