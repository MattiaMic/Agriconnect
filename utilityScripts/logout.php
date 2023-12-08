<?php 

// Semplice script per il logout - made by @ferr34 
session_start();

session_destroy(); // Variabili di sessione svuotate 

// Ritorno alla home page
header('../home_nologin.php');

?>

