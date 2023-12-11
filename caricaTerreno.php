<?php 
session_start(); // Avvio della sessione 

$_SESSION['primaVoltaBollettino'] = 0;

// Dati per la modifica inviati in GET 
$modifica = $_GET['modifica'];

// Flag che indicano da che pagina proviene la chiamata 
$fmt = $_GET['fmt'];
$idTerreno = $_GET['idTerreno'];
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
  <title>Agriconnect - Inserisci un terreno</title>
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
  grid-template-columns: repeat(4, 2fr);
  grid-gap: 20px;
  margin-bottom: 20px;
  margin-left: 0px;
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
	background: url("images/zozza.jpg") no-repeat center;
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
  
  .reset { 
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
    
.reset:hover {
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
.buttonVyg { 
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
    
.buttonVyg:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }
  
  .box {
  display: grid;
  grid-template-columns: repeat(3, 2fr);
  grid-gap: 20px;
  margin-bottom: 20px;
  margin-left: 0px;
  margin-right: 0px;
  margin-top: 20px;
   width: 100%;
}
  
 /*login popup*/    
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
    .button1 { 
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
      margin-left: 5px;
      margin-right: 10px;
      cursor: pointer;
      }
    
    .button1:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }

/* Center the image and position the close button */
.imgcontainer-box {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 60%;
  border-radius: 50%;
}

.container-box {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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

/* Modal Content Box*/
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #D88315;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
  .texing{
    position: center;
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
        <a id="imglogo" href="home_princ.php?numPagina=1&numPaginaVecchio=1"><img src=icon/AGRICONNECT-removebg-preview.png width=174px height=76px alt="EveryFarm, smart agriculture"></a>
          
        <div class='profile-box'>
          <p class='name' style = "color:#7EBA27;"><?php  echo $_SESSION['nome']." ".$_SESSION['cognome'] ?></p>
          <img class='imgprofilo' src="<?php echo $_SESSION['fotoP'] ?>"> <!-- Devo importare l'icona --> 
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
  
  var contAlert = 0;
  var contAlert_prezzo = 0; 
  var contAlert_dim = 0;
  

</script>
   </nav>
   </div>
      <br>
      <?php
        
        // Impostazioni bottoni in base ai parametri ricevuti 
        
        if(($fmt != null || $fmt == 0) && $idTerreno != null) 
        {
          // Situazione normale 
          ?>
              <button class="buttonVyg"  onclick="location.href = 'imieiterreni.php' " style="margin-left: 2%"><i class="fas fa-chevron-left"></i> Torna a "I miei terreni"</button>
          <?php
        }
        
        else
        {
          // Arrivo da "I miei terreni"
          ?>
              <button class="buttonVyg"  onclick="location.href = 'home_princ.php?numPagina=1&numPaginaVecchio=1' " style="margin-left: 2%"><i class="fas fa-chevron-left"></i> Torna alla home</button>
          <?php
        }
      ?>
       
      <div class="container-box">
        
		<div class="contact-box">
		
      <?php 
      
          if($fmt == 1 && $idTerreno != null)
          {

            // Modifica da "I miei terreni" -> Devo estrarre i dati dalla query da inserire nella value di ogni elemento 
            
            // Collegamento al DBMS
            $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarm","Mc6xAMaFG974"); 

            // Controllo connessione 
            if(!$conn)
              {
                // Connessione non andata a buon fine 
                  die("Errore rilevato nella connessione al database: {$conn -> error}");
              }
            else 
              {
                // Connessione andata a buon fine -> selezione database
                $conn -> select_db("my_everyfarmpoliba"); 
                
                $estraiInfoTerreni = "SELECT * FROM terreno WHERE idTerreno = ".$idTerreno." ";
              
                
                // Somministrazione query 
                $resEstraiInfoTerreni = $conn -> query($estraiInfoTerreni) or die("Errore estrazione info terreni: {$conn -> error}");
              
                // Fetch dei risultati e compilazione scheda terreno
                while($row = $resEstraiInfoTerreni -> fetch_array(MYSQLI_ASSOC))
                {
                  ?>
                    <div class="right">
        				      <h2 style="font-size: 30px">Inserisci un terreno</h2>
                        <input type="text" class="field" id = "nomeTMod" value = "<?php echo $row['nomeTerreno'] ?>" placeholder="Nome Terreno">
                        <input type="text" class="field" id = "dimensioneTMod"  value = "<?php echo $row['dimensione'] ?>" placeholder="Dimensione (in ettari)" required>
				                <input type="text" class="field" id = "posizioneTMod" value = "<?php echo $row['prezzo'] ?>" placeholder="Indirizzo (Es.Via Palmieri,94.Bari)"required>
                        <input type="text" class="field" id = "utilizzoPrincipaleTMod" value = "<?php echo $row['utilizzo'] ?>" placeholder="Utilizzo principale" required>
                        <input type="text" class="field" id = "prezzoTMod" onclick = "msgPrezzo()" value = "<?php echo $row['prezzo'] ?>" placeholder="Prezzo (in €)" required>
        
                    <label for = "bio" style="color: grey; margin: left">Aggiungi una descrizione</label>
                      <textarea id = "bioTMod" rows = "4" cols = "50" class = "field"> <?php echo $row['descrizione'] ?></textarea>

                      <br><br>    
                    </div>
            <?php
                }
              
              }
               
          }
          else 
          {
            // Inserimento in condizioni normali 
            ?>
              <div class="right">
        				<h2 style="font-size: 30px">Inserisci un terreno</h2>
                    <input type="text" class="field" id = "nomeT" placeholder="Nome Terreno">
                    <input type="text" class="field" id = "dimensioneT" placeholder="Dimensione (in ettari)" required>
				            <input type="text" class="field" id = "posizioneT" placeholder="Indirizzo (Es.Via Palmieri,94.Bari)"required>
                    <input type="text" class="field" id = "utilizzoPrincipaleT" placeholder="Utilizzo principale" required>
                    <input type="text" class="field" id = "prezzoT" onclick = "msgPrezzo()" placeholder="Prezzo (in €)" required>
        
                    <label for = "bio" style="color: grey; margin: left">Aggiungi una descrizione</label>
        <textarea id = "bioT" rows = "4" cols = "50" class = "field"> </textarea>
        <script>
                 
          // Controllo presenza o meno valori cookie 
           function noEmptyCookie()  
            {
                if(Cookies.get('nomeTerreno') != null)
                     {
                       document.getElementById('nomeT').value = Cookies.get('nomeTerreno');
                     }
              
              if(Cookies.get('dimensioneTerreno')!= null)
                {
                  document.getElementById('dimensioneT').value = Cookies.get('dimensioneTerreno');
                }
              
              if(Cookies.get('posizioneTerreno') != null)
                {
                  document.getElementById('posizioneT').value = Cookies.get('posizioneTerreno');
                }
              
              if(Cookies.get('utilizzoTerreno') != null)
                {
                  document.getElementById('utilizzoPrincipaleT').value = Cookies.get('utilizzoTerreno');
                }
              
              if(Cookies.get('prezzoTerreno') != null)
                {
                  document.getElementById('prezzoT').value = Cookies.get('prezzoTerreno');
                }
              
               if(Cookies.get('bioTerreno') != null)
                {
                  document.getElementById('bioT').value = Cookies.get('bioTerreno');
                }  
            }
          
          <?php
            if($fmt == null || $fmt == 0)
            {
              // Permette di non perdere i dati 
              ?>
                 noEmptyCookie(); 
              <?php
            }
          ?>
         
        
        </script> 
        <div class="box">
        <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file1" name = "inserisciFoto" onclick='msgAvviso()'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto terreno </span>
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
         <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file2" name = "inserisciFoto" onclick='msgAvviso()'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto terreno </span>
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
             <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file3" name = "inserisciFoto" onclick='msgAvviso()'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto terreno </span>
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
             <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file4" name = "inserisciFoto" onclick='msgAvviso()'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto terreno </span>
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
             <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file5" name = "inserisciFoto" onclick='msgAvviso()'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto terreno </span>
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
             <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file6" name = "inserisciFoto" onclick='msgAvviso()'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica foto terreno </span>
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

               <!-- Trigger/Open The Modal -->
        <label for = "bio" style="color: grey; margin: left">In caso si voglia aggiugere una pianta o un'animale in più: </label>
        <button id="myBtn" class="button1" onclick="document.getElementById('id01').style.display='block'">Inserisci animali e piante qui!</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="utilityScripts/numPiantenumAnimali.php" method="post"> <!-- Operazione OK -->
    <div class="imgcontainer-box">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br>
    </div>
 <div class="texing"><h2 style="font-size: 50px">Inserisci animali o piante</h2></div>
    <br>
    <label for = "bio" style="color: grey; margin-left:2%; margin-right:2%">EveryFarm permette il caricamento di animali e piante corellato al terreno in vendita .Con questo popup l'utente potrà decidere il numero da inserire: </label>
    <div class="container-box">
      <br>
      <form>
      <input type="text" class="field" name = "numAnimali" style="margin-right: 2%" placeholder="Numero animali">
      <input type="text" class="field" name = "numPiante" style="margin-right: 2%" placeholder="Numero piante">
      </form>
      <br>
      <br>
      <button class="button1" type="submit" onclick="saveToCookie()" style="margin-left=10%">Inserisci</button>
  
    </div>
  </form>
</div>
        
        <script>
        // Controllo che il messaggio di alert non venga ripetuto piu' volte 
          function msgAvviso()
          {
            if(contAlert == 0)
              {
                window.alert("Se si ricaricherà la pagina non si perderanno ne le foto caricate ne le informazioni sul terreno. Scegliere con cura perchè i pulsanti verranno poi disabilitati!");
                contAlert = 1;
              }
          }
        </script>

 <script>
    //Login
     // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
   </script>
      <br><br>    
            
          
     <script>    
       
       
       
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
       
       // Caricamento prima foto
       
       // Variabile superglobale 
       var nuovaUrl; 
     
       // Funzione per inserimento della foto + disabilita il pulsante delle foto 
        var fileButton = document.getElementById('upload-file1');
      fileButton.addEventListener('change',function (e){
        // Per caricare un file, devo prima creare un riferimento completo al file tramite child 
            var file = e.target.files[0];
            console.log('Nome file:' + file.name);

            const ref = firebase.storage().ref().child(file.name);
            const task = ref.put(file); 
            
            // Prendo l'URL 
            task
            .then(snapshot => snapshot.ref.getDownloadURL())
            .then(url =>{
               console.log(url);
               document.querySelector("#upload-file1").src = url;
              document.getElementById("upload-file1").disabled = true; 
              nuovaUrl = url;
              Cookies.set('urlTerreno1',nuovaUrl);
              
               // Caricamento riuscito
              
      })
        .catch(console.error)
      });
       
       // Caricamento foto #2
       var nuovaUrl2;
       
       // Inserimento foto e disabilitazione del pulsante 
       
       var fileButton2 = document.getElementById('upload-file2');
       fileButton2.addEventListener('change',function(e){
         var file = e.target.files[0];
         
         // Controllo se il nome del file viene correttamente preso
         console.log('Nome file: ' + file.name);
         
         const ref = firebase.storage().ref().child(file.name);
         const task = ref.put(file); // Inserimento del file nel firebase 
         
         // Prendo la URL 
         task
         .then(snapshot => snapshot.ref.getDownloadURL())
         .then(url => {
           console.log(url); // Verifico la URL inserita
           document.querySelector('#upload-file2').src = url;
           document.getElementById("upload-file2").disabled = true;
           nuovaUrl2 = url;
           
           // Imposto il cookies 
           Cookies.set('urlTerreno2',nuovaUrl2);
           
         })
         .catch(console.error)
       });
       
       
       // Caricamento foto #3
       var nuovaUrl3;
       var fileButton3 = document.getElementById('upload-file3');
       fileButton3.addEventListener('change',function(e){
          var file = e.target.files[0];
         
         // Controllo se il nome del file viene correttamente preso
         console.log('Nome file: ' + file.name);
         
         const ref = firebase.storage().ref().child(file.name);
         const task = ref.put(file); // Inserimento del file nel firebase 
         
         // Prendo la URL 
         task
         .then(snapshot => snapshot.ref.getDownloadURL())
         .then(url => {
           console.log(url); // Verifico la URL inserita
           document.querySelector('#upload-file3').src = url;
           document.getElementById("upload-file3").disabled = true;
           nuovaUrl3 = url;
           
           // Imposto il cookies 
           Cookies.set('urlTerreno3',nuovaUrl3);
           
         })
         .catch(console.error)
       })
       
       // Caricamento foto #4
          var nuovaUrl4;
       var fileButton4 = document.getElementById('upload-file4');
       fileButton3.addEventListener('change',function(e){
          var file = e.target.files[0];
         
         // Controllo se il nome del file viene correttamente preso
         console.log('Nome file: ' + file.name);
         
         const ref = firebase.storage().ref().child(file.name);
         const task = ref.put(file); // Inserimento del file nel firebase 
         
         // Prendo la URL 
         task
         .then(snapshot => snapshot.ref.getDownloadURL())
         .then(url => {
           console.log(url); // Verifico la URL inserita
           document.querySelector('#upload-file4').src = url;
           document.getElementById("upload-file4").disabled = true;
           nuovaUrl4 = url;
           
           // Imposto il cookies 
           Cookies.set('urlTerreno4',nuovaUrl4);
           
         })
         .catch(console.error)
       })
       
       
       // Caricamento foto #5
          var nuovaUrl5;
       var fileButton5 = document.getElementById('upload-file5');
       fileButton5.addEventListener('change',function(e){
          var file = e.target.files[0];
         
         // Controllo se il nome del file viene correttamente preso
         console.log('Nome file: ' + file.name);
         
         const ref = firebase.storage().ref().child(file.name);
         const task = ref.put(file); // Inserimento del file nel firebase 
         
         // Prendo la URL 
         task
         .then(snapshot => snapshot.ref.getDownloadURL())
         .then(url => {
           console.log(url); // Verifico la URL inserita
           document.querySelector('#upload-file5').src = url;
           document.getElementById("upload-file5").disabled = true;
           nuovaUrl5 = url;
           
           // Imposto il cookies 
           Cookies.set('urlTerreno5',nuovaUrl5);
           
         })
         .catch(console.error)
       })
       
       
       // Caricamento foto #6
       var nuovaUrl6;
       var fileButton6 = document.getElementById('upload-file6');
       fileButton6.addEventListener('change',function(e){
          var file = e.target.files[0];
         
         // Controllo se il nome del file viene correttamente preso
         console.log('Nome file: ' + file.name);
         
         const ref = firebase.storage().ref().child(file.name);
         const task = ref.put(file); // Inserimento del file nel firebase 
         
         // Prendo la URL 
         task
         .then(snapshot => snapshot.ref.getDownloadURL())
         .then(url => {
           console.log(url); // Verifico la URL inserita
           document.querySelector('#upload-file6').src = url;
           document.getElementById("upload-file6").disabled = true;
           nuovaUrl6 = url;
           
           // Imposto il cookies 
           Cookies.set('urlTerreno6',nuovaUrl6);
           
         })
         .catch(console.error)
       })
       
      // Caricamento terminato  
        
        </script>
    <label for = "bio" style="color: grey; font-size:13px; margin-left:2%; margin-right:2%">*Animali e piante sono corellati col prezzo del terreno, nel caso non si voglia inserire nessun elemento lascia in bianco o scrivi 0</label>
      </div>
            <?php
          }
          
      
      ?>
			
   </div>
 </div>
    </div>
      <div class="intext">
            <button class="reset" onclick="ripristinaForm()">Reset</button>
              <?php
                  if($modifica == 1 && $fmt != 1)
                  {
                    // Stiamo in una modifica 
                    ?>
                       <button class="buttonIn" name = "modBoll" onclick="tornaBollettino()">Modifica</button>
                    <?php
                  }
                  else if($modifica != 1 && $fmt != 1)
                  {
                    // Non siamo in una modifica 
                    ?>
                       <button class="buttonIn" name = "normal" onclick="setTimeout(saveToCookie_animals,3000)">Avanti</button>
                    <?php
                  }
        
                  // Modifica dati terreno da "I miei terreni"
                  
                  if($modifica != 1 && $fmt == 1 && $idTerreno != null)
                  {
                    ?>
                        <button class="buttonIn"  onclick="modificaDatiTerreno(<?php echo $idTerreno; ?>)">Modifica</button>
                    <?php
                  }
               ?>
           
            
          </div>
    
          <script> 
            
            function tornaBollettino()
            {
              saveToCookie();
              open('bollettino.php','_self')
            }
            
            function ripristinaForm()
            {
              
              // Rimozione Cookie 
              Cookies.remove('nomeTerreno');
              Cookies.remove('dimensioneTerreno');
              Cookies.remove('posizioneTerreno');
              Cookies.remove('utilizzoTerreno');
              Cookies.remove('prezzoTerreno');
              Cookies.remove('bioTerreno');
              
              // Ricarico la pagina 
              window.open('caricaTerreno.php','_self');
            }
            
            <?php 
                if($_SESSION['primaVoltaT'] == 0 && ($fmt == null || $fmt == 0))
                {
                  $_SESSION['primaVoltaT'] = 1;
                  ?>
                    ripristinaForm();
                    // Devo anche rimuovere i cookie delle foto
                    Cookies.remove('urlTerreno1');
                    Cookies.remove('urlTerreno2');
                    Cookies.remove('urlTerreno3');
                    Cookies.remove('urlTerreno4');
                    Cookies.remove('urlTerreno5');
                    Cookies.remove('urlTerreno6');

                  <?php
                }
  
            ?>
            
            function saveToCookie()
            {
              // Il submit passa anche da qui prima di andare nella pagina del submit
              
              Cookies.set('nomeTerreno',document.getElementById('nomeT').value); 
              Cookies.set('dimensioneTerreno',document.getElementById('dimensioneT').value);
              Cookies.set('posizioneTerreno',document.getElementById('posizioneT').value);
              Cookies.set('utilizzoTerreno',document.getElementById('utilizzoPrincipaleT').value);
              Cookies.set('prezzoTerreno', document.getElementById('prezzoT').value);
              Cookies.set('bioTerreno',document.getElementById('bioT').value);           
            }
            
            function saveToCookie_animals()
            {
              saveToCookie();
              
              setTimeout(function(){window.open("caricaBestia.php","_self")},3000); // Funziona     
            }
            
            function msgPrezzo()
            {
              if(contAlert_prezzo == 0)
                {
                  contAlert = 1; 
                  window.alert('Scrivere il prezzo senza virgole nè punti');
                }
            }
            
            function msgDim()
            {
              if(contAlert_dim == 0)
                {
                  contAlert_dim = 1; 
                  window.alert('Scrivere la dimensione senza virgole nè punti');
                }
            }
            
            function modificaDatiTerreno(i)
            {
              // Modifica dati del terreno -> retrieval dei nuovi dati e modifica tramite script esterno 
              var nuovoNome = document.getElementById('nomeTMod').value;
              var nuovaDimensione = document.getElementById('dimensioneTMod').value;
              var nuovaPosizione = document.getElementById('posizioneTMod').value;
              var nuovoUtilizzo = document.getElementById('utilizzoPrincipaleTMod').value;
              var nuovoPrezzo = document.getElementById('prezzoTMod').value;
              var nuovaBio = document.getElementById('bioTMod').value;
              
              // Aggiungo i dati da inviare -> Controllerò lato server se sono vuoti o meno 
              
              var datiDaInviare = '?'; 
              
              datiDaInviare = datiDaInviare + 'nome=' + nuovoNome + '&dimensione=' + nuovaDimensione + '&posizione=' + nuovaPosizione + 
                '&utilizzo=' + nuovoUtilizzo + '&prezzo=' + nuovoPrezzo + '&bio=' + nuovaBio + '&idTerreno=' + i; 
              
              // Redirect allo script PHP per il processing 
              open('terrainScripts/modTerrain.php' + datiDaInviare, '_self');
              
              
            }
            
             
            
          </script>
    
    
<!-- Footer -->     
<div>
    <footer class="footer">
        <div class="footer-inner">
          <p>© 2023 All Rights Reserved. Design By SAPD-9</p>
        </div>
    </footer>
</div>
  </body>
</html>
  