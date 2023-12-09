<?php
  session_start();

  // Creazione connessione per visualizzazzione terreni
  $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
$username = $_GET['username'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
      crossorigin="anonymous"
    />
  <link rel="icon" href="icon/2-removebg-preview.png" type="image/gif" />
  <title>Agriconnect - eliminazione profilo </title>
  </head>

  <style>
      * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, "Helvetica", sans, serif;
  line-height: 1.5;
  background-color: #fff;
  color: #000;
}

.container {
  width: 100%;
  max-width: 1900px;
  margin: auto;
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
  color: #262626;
}

.main-nav {
  background-color: #052500;
  border-radius: 0px;
  display: flex;
  font-weight: bold;
  justify-content: space-between;
  align-items: center;
  height: 100px;
  font-size: 16px;
  padding: 20px 10px;
}

.main-nav .logo {
  font-size: 20px;
}

.main-nav ul {
  display: flex;
}

.main-nav ul li {
  padding: 0 20px;
}

.main-nav ul li a {
  padding-bottom: 2px;
}

.main-nav ul li a:hover {
  border-bottom: 2px solid #262626;
}

.main-nav ul.main-menu {
  display: flex;
  margin-right: 30px;
  padding: 0 20px;
}

     /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: #7EBA27 ;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: ;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

 
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #052500;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #7EBA27;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: -20px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #7EBA27;
  color: #fff;
  padding: 10px 15px;
  border: none;
  position : absolute;
  left : 1870px;
  right : 1870px
}

.openbtn:hover {
  background-color: #fff;
  color:#7EBA27;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
    
.profile-box {
  background-color: none;
  width: 190px;
  height: 110px;
  border-radius: 0px;
}

.intro .avatar {
  background-image: url('https://drive.google.com/uc?export=download&id=0B17myQ5SRYeIa1NYMFFKNGJRdGs');
  background-position: top;
  float: right;
  margin: 25px 15px 0 25px;
  width: 70px;
  height: 70px;
  border-radius: 100%;
  position : absolute;
  left : 1720px;
  right : 1720px
}

.intro .name {
  font-size: 23px;
  padding-top: 25px;
  padding-bottom: 1px;
  position : absolute;
  left : 1670px;
  right : 1670px
} 
    
.footer {
  background-color: #052500;
   width: 100%;
  max-width: 1900px;
  margin: auto;
}

.footer-inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 80px;
  color: #fff;
}

.footer-inner i:hover {
  opacity: 0.3;
}
  </style>
  
  <body>
 <div class="container">
      <!-- Nav -->
      <nav class="main-nav">
        <a href="home_princ.php"><img src="images/e_farm_banner.png" width=174px height=76px alt="EveryFarm, smart agriculture"></a>
         <div class='profile-box'>
          <div class='intro'>
            <div class='avatar'></div>
             <div class='name' style = "color:#7EBA27;"><?php  echo $_SESSION['nome']; echo " "; echo $_SESSION['cognome']; ?></div>
          </div>
        </div>
        
        
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  
  <li>
    <!--<a href="#">
      <i class="fas fa-user" style = "padding-right: 20px">
    </a>-->
  </li>
  <a href="profilo.php"><i class="fa fa-fw fa-user"></i> Utente </a>
  <a href="caricaTerreno.php"><i class="fas fa-plus"></i> Carica terreno</a>
  <a href="#services"><i class="fa fa-fw fa-tractor"></i>Terreni </a>
  <a href="#services"><i class="fa fa-fw fa-home"></i>I miei Terreni </a>
  <a href="#clients"><i class="fa fa-fw fa-horse"></i> I miei Animali</a>
  <a href="#clients"><i class="fa fa-fw fa-leaf"></i> Le mie Piante</a>
  <a href="#contact"><i class="fa fa-fw fa-wrench"></i> Impostazioni</a>
  <a href="utilityScripts/logout.php"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
</div>

        
<button class="openbtn" onclick="openNav()">☰</button>            
        

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
        <ul class="main-menu">
        </ul>
   </nav>
   <?php
    //Cancellazione del profilo dal database
      session_start(); 

        // Creazione connessione al DBMS
        $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

        if(!$conn)
        {
          // Connessione al DBMS non andata a buon fine 
          echo "Errore nella connessione al DBMS rilevato: {$conn -> error}";
        }
      else 
      {
        // Connessione andata a buon fine -> selezione database 
        $conn -> select_db("my_everyfarmpoliba"); 
        
        // Devo eliminare tutti i terreni collegati 
        $estraiIdTerreni = "SELECT idTerreno AS it FROM utenteTerreno WHERE username = '".$_SESSION['username']."' ";
        $resEstraIdTerreni = $conn -> query($estraiIdTerreni) or die("Errore estrazione idTerreni:{$conn -> error}");
        
        // Fetch dei risultati 
        while($row = $resEstraIdTerreni -> fetch_array(MYSQLI_ASSOC))
        {
          // Devo eliminare tutto ciò che e' collegato all'idTerreno
          $idTerreno = $row['it'];
          
          // Query di eliminazione delle piante collegate + somministrazione al DBMS
          $eliminaPiante = "DELETE FROM `pianta` WHERE idTerreno = ".$idTerreno." ";
          $resEliminaPiante = $conn -> query($eliminaPiante) or die("Errore eliminazione piante: {$conn -> error} ");
   
          // Query di eliminazione degli animali collegati + somministrazione al DBMS
          $eliminaAnimali = "DELETE FROM `animale` WHERE idTerreno = ".$idTerreno." "; 
          $resEliminaAnimali = $conn -> query($eliminaAnimali) or die("Errore eliminazione animali: {$conn -> error} ");
   
          // Elimino le foto collegate al terreno + somministrazione al DBMS
          $eliminaFotoTerreno = "DELETE FROM `fotoTerreno` WHERE idTerreno = ".$idTerreno." ";
          $resEliminaFotoTerreno = $conn -> query($eliminaFotoTerreno) or die("Errore eliminazione fotoTerreno: {$conn -> error} ");
    
          // Eliminazione terreno + somministrazione al DBMS
          $eliminaTerreno = "DELETE FROM `terreno` WHERE idTerreno = ".$idTerreno." ";
          $resEliminaTerreno = $conn -> query($eliminaTerreno) or die("Errore eliminazione terreno: {$conn -> error} ");
        }
        
        $query = "DELETE FROM utente WHERE username = '".$_SESSION['username']."'"; 
        $res = $conn -> query($query) or die("Last error: {$conn -> error} \n");
      }
   ?>
    <br>
    <h1 style="color: black; text-align:center; margin-top: 0px;" >
           <b>Cancellazione del profilo terminata. Ci dispiace che tu vada via <?php echo ':('?></b>
         </h1>
    <br>
    <h5 style="color: black; text-align:center; margin-top: 0px;" >
           <b>Grazie per aver scelto EveryFarm </b>
            <script> 
              
              // Apro lo script di Logout per eliminare da $_SESSION parametri utente 
              
              setTimeout(function(){
                open('utilityScripts/logout.php','_self');
              },3000)
            </script>
         </h5>
   <br>
   
   <!-- Footer --> 
    <footer class="footer" style="position: absolute; bottom: 0; left: 0">
        <div class="footer-inner">
          <p>© 2023 All Rights Reserved. Design By SAPD-9</p>
        </div>
    </footer>
</div>
  </body>
</html>