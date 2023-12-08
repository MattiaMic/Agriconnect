<?php

  // Script che passa l'URL della foto appena caricata - made by @ferr34
	
  // Inizio della sessione
  session_start();
  
  // Metto in una variabile di sessione il pathname 
  $_SESSION['photo_path'] = $_POST['photo_path'];
?>