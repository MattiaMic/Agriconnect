<?php 
session_start();
// Script che controlla quali pulsanti sono stati utilizzati

// Inizializzazione variabili ausiliarie 
$_SESSION['primaVoltaBollettino'] = 1;
$numFoto = 0; 

// Flag presenza foto del terreno inviate in GET 
$primaFoto = $_GET['primaFoto'];
$secondaFoto = $_GET['secondaFoto'];
$terzaFoto = $_GET['terzaFoto'];
$quartaFoto = $_GET['quartaFoto'];
$quintaFoto = $_GET['quintaFoto'];
$sestaFoto = $_GET['sestaFoto'];

// Controllo presenza foto -> aggiornera' correttamente il numero di foto nel bollettino 

if($primaFoto == 1)
{
  $numFoto++;
}

if($secondaFoto == 1)
{
  $numFoto++;
}

if($terzaFoto == 1)
{
  $numFoto++;
}

if($quartaFoto == 1)
{
  $numFoto++;
}

if($quintaFoto == 1)
{
  $numFoto++;
}

if($sestaFoto == 1)
{
  $numFoto++;
}

?>

<script> 
  // Passo di nuovo i dati -> Compilazione bollettino
  var datiDaInviare = '?primaFoto=<?php echo $primaFoto; ?>&secondaFoto=<?php echo $secondaFoto; ?>&terzaFoto=<?php echo $terzaFoto; ?>' + 
                      '&quartaFoto=<?php echo $quartaFoto; ?>&quintaFoto=<?php echo $quintaFoto; ?>&sestaFoto=<?php echo $sestaFoto; ?>&numFoto=<?php echo $numFoto; ?>'; 
  
  setTimeout(function(){console.log(datiDaInviare)},2000); // Ritardo funzione -> serve per caricare correttamente le foto nel firebase 
  
  open('../bollettino.php' + datiDaInviare,'_self');
  alert('Sarà possibile eliminare piante e animali nella sezione "Le mie piante" e "I miei animali" raggiungibili dal menu laterale!');
</script>

<?php


?>