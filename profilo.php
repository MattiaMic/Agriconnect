<!DOCTYPE html>

<?php 
 // Backend code by @ferr34 - non toccare 
  // Frontend Code by @giorgio @Francesco @Davide
  session_start(); 

  // Creazione connessione 
  $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

  if(!$conn)
  {
    // Connessione al DBMS non andata a buon fine 
    echo "Errore nella connessione al DBMS rilevato: {$conn -> error}";
  }
else 
{
  // Connessione andata a buon fine, selezione DB 
  $conn -> select_db("my_everyfarmpoliba"); 
  
  
  ?>
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
  <title> agriconnect- Profilo</title> <!--nome utente-->
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
    
.profile-box {
 display: flex;
}

.intro .avatar {
  background-image: url('https://drive.google.com/uc?export=download&id=0B17myQ5SRYeIa1NYMFFKNGJRdGs');
  background-position: top;
  float: right;
  margin: 17px 15px 0 25px;
  width: 75px;
  height: 75px;
  border-radius: 100%;
  position : absolute;
  left : 90%;
  right : 90%;
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
	background: url("images/zozzo.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
  margin-left: 35%;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h1{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h1:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 90px;
    border-radius: 2px;
    background-color: #7EBA27;
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
    
  img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container-box2 {
  position: relative;
   box-sizing: border-box;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

}    
/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: -2000%;
  padding: 16px;
  margin-top: 50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
    
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
 
}

/* Six columns side by side */
.column {
  float: left;
  width: 20%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}  
    
    /* Thick red border */
hr.new4 {
  border: 1px solid #7EBA27;
}

.price {
  color: #7EBA27;
  font-size: 50px;
}
    
.intext{
  display: flex;
  font-weight: bold;
  height: 100px;
  margin-left: 20px;
  margin-right:20px;
 }
    
    
       
    .button2 { 
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
      margin-right: 5px;
      cursor: pointer;
     ;
      }
    
    .button2:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }
    
    
    .buttonBack { 
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
     ;
      }
    
    .buttonBack:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }
    
    h4{
      color: #D88315;
      text-align: center;
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

    .intro .avatar {
  background-image: url('https://drive.google.com/uc?export=download&id=0B17myQ5SRYeIa1NYMFFKNGJRdGs');
  background-position: top;
  float: right;
  margin: 17px 15px 0 25px;
  width: 75px;
  height: 75px;
  border-radius: 100%;
  position : absolute;
  left : 90%;
  right : 90%;
}

.name {
   font-size: 23px;
  padding: auto;
  margin-top: auto;
  margin-bottom: auto;
  margin-left: 10px;
  margin-right: 15px;
}
     .page{
  background-color: none;
  border-radius:0px;
  display: flex;
  font-weight: bold;
  justify-content: center;
  align-items: center;
  height: 100px;
  font-size: 16px;
  padding: 20px 10px;
  margin-left: 20px;
  margin-right:20px;
  margin-top: 20px;
    }
    
    .pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color:#7EBA27;
  color: white;
}
    
    #imglogo {
   width: 174px;
    height: 76px;
    margin: 5px 10px;
  }
    
    .imgprofilo{
  margin: auto;
  width: 75px;
  height: 75px;
  border-radius: 100%;
  margin-left: 15px;
  margin-right: 15px;
}

     .imgprofilo2{
  width: 200px;
  height: 200px;
  border-radius: 100%;
  border: 10px solid;
  border-color: #7EBA27;
  transition: transform .2s;
  margin-left:auto;
  margin-right: auto;
}
    
.imgprofilo2:hover {
  transform: scale(1.2);
}
    .zoom {
      display: table-cell;
		vertical-align: middle;
      width: auto;
      height: auto;
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
      background-color: #7EBA27;
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
      margin-right: 5px;
      cursor: pointer;
      }
    
    .button1:hover {
      background-color: #FFFFFF;
      color: #7EBA27;
      }

/* Center the image and position the close button */
.imgcontainer-boxice {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 60%;
  border-radius: 50%;
}

.container-boxice {
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
  width: auto;
  max-width: 35%;/* Could be more or less, depending on screen size */
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
    

.pagination a:hover:not(.active) {background-color: #ddd;}
 
 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
  max-width: 400px;
  margin: auto;
  text-align: center;
}
    .imgprofilo {
      margin: auto;
      width: 75px;
      height: 75px;
      border-radius: 100%;
      margin-left: 15px;
      margin-right: 15px;
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
   
     #imglogo {
      margin: 5px 10px;
    }
          .texting{
            align-content: center;
          }
        </style>
  <body>
    <div class="container">
      <!-- Nav -->
      <nav class="main-nav">
        <a id="imglogo" href="home_princ.php?numPagina=1&numPaginaVecchio=1"><img src="images/e_farm_banner.png"  width=174px height=76px alt="EveryFarm, smart agriculture"></a>
          
          <button class="openbtn" onclick="openNav()">☰</button> 
        
        
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
 
        <!-- Parametri firebase --> 
       <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
       <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-storage.js"></script>
       <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-analytics.js"></script>

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
      </nav>
      <br>
      <?php
          echo '<a  href="canc.php?username='.$_SESSION['username'].'"><button class="button2" style="margin-left:80%">  Cancella account <i class="fas fa-times-circle"></i></button></a>';
          ?>
      <br>
   <div class="container-box">
		<div class="contact-box">
			<div class="left" style="margin-top: 50%;">
        <br>
        <br>
        <br>
      
        <div class="zoom">
            <a style="margin-left: auto; margin-right:auto"><img class='imgprofilo2' src="<?php echo $_SESSION['fotoP'] ?>" style="width: 250px; height:250px"></a>
          
           <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file" name = "inserisciFoto" onclick='window.alert("Scegliere con cura. Il pulsante verrá poi disabilitato")'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica una nuova foto</span>
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
			<div class="right">
			<h1 style="color: black; text-align:center; margin-top: 0px;" ><b>Il tuo profilo</b></h1>
				<?php 
            // Estrazione informazioni utente 
            $estraiUtente = "SELECT * FROM `utente` WHERE email = '".$_SESSION['email']."'";
            
            $res = $conn -> query($estraiUtente) or die("Errore estrazione dati utente rilevato:{$conn -> error}");
            
            // Fetch dei risultati 
            while($row = $res -> fetch_array(MYSQLI_ASSOC))
            {
              $nome = $row['nome'];
              $cognome = $row['cognome'];
              $email = $row['email'];
              $dataNascita = $row['dataNascita'];
              $username = $row['username'];
              $numTelefono = $row['numeroTelefono'];
              $regione = $row['regioneResidenza'];
              $bio = $row['bio'];
            }
        ?>
        <br>
        <h3 style="font-size: 17px"> <i class="fas fa-circle" style="color:#7EBA27; font-size: 12px"></i>  Nome & Cognome:  </h3>
        <p style="font-size: 17px; color:#7EBA27; font-style: italic"> <?php echo $nome." ".$cognome ?> </p>
        <br>
        <h3 style="font-size: 17px"> <i class="fas fa-circle" style="color:#7EBA27; font-size: 12px"></i>  E-mail:  </h3>
        <p style="font-size: 17px; color:#7EBA27; font-style: italic"> <?php echo $email ?></p>  
        <br>
        <h3 style="font-size: 17px"> <i class="fas fa-circle" style="color:#7EBA27; font-size: 12px"></i>  Username:  </h3>
        <p style="font-size: 17px; color:#7EBA27; font-style: italic"> <?php echo $username ?></p>  
        <br>
        <h3 style="font-size: 17px"> <i class="fas fa-circle" style="color:#7EBA27; font-size: 12px"></i>  Numero di telefono:  </h3>
        <p style="font-size: 17px; color:#7EBA27; font-style: italic"> <?php echo $numTelefono ?></p>  
        <br>
        <h3 style="font-size: 17px"> <i class="fas fa-circle" style="color:#7EBA27; font-size: 12px"></i>  Data di nascita:  </h3>
        <p style="font-size: 17px; color:#7EBA27; font-style: italic"> <?php echo $dataNascita ?> </p>  
        <br>
        <h3 style="font-size: 17px"> <i class="fas fa-circle" style="color:#7EBA27; font-size: 12px"></i>  Regione di residenza:  </h3>
        <p style="font-size: 17px; color:#7EBA27 ; font-style: italic"> <?php echo $regione ?> </p>  
        <br><br>
        <h3 style="font-size: 17px"> <i class="fas fa-circle" style="color:#7EBA27; font-size: 12px"></i>  "Vi racconto di me..":  </h3>
        <p style="font-size: 17px; color:#7EBA27; font-style: italic"> <?php echo $bio ?> </p>  
        <br>
     </div>
      
      
   <div id="id01" class="modal">
    
  
  <form class="modal-content animate" action="utilityScripts/modPassword.php" method="POST">
    <div class="imgcontainer-boxice">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/bnr.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container-boxice">
      <label for="psw"><b>Inserisci nuova password</b></label>
      <input type="password" placeholder="Inserisci Password" name="psw" required>
      <label for="psw"><b>Conferma password</b></label>
      <input type="password" placeholder="Inserisci Password" name="psw2" required>
        <br>
        <br>
      <button class="button1"type="submit">Conferma</button>
    </div>
  </form>
      
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
     
</div>
            

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function modificaProfilo()
  {
    var datiDaInviare = '?modifica=1&nome=<?php echo $nome ?>&cognome=<?php echo $cognome ?>&email=<?php echo $email ?>&dataNascita=<?php echo $dataNascita ?>&username=<?php echo $username ?>';
    datiDaInviare = datiDaInviare + '&numTelefono=<?php echo $numTelefono ?>&regione=<?php echo $regione ?>&bio=<?php echo $bio ?>';
    
    window.open('registrazione.php' + datiDaInviare,'_self');
  }
  
  // Caricamento della foto e sostituzione 
  
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
       
       // Variabile superglobale 
       var nuovaUrl; 
     
       // Funzione per inserimento della foto + disabilita il pulsante delle foto 
        var fileButton = document.getElementById('upload-file');
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
               document.querySelector("#upload-file").src = url;
              document.getElementById("upload-file").disabled = true;
              document.getElementById("upload-file").style.background = "#6d7375"; 
              nuovaUrl = url;
              
               // Caricamento riuscito
              
              // Apro una nuova pagina per fare l'update della foto profilo 
             
              setTimeout(function(){window.open('userScripts/modificaFotoProfilo.php?nuovaUrl=' + nuovaUrl + '&username=<?php echo $username; ?>','_self');},3000);
              
             
              
      })
        .catch(console.error)
      });

</script>
             <br>
             </h2>
        </h2>
 
             
   </div>
		</div>
       
     <div class="intext" style="margin-left: 33%">
        <button class="button1" onclick="modificaProfilo()">  Modifica i dati del profilo <i class="fas fa-pencil-alt"></i></button>
        <button class="button1" onclick="document.getElementById('id01').style.display='block'">  Modifica password <i class="fas fa-shield-alt"></i></button>    
      </div>
         
    <footer class="footer">
        <div class="footer-inner">
          <p>© 2023 All Rights Reserved. Design By SAPD-9</p>
        </div>
    </footer>
</div>
     
  </body>
   </html>
   <?php
}
?>     