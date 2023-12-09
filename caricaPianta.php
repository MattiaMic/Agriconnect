<?php
session_start(); // Avvio della sessione 

// GET per prendere i dati della modifica

$modifica = $_GET['modifica'];

// Stefano
$idPianta = $_GET['idPianta'];
$fromMyPlants = $_GET['fromMyPlants'];
$modificaFromPlants = $_GET['modificaFromPlants'];

$numPiante2 = $_GET['numPiante2'];
$terreno = $_GET['idTerreno'];

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
  <title>Agriconnect - Inserisci le piante</title>
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
  display: flex;
  justify-content: space-between;
  height: auto;
  width: 100%;
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
  color: none;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: none;
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
  padding: 15px;
  border: none;
  margin: auto;
  margin-left: 15px;
  margin-right: 30px;
  width: 55px;
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
    
 
    
    .button1 { 
      background-color: #7EBA27; /*green */
      border: none;
      border-radius: 10px;
      color: #ffffff;
      padding: 8px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      cursor: pointer;
     ;
      }
    
    .button1:hover {
      background-color: #FFFFFF;
      color: #7EBA27;
      }
         .button2 { 
      background-color: #7EBA27; /*green */
      border: none;
      border-radius: 10px;
      color: #ffffff;
      padding: 8px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      cursor: pointer;
      transition: 0.25;
      }
    
    .button2:hover {
      background-color: #FFFFFF;
      color: #7EBA27;
      }
             .button3 { 
      background-color: #D88315; /* brown */
      border: none;
      border-radius: 10px;
      color: #ffffff;
      padding: 8px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      cursor: pointer;
      transition: 0.25;
      position : absolute;
      left : 30px;
      right : 30px;
      }
    
    .button3:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }

.button1:hover {
  opacity: 0.9;
}

.button2:hover {
  opacity: 0.9;
}

    .button3:hover {
  opacity: 0.9;
}
    
 .box {
  display: grid;
  grid-template-columns: repeat(2, 2fr);
  grid-gap: 20px;
  margin-bottom: 20px;
  margin-left: 20%;
  margin-right: 0px;
  margin-top: 20px;
   width: 100%;
}

.box h3 {
  margin-bottom: 5px;
}

.box a {
  display: inline-block;
  padding-top: 10px;
  color: #0067b8;
  font-weight: bold;
}

.box a:hover i {
  margin-left: 3px;
}
    
  
.showcase {
  width: 100%;
  height: 400px;
  background: url("images/farming_8.jpg") no-repeat center center/cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-style: Italic;
  text-decoration-color: #052500;
  text-align: center;
  justify-content: flex-end;
  padding-bottom: 90px;
  margin-bottom: 20px;
}

.showcase h2 {
  font-size: 30px;
}

.showcase p,
.showcase h2 {
  margin-bottom: 80px;
}

.showcase .btn {
  margin-top: 55px;
}

.center {
  background: url("images/farming_9.jpg") no-repeat center center/cover;
  height: 400px;
  width: 100%;
  font-weight: bold;
  margin: auto;
}

.center .content {
  width: 30%;
  padding: 40px 0 0 40px;
}

.center p {
  margin: 10px 0 20px;
}
    
 .footer {
  background-color: #052500;
   width: 100%;
  margin: auto;
}

.footer-inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 40px;
  color: #fff;
}

.footer-inner i:hover {
  opacity: 0.3;
}  
   .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.price {
  color: #7EBA27;
  font-size: 30px;
}
    
    .intext{
  background-color: none;
  border-color:#D88315;
  border-radius: 20;
  display: flex;
  font-weight: bold;
  justify-content: space-between;
  align-items: left;
  height: 100px;
  font-size: 16px;
  padding: 20px 10px;
  margin-left: 20px;
  margin-right:20px;
  margin-top: 20px;
    }
    
    .profile-box {
  display: flex;
}

.imgprofilo{
  margin: auto;
  width: 75px;
  height: 75px;
  border-radius: 100%;
  margin-left: 15px;
  margin-right: 15px;
}

.name {
  font-size: 23px;
  padding: auto;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: 10px;
  margin-right: 15px;
}
   .container-box{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container-box:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("images/wine.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("images/vistamare.jpg") no-repeat center;
	background-size: cover;
	height: 90%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
  text-align: center;
}

h2:after{
		content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #7EBA27;
}
    h3{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
  text-align: center;
}

h3:after{
		content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #7EBA27;
}

.field{
	width: 100%;
	border: 0px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 150px;
}
    
    /* Add a blue text color to links */
a {
  color: #7EBA27;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #ffff
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #7EBA27;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
       background-color: #FFFFFF;
      color: #7EBA27;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}
  
        svg:not(:root) {
    overflow: hidden;
}
.main-wrapper {
    max-width: 1170px;
    margin: 0 auto;
    text-align: center;
}
.upload-main-wrapper{
    width: 220px;
    margin: 0 auto;
}
#file-upload-name{
    margin: 4px 0 0 0;
    font-size: 12px;
}
.upload-wrapper {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    margin: 40px auto 0;
    position: relative;
    cursor: pointer;
    background-color: #7EBA27;
    padding: 8px 10px;
    border-radius: 10px;
    overflow: hidden;
    transition: 0.2s linear all;
    color: #ffffff;
} 
    
.upload-wrapper input[type="file"] {
    width: 100%;
    position: absolute;
    left: 0;
    right: 0;
    opacity: 0;
    top: 0;
    bottom: 0;
    cursor: pointer;
    z-index: 1;
}
.upload-wrapper > svg {
    width: 50px;
    height: auto;
    cursor: pointer;
}
.upload-wrapper.success > svg{
    transform: translateX(-200px);
}
.upload-wrapper.uploaded {
    transition: 0.2s linear all;
    width: 60px;
    border-radius: 50%;
    height: 60px;
    text-align: center;
}
.upload-wrapper .file-upload-text {
    position: absolute;
    left: 80px;
    opacity: 1;
    visibility: visible;
    transition: 0.2s linear all;
}
.upload-wrapper.uploaded .file-upload-text {
    text-indent: -999px;
    margin: 0;
}
.file-success-text {
    opacity: 0;
    transition: 0.2s linear all;
    visibility: hidden;
    transform: translateX(200px);
    position: absolute;
    left: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}
.file-success-text svg {
    width: 25px;
    height: auto;
}
.file-success-text span{
   margin-left: 15px;
}
.upload-wrapper.success .file-success-text{
    opacity: 1;
    visibility: visible;
    transform: none;
}
.upload-wrapper.success.uploaded .file-success-text{
    opacity: 1;
    visibility: visible;
    transform: none;
}
.upload-wrapper.success.uploaded .file-success-text span{
    display: none;
}
.upload-wrapper .file-success-text circle{
    stroke-dasharray: 380;
    stroke-dashoffset: 380;
    transition: 1s linear all;
    transition-delay: 1.4s;
}
.upload-wrapper.success .file-success-text  circle {
  stroke-dashoffset: 0;
}
.upload-wrapper .file-success-text polyline {
  stroke-dasharray: 380;
  stroke-dashoffset: 380;
  transition: 1s linear all;
  transition-delay: 2s;
}
.upload-wrapper.success .file-success-text polyline {
    stroke-dashoffset: 0;
}
.upload-wrapper.success .file-upload-text{
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft;
    -webkit-animation-duration: 0.2s;
    animation-duration: 0.2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
@-webkit-keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0);
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
}

@keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0);
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0);
    }
} 
  
  .box {
  display: grid;
  grid-template-columns: repeat(2, 2fr);
  grid-gap: 20px;
  margin-bottom: 20px;
  margin-left: 0px;
  margin-right: 0px;
  margin-top: 20px;
   width: 100%;
}
  

/* The Modal (background) */
.modal {
 display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #D88315;
  text-decoration: none;
  cursor: pointer;
}
  
       .buttonUp { 
      background-color: #D88315;
      border: none;
      border-radius: 10px;
      color: #ffffff;
      padding: 8px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      cursor: pointer;
      transition: 0.25;
      }
    
    .buttonUp:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }
   .intext{
  background-color: none;
  display: flex;
  font-weight: bold;
  justify-content: space-between;
  align-items: left;
  height: 100px;
  font-size: 16px;
  padding: 20px 10px;
  margin-left: 20px;
  margin-right:20px;
  margin-top: 20px;
    }
  
  .resetBtn { 
      background-color: #D88315;
      border: none;
      border-radius: 10px;
      color: #ffffff;
      padding: 8px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: auto;
      margin-left: 10px;
      margin-right: 5px;
      cursor: pointer;
    }
    
.resetBtn:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }
    
    .buttonIn { 
      background-color: #7EBA27;
      border: none;
      border-radius: 10px;
      color: #ffffff;
      padding: 8px 22px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 4px 2px;
      cursor: pointer;
      transition: 0.25;
    }
    
.buttonIn:hover {
      background-color: #FFFFFF;
      color: #7EBA27;
      }
  
  #imglogo {
    margin: 5px 10px;
  }
  </style>
  
   <!-- Parametri firebase --> 
       <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
       <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-storage.js"></script>
       <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-analytics.js"></script>
  
   <!-- Libreria js per i cookie per salvare i dati durante l'inserimento del terreno --> 
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    
  
  <body>
    <div>
 <div class="container">
   
       <!-- Nav -->
      <nav class="main-nav">
        <a id="imglogo" href="home_princ.php?numPagina=1&numPaginaVecchio=1"><img  src="images/e_farm_banner.png" width=174px height=76px alt="EveryFarm, smart agriculture"></a>
          
        <div class='profile-box'>
          <p class='name' style = "color:#7EBA27;"><?php echo $_SESSION['nome']." ".$_SESSION['cognome']?></p>
          <img class='imgprofilo' src="<?php echo $_SESSION['fotoP'] ?>">
          <button class="openbtn" onclick="openNav()">☰</button> 
        </div>
       
        
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  
  <li>
    <!--<a href="#">
      <i class="fas fa-user" style = "padding-right: 20px">
    </a>-->
  </li>
  <a href="profilo.php"><i class="fa fa-fw fa-user"></i> Profilo </a>
  <a href="caricaTerreno.php"><i class="fas fa-plus"></i> Carica terreno</a>
  <a href="imieiterreni.php"><i class="fa fa-fw fa-tractor"></i> I miei Terreni </a>
  <a href="imieianimali.php?nomeTerreno=inserisci"><i class="fa fa-fw fa-horse"></i> I miei Animali</a>
  <a href="lemiepiante.php?idTerreno=inserisci"><i class="fa fa-fw fa-leaf"></i> Le mie Piante</a>

  <a href="utilityScripts/logout.php"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
</div>

        

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
  
        
     // Parametri configurazione firebase 
         var firebaseConfig = {
                    apiKey: "AIzaSyDXf6qD_2AzY8iUnQJK676NS6N_kBTtJtc",
                    authDomain: "everyfarm-b43bf.firebaseapp.com",
                    projectId: "everyfarm-b43bf",
                    storageBucket: "everyfarm-b43bf.appspot.com",
                    messagingSenderId: "1072050933912",
                    appId: "1:1072050933912:web:b4df5bed7af8c098e540ed",
                    measurementId: "G-ZBF8EGH7ZE"
                            };
                firebase.initializeApp(firebaseConfig);
  
   // Inizializzo la url della foto modificata 
  var urlFotoMod = null; 
  
  function noEmptyCookie(i)
  {
    // Controllo se i cookie sono pieni o meno 
    
      // Salvo i nuovi nomi delle variabili per controllare se sono pieni 
          var nomeNuovo = "nomeP" + i;
          var dimNuovo = "dimensioneP" + i;
          var bioNuovo = "bioP" + i;
    
    if(Cookies.get(nomeNuovo) != null)
      {
        // Cookie pieno -> Setto il valore
        document.getElementById('nomeComune' + i).value = Cookies.get(nomeNuovo);
      }
    
    if(Cookies.get(dimNuovo) != null)
      {
        // Cookie pieno -> Salvo la dimensione
        document.getElementById('dimensione' + i).value = Cookies.get(dimNuovo);
      }
    
    if(Cookies.get(bioNuovo) != null)
      {
        // Cookie pieno -> Salvo la bio 
        document.getElementById('bio' + i).value = Cookies.get(bioNuovo);
      }
    
    
  }
</script>
        
   </nav>
   </div>
      <script> 
              <?php 
          if($_SESSION['primaVoltaP'] == 0)
          {
            // Prima volta nel caricamento delle piante 
            $_SESSION['primaVoltaP'] = 1; 
            for($i = 0; $i < $_SESSION['numPiante']; $i++)
                {
                  ?>
                      // Salvo i nuovi nomi delle variabili per rimuovere dal cookie 
                      var nomeNuovo = "nomeP<?php echo $i ?>";
                      var dimNuovo = "dimensioneP<?php echo $i ?>";
                      var bioNuovo = "bioP<?php echo $i ?>"; 
          
                      Cookies.remove(nomeNuovo);
                      Cookies.remove(dimNuovo);
                      Cookies.remove(bioNuovo);
                  <?php
                }
            
            // Redirect 
            header('Location: caricaPianta.php');
          }
        
        ?>
      </script>
      
     
      
      <div class="container-box">
		<div class="contact-box">
		
      <?php 
  
        if($modifica == 1 && $idPianta != null)
        {
          // Ci stiamo riferendo alla situazione di modifica
          
          ?>
            
         		<div class="right">
        				<h2 style="font-size: 30px">Modifica pianta</h2>
        <br>
				<input type="text" class="field" id = "nomeComune<?php echo $idPianta?>" placeholder="Nome comune" required>
         <label for = "bio" style="color: grey; margin: left">Dimensione: </label>
        <select id="dimensione<?php echo $idPianta?>" class="field">
          <option value="Grande"> Grande </option>
          <option value="Media"> Media </option>
          <option value="Piccola"> Piccola </option>
        </select>
        <label for = "bio" style="color: grey; margin: left">Aggiungi una descrizione</label>
        <textarea id = "bio<?php echo $idPianta?>" rows = "4" cols = "50" class = "field"> </textarea>
                    
        <script> 
          // Funzione per recupero informazioni 
          noEmptyCookie(<?php echo $idPianta ?>)
        </script>
       
           <!-- reset button --> 
                  <button class="resetBtn" onclick = "svuotaForm(<?php echo $idPianta ?>)">Reset</button>
      
      
        <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file-pianta<?php echo $idPianta?>" onchange = "fotoPianta(<?php echo $idPianta ?>)" name = "inserisciFoto">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto pianta</span>
                        <div class="file-success-text">
                         <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100"  xml:space="preserve">
                <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 "/>
                </svg> <span>Successfully</span></div>
                    </div>
                    <p id="file-upload-name"></p>
        </div>
    </div>

           
    
      </div>
           <?php
          
          
        }
  
  
      // Se la variabile di sessione con il numero di animali e' nullo salto gia' all'altra pagina 
      if($_SESSION['numPiante'] == 0 && $numPiante2 == null && $fromMyPlants == null && $idPianta == null && $modificaFromPlants == null && $modifica == null )
      {
        // Salto al bollettino finale -> il controllo funziona correttamente 
        ?>
          <script>window.open('bollettino.php','_self');</script>
        <?php
      }
      else if(($_SESSION['numPiante'] == 0 || $_SESSION['numPiante'] == null) && $numPiante2 != null && $fromMyPlants == null && $idPianta == null && $modificaFromPlants == null && $modifica == null)
      {
        // Ci sono piante da caricare -> aggiunta da "Le mie piante"
        for($i = 0; $i < $numPiante2; $i++)
        {
          ?>
              		<div class="right">
        				<h2 style="font-size: 30px">Inserisci pianta</h2>
        <br>
				<input type="text" class="field" id = "nomeComune<?php echo $i?>Add" placeholder="Nome comune" required>
         <label for = "bio" style="color: grey; margin: left">Dimensione: </label>
        <select id="dimensione<?php echo $i?>Add" class="field">
          <option value="Grande"> Grande </option>
          <option value="Media"> Media </option>
          <option value="Piccola"> Piccola </option>
        </select>
        <label for = "bio" style="color: grey; margin: left">Aggiungi una descrizione</label>
        <textarea id = "bio<?php echo $i?>Add" rows = "4" cols = "50" class = "field"> </textarea>
                    
       
           <!-- Reset button --> 
                       <button class="resetBtn" onclick = "svuotaForm(<?php echo $i ?>)Add">Reset</button>
    
       
        <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file-pianta<?php echo $i?>" onchange = "fotoPiantaAdd(<?php echo $i ?>)" name = "inserisciFoto">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto pianta</span>
                        <div class="file-success-text">
                         <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100"  xml:space="preserve">
                <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 "/>
                </svg> <span>Successfully</span></div>
                    </div>
                    <p id="file-upload-name"></p>
        </div>
    </div>
  
      </div>
          <?php
        }
      }
      
      if($modificaFromPlants == 1 && $fromMyPlants == 1 && ($_SESSION['numPiante'] == 0 || $_SESSION['numPiante'] == null) && $modifica == null) // Stefano (tutto il blocco)
      {
        // Estrapolo i dati tramite l'id
        // Creazione connessione 
        $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

        if(!$conn)
        {
          // Connessione non riuscita 
          echo "Errore di connessione:";
          echo mysqli_errno();
        }
        else 
        {
          // Connessione riuscita -> Selezione database
          $conn -> select_db("my_everyfarmpoliba");
          
          // Query + somministrazione
          $estraiDatiPiante = "SELECT * FROM pianta WHERE idPianta = ".$idPianta.";";
          $resEstraiDatiPiante = $conn -> query($estraiDatiPiante) or die("Errore estrazione dati animali:{$conn -> error}");
          
          while($row = $resEstraiDatiPiante -> fetch_Array(MYSQLI_ASSOC))
          {
            // Fetch dei risultati + creazione form ad hoc
            ?>
                     <div class="right">
        				<h2 style="font-size: 30px">Modifica Pianta</h2>   
        <br>
        <input type="text" class="field" id = "nomeComuneMod" placeholder="Nome Pianta" value = "<?php echo $row['nomeComune']; ?>" required>
        <select id="dimensioneMod" class="field">
          <option value="Grande"> Grande </option>
          <option value="Media"> Media </option>
          <option value="Piccola"> Piccola </option>
        </select>
        <label for = "bioMod" style="color: grey; margin: left">Aggiungi una descrizione</label>
        <textarea id = "bioMod" rows = "4" cols = "50" class = "field"> <?php echo $row['bioPianta'] ?></textarea>
       <button class="resetBtn" id = "resetBtn" onclick = "svuotaForm_modifica()">Reset</button>
       
          
       
          <script> 
      function svuotaForm_modifica()
            {
              // Svuoto tutto 
              document.getElementById('nomeComuneMod').value = " ";
              document.getElementById('bioMod').value = " ";
              
            }
      </script>
          
        <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file-piantaMod"  name = "inserisciFoto" onclick='window.alert("Scegliere con cura. Il pulsante verrá poi disabilitato")'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text"> Carica foto Pianta </span>
                        <div class="file-success-text">
                         <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100"  xml:space="preserve">
                <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 "/>
                </svg> <span>Successfully</span></div>
                    </div>
                    <p id="file-upload-name"></p>
        </div>
    </div>
        
      </div>
            <?php
          }
        }
      }
            
      
      if($numPiante2 != null && $terreno != null && ($_SESSION['numPiante'] == 0 || $_SESSION['numPiante'] == null) && $modifica == null )  
      {
        for($cont = 0; $cont < $numPiante2; $cont++)
        {
          ?>
            <div class="right">
        				<h2 style="font-size: 30px">Aggiungi Pianta</h2>   
        <br>
        <input type="text" class="field" id = "nomeComune<?php echo $cont ?>Add" placeholder="Nome Pianta" required>
        <select id="dimensione<?php echo $i; ?>Add" class="field">
          <option value="Grande"> Grande </option>
          <option value="Media"> Media </option>
          <option value="Piccola"> Piccola </option>
        </select>
        <label for = "bio<?php echo $cont ?>Add" style="color: grey; margin: left">Aggiungi una descrizione</label>
        <textarea id = "bio<?php echo $cont ?>Add" rows = "4" cols = "50" class = "field"> </textarea>
               
          <button class="resetBtn" id = "resetBtn<?php echo $cont ?>Add" onclick = "svuotaFormAdd(<?php echo $cont?>)">Reset</button>
        <div class="box">
   
          <script> 
      
  
      </script>
          
        <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file-piantaAdd<?php echo $cont ?>"  name = "inserisciFoto" onclick='window.alert("Scegliere con cura. Il pulsante verrá poi disabilitato")'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text"> Carica foto Pianta </span>
                        <div class="file-success-text">
                         <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100"  xml:space="preserve">
                <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 "/>
                </svg> <span>Successfully</span></div>
                    </div>
                    <p id="file-upload-name"></p>
        </div>
    </div>
        </div>
      </div>
          <?php
        }
      }
      
      if($_SESSION['numPiante'] != null && $_SESSION['numPiante'] != 0 && $modifica == null && $numPiante2 == null)
      {
         for($i = 0; $i < $_SESSION['numPiante']; $i++)
      {
        ?>
          <div class="right">
        				<h2 style="font-size: 30px">Inserisci pianta</h2>
        <br>
				<input type="text" class="field" id = "nomeComune<?php echo $i?>" placeholder="Nome comune" required>
         <label for = "bio" style="color: grey; margin: left">Dimensione: </label>
        <select id="dimensione<?php echo $i?>" class="field">
          <option value="Grande"> Grande </option>
          <option value="Media"> Media </option>
          <option value="Piccola"> Piccola </option>
        </select>
        <label for = "bio" style="color: grey; margin: left">Aggiungi una descrizione</label>
        <textarea id = "bio<?php echo $i?>" rows = "4" cols = "50" class = "field"> </textarea>
                    
        <script> 
          // Funzione per recupero informazioni 
          noEmptyCookie(<?php echo $i ?>)
        </script>
       
           <!-- reset button --> 
                      <button class="resetBtn" onclick = "svuotaForm(<?php echo $i ?>)">Reset</button>

        <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file-pianta<?php echo $i?>" onchange = "fotoPianta(<?php echo $i ?>)" name = "inserisciFoto">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto pianta</span>
                        <div class="file-success-text">
                         <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100"  xml:space="preserve">
                <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 "/>
                </svg> <span>Successfully</span></div>
                    </div>
                    <p id="file-upload-name"></p>
        </div>
    </div>
   
      </div>
      
         <?php
      }
      
      }
      
     
            
      ?>
      
      <script> 
        
        // Funzione reset form -> parametrizzata 
        
        function svuotaForm(i)
        {
          saveToCookie_plants();
          
          // Salvo i nuovi nomi delle variabili per rimuovere dal cookie 
          var nomeNuovo = "nomeP" + i;
          var bioNuovo = "bioP" + i; 
          
          Cookies.remove(nomeNuovo);
          Cookies.remove(bioNuovo);
          
          window.open('caricaPianta.php','_self');
        }
        
     
        // Caricamento foto singola pianta -> utile per quando si vogliono inserire più piante 
        function fotoPianta(i)
        {
          var nuovaUrl;
          
          var fileButton = document.getElementById('upload-file-pianta' + i); 
          var file = fileButton.files[0]; // Prendo il file 
          console.log('Nome file pianta:' + file.name); 
          
          // Caricamento nel firebase 
              const ref = firebase.storage().ref().child(file.name);
              const task = ref.put(file);
              
              // Controllo caricamento + prendo la URL 
              task
              .then(snapshot => snapshot.ref.getDownloadURL())
              .then(url => {
                console.log('Url trovata:' + url);
                document.querySelector('#upload-file-pianta' + i);
                document.getElementById('upload-file-pianta' + i).disabled = true;
                nuovaUrl = url;
                
                // Salvataggio nel cookie 
                var nomePianta = 'Pianta' + i;
                Cookies.set(nomePianta, nuovaUrl);
              });
          
          // Caricamento pianta signola -> OK 
        }
        
        function fotoPiantaAdd(i)
        {
          var nuovaUrl;
          
          var fileButton = document.getElementById('upload-file-pianta' + i); 
          var file = fileButton.files[0]; // Prendo il file 
          console.log('Nome file pianta:' + file.name); 
          
          // Caricamento nel firebase 
              const ref = firebase.storage().ref().child(file.name);
              const task = ref.put(file);
              
              // Controllo caricamento + prendo la URL 
              task
              .then(snapshot => snapshot.ref.getDownloadURL())
              .then(url => {
                console.log('Url trovata:' + url);
                document.querySelector('#upload-file-pianta' + i);
                document.getElementById('upload-file-pianta' + i).disabled = true;
                var nuovaURL = "urlFoto";
                var urlFoto = nuovaURL + i;
                 urlFoto = url;
                console.log(urlFoto);
                
              });
          
        }
      
      </script>
      
          <script> 
      
      function saveToCookie_plants()
      {
        // Salvo e numero i cookie
        <?php 
        $contPlant = 0; 
            for($contPlant = 0; $contPlant < $_SESSION['numPiante']; $contPlant++)
            {
              ?>
                Cookies.set('nomeP<?php echo $contPlant ?>', document.getElementById('nomeComune<?php echo $contPlant ?>').value);
                Cookies.set('dimensioneP<?php echo $contPlant ?>', document.getElementById('dimensione<?php echo $contPlant ?>').value);
                Cookies.set('bioP<?php echo $contPlant ?>', document.getElementById('bio<?php echo $contPlant ?>').value);
              <?php
            }
        ?>      
        
      }
    
    
    </script>
      
	
   </div>
 </div>
    </div>
    <br>
    <br>
    <br>
        <div class="intext">
            <!-- Pulsanti abilitati -->
          
          <?php
          
          // Inserimento normale 
              if($_SESSION['numPiante'] != 0 && $fromMyPlants == null && $idPianta == null && $modificaFromPlants == null && $modifica == null)
              {
                // Caricamento normale
                
                if($_SESSION['numAnimali'] == 0)
                {
                  // Dobbiamo torniamo al terreno 
                   ?>
                    <button class="button2" onclick='saveToCookie_terrain()'> Torna a "I miei terreni" </button>
                    <button class="buttonIn"  onclick="saveToCookie_bollettino(<?php echo $idPianta; ?>)">Avanti</button>
                <?php
                  
                }
                else 
                {
                  // Dobbiamo tornare a "I miei animali"
                   ?>
                    <button class="button2" onclick='saveToCookie_animals()'> Torna a "I miei animali" </button>
                    <button class="buttonIn"  onclick="saveToCookie_bollettino()">Avanti</button>
                <?php
                  
                }
              }
          
            // Modifica
            if($_SESSION['numPiante'] == 0 && ($fromMyPlants == 1 && $idPianta != null && $modificaFromPlants == 1))
            {
              // Modifica da "Le mie piante" 
              ?>
                 <button class="button2" onclick="window.open('lemiepiante.php?idTerreno=inserisci','_self')">Torna a "Le mie piante"</button>
                 <button class="buttonIn"  onclick="setTimeout(modificaDatiPianta,3000);">Modifica</button>
              <?php 
            }
          
            if($_SESSION['numPiante'] != 0 && $modifica == 1 && $modificaFromPlants != 1)
            {
              // Modifica da "Bollettino" 
              ?>
                 <button class="button2" onclick="window.open('bollettino.php','_self')">Torna al bollettino </button>
                 <button class="buttonIn"  onclick="saveToCookie_bollettino_modifica(<?php echo $idPianta ?>)">Modifica</button>
              <?php
            }
          
          if($_SESSION['numPiante'] == 0 && $numPiante2 != null && $fromMyPlants == null && $idPianta == null && $modificaFromPlants == null && $modifica == null)
          {
            ?>
              <button class="button2" onclick="window.open('lemiepiante.php?idTerreno=inserisci','_self')">Torna a "Le mie piante" </button>
            <button class="buttonIn"  onclick="aggiungiPianta()">Inserisci</button>
            <?php 
          }
          ?>
        </div>
    <script> 
    // Carico la foto nel firebase della pianta - situazione di modifica
        var fileButton = document.getElementById('upload-file-piantaMod');
        fileButton.addEventListener('change',function(){
          
          // carico la foto nel firebase 
         var file = fileButton.files[0];
        
            console.log("entro");
              // Caricamento nel firebase
              const ref = firebase.storage().ref().child(file.name);
              const task = ref.put(file);
              
              // Controllo caricamento + prendo la URL 
              task
              .then(snapshot => snapshot.ref.getDownloadURL())
              .then(url => {
                console.log('Url trovata:' + url);
                document.querySelector('#upload-file-piantaMod');
                document.getElementById('upload-file-piantaMod').disabled = true;
                urlFotoMod = url;
              });
        })
      
      function modificaDatiPianta()
      { 
        // Prendo i dati modificati
        var nuovoNome = document.getElementById('nomeComuneMod').value;
        var nuovaDimensione = document.getElementById('dimensioneMod').value;
        var nuovaBio = document.getElementById('bioMod').value;
        var nuovaFoto = urlFotoMod;
        
        var datiDaInviare = "idPianta=<?php echo $idPianta; ?>&nuovoNome=" + nuovoNome + "&nuovaDimensione=" + nuovaDimensione + "&nuovaBio=" + nuovaBio; 
        if(nuovaFoto != null)
          {
            datiDaInviare = datiDaInviare + "&nuovaFoto=" + nuovaFoto;
          }
        
        window.open('plantScripts/ModificaPianta.php?' + datiDaInviare,'_self'); // Passaggio parametri 
                                                           // Quando apro il file PHP devo controllare che non sia stato inserito un nome vuoto -> riapro questa pagina con modifica e idAnim come parametri 
      }
      
      
      
      function saveToCookie_plants()
      {
        // I cookie vengono correttamente numerati -> problema risolto 
        <?php 
           for($k = 0; $k < $_SESSION['numPiante']; $k++)
           {
             // Cookie correttamente presi 
             ?>
                Cookies.set('nomeP<?php echo $k ?>',document.getElementById('nomeComune<?php echo $k ?>').value);
                Cookies.set('dimensioneP<?php echo $k ?>',document.getElementById('dimensione<?php echo $k ?>').value);
                Cookies.set('bioP<?php echo $k ?>',document.getElementById('bio<?php echo $k ?>').value);
             <?php
           }
        ?>
        window.open('caricaPianta.php','_self');
      }
      
      function saveToCookie_animals()
      {
        // I cookie vengono correttamente numerati  
        <?php 
           for($k = 0; $k < $_SESSION['numPiante']; $k++)
           {
             // Cookie correttamente presi + ritorno al caricamento degli animali 
             ?>
                Cookies.set('nomeP<?php echo $k ?>',document.getElementById('nomeComune<?php echo $k ?>').value);
                Cookies.set('dimensioneP<?php echo $k ?>',document.getElementById('dimensione<?php echo $k ?>').value);
                Cookies.set('bioP<?php echo $k ?>',document.getElementById('bio<?php echo $k ?>').value);
             <?php
           }
        ?>
        window.open('caricaBestia.php','_self');
      }
      
      function saveToCookie_terrain()
      {
        <?php 
           for($k = 0; $k < $_SESSION['numPiante']; $k++)
           {
             // Cookie correttamente presi + ritorno al terreno
             ?>
                Cookies.set('nomeP<?php echo $k ?>',document.getElementById('nomeComune<?php echo $k ?>').value);
                Cookies.set('dimensioneP<?php echo $k ?>',document.getElementById('dimensione<?php echo $k ?>').value);
                Cookies.set('bioP<?php echo $k ?>',document.getElementById('bio<?php echo $k ?>').value);
             <?php
           }
        ?>
        window.open('caricaTerreno.php','_self');
      }
      
      function saveToCookie_bollettino()
      {
        <?php 
           for($k = 0; $k < $_SESSION['numPiante']; $k++)
           {
             // Cookie correttamente presi + ritorno al bollettino
             ?>
                Cookies.set('nomeP<?php echo $k ?>',document.getElementById('nomeComune<?php echo $k ?>').value);
                Cookies.set('dimensioneP<?php echo $k ?>',document.getElementById('dimensione<?php echo $k ?>').value);
                Cookies.set('bioP<?php echo $k ?>',document.getElementById('bio<?php echo $k ?>').value);
             <?php
           }
        ?>
        window.open('bollettino.php','_self');
      }
      
      function saveToCookie_bollettino_modifica(i)
      {
        
        // Salvataggio dati modificati da bollettino + ritorno al bollettino  
        
         Cookies.set('nomeP' + i,document.getElementById('nomeComune' + i).value);
         Cookies.set('dimensioneP' + i,document.getElementById('dimensione' + i).value);
         Cookies.set('bioP' + i,document.getElementById('bio' + i).value);
        
        window.open('bollettino.php','_self');
        
      }
      
      function aggiungiPianta()
      {
        // Aggiunta nuove piante
         window.alert('Caricamento nei nostri database, prego attendere...')
        var datiInviati = ""; 
        var checkOk = 0; 
        
        <?php
   
            for($i = 0; $i < $numPiante2; $i++)
            {
         
              ?>
                var nomePianta<?php echo $i; ?> = document.getElementById('nomeComune<?php echo $i; ?>Add').value;
                var dimensionePianta<?php echo $i; ?> = document.getElementById('dimensione<?php echo $i; ?>Add').value;
                var bioPianta<?php echo $i; ?> = document.getElementById('bio<?php echo $i; ?>Add').value; 

                <?php
                   if($i == 0)
                    {
                      ?>
                          datiInviati = datiInviati + '?'
                          console.log(datiInviati);
                      <?php
                    }
                   else 
                    {
                      ?>
                          datiInviati = datiInviati + '&'
                      <?php
                    }
                  ?>
        
                datiInviati = datiInviati + 'nomeComune<?php echo $i; ?>=' + nomePianta<?php echo $i ?> + 
                      '&dimensionePianta<?php echo $i ?>=' + dimensionePianta<?php echo $i; ?> 
                      + '&bioPianta<?php echo $i; ?>=' + bioPianta<?php echo $i; ?> + '&fotoPianta<?php echo $i ?>=' + urlFoto<?php echo $i; ?>; 
              <?php
            }
        
        ?>
        
        // Aggiungo idTerreno 
        datiInviati = datiInviati + '&idTerreno=<?php echo $terreno; ?>&numPiante=<?php echo $numPiante2; ?>';

        // Passo allo script i dati da aggiungere
        if(checkOk == 0)
          {
            console.log(datiInviati);
            setTimeout(function(){console.log("prova")},10000);
            window.open('plantScripts/inserisciNuovePiante.php' + datiInviati, '_self'); 
          }
        else 
          {
            // Dati non corretti 
            datiInviati = " "; 
          }
       
      }
      
 
    </script>

  <!-- Footer --> 
<div>
    <footer class="footer">
        <div class="footer-inner">
          <p> Contact us: everyfarmpoliba@gmail.com </p>
          <p>© 2021 All Rights Reserved. Design By Gruppo 31</p> 
        </div>
    </footer>
</div>
  </body>
</html>
  