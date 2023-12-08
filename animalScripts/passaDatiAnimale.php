<?php 

// Prendo i dati degli animali inviati + idTerreno  

$numAnimali = $_POST['numAnimali'];
$terreno = $_POST['terrenoDaAggiungere'];
?>
  <script> 
    
    // Apertura pagina parametrizzata 
    
    window.open('../caricaBestia.php?numAnimali2=<?php echo $numAnimali ?>&terreno=<?php echo $terreno ?>','_self');
</script>
<?php

?>