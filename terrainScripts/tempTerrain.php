<?php

// Script per il salvataggio temporaneo dei dati - made by @ferr34 
session_start();

if($_GET['sv'] == 1)
{
  // Devo svuotare il terreno
  unset($_SESSION['nomeTerr']);
  unset($_SESSION['dimTerr']);
  unset($_SESSION['posTerr']);
  unset($_SESSION['utilTerr']);
  unset($_SESSION['prezzTerr']);
  unset($_SESSION['bioTerr']);
  unset($_SESSION['foto1Terr']);
  
  header('Location: ../caricaTerreno.php');
}
else 
{
  
  $_SESSION['nomeTerr'] = $_POST['nomeTerr'];
  $_SESSION['dimTerr'] = $_POST['dimTerr'];
  $_SESSION['posTerr'] = $_POST['posTerr'];
  $_SESSION['utilTerr'] = $_POST['utilTerr'];
  $_SESSION['prezzTerr'] = $_POST['prezzTerr'];
  $_SESSION['bioTerr'] = $_POST['bioTerr'];
  $_SESSION['foto1Terr'] = $_POST['foto1Terr'];
  
  // I dati vengono presi tutti correttamente
  
  header('Location: ../caricaBestia.php');
}

?>