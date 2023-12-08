<?php 

// Prendo i dati delle piante inviate

$numPiante = $_POST['numPiante'];
echo $numPiante;
$terreno = $_POST['terrenoDaAggiungere'];
?>
  <script> 
    // Apertura pagina parametrizzata 
    window.open('../caricaPianta.php?numPiante2=<?php echo $numPiante ?>&terreno=<?php echo $terreno ?>','_self');
</script>
<?php

?>