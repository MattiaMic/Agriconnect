<?php 
session_start(); // Avvio sessione 

// Dati in GET dalla riapertura del bollettino
$primaFoto = $_GET['primaFoto'];
$secondaFoto = $_GET['secondaFoto'];
$terzaFoto = $_GET['terzaFoto'];
$quartaFoto = $_GET['quartaFoto'];
$quintaFoto = $_GET['quintaFoto'];
$sestaFoto = $_GET['sestaFoto'];

$numFoto = $_GET['numFoto'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="icon" href="icon/2-removebg-preview.png" type="image/gif" />
  <title>Agroconnect - Recap</title>
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
    display: none;
    /*hide original SELECT element:*/
  }

  .select-selected {
    background-color: #7EBA27;
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

  .select-items div,
  .select-selected {
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

  .select-items div:hover,
  .same-as-selected {
    background-color: rgba(0, 0, 0, 0.1);
  }

  /*the container must be positioned relative:*/

  .custom-select {
    position: relative;
    font-family: Arial;
  }

  .custom-select select {
    display: none;
    /*hide original SELECT element:*/
  }

  .select-selected {
    background-color: #7EBA27;
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

  .select-items div,
  .select-selected {
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

  .select-items div:hover,
  .same-as-selected {
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
  }

  .openbtn:hover {
    background-color: #fff;
    color: #7EBA27;
  }

  #main {
    transition: margin-left .5s;
    padding: 16px;
  }

  /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */

  @media screen and (max-height: 450px) {
    .sidebar {
      padding-top: 15px;
    }
    .sidebar a {
      font-size: 18px;
    }
  }

  .button1 {
    background-color: #7EBA27;
    /*green */
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
    background-color: #7EBA27;
    /*green */
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
    background-color: #D88315;
    /* brown */
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
    position: absolute;
    left: 30px;
    right: 30px;
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

  .intext {
    background-color: none;
    border-color: #D88315;
    border-radius: 20;
    display: flex;
    font-weight: bold;
    justify-content: space-between;
    align-items: left;
    height: 100px;
    font-size: 16px;
    padding: 20px 10px;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
  }

  .profile-box {
    display: flex;
  }

  .imgprofilo {
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

  .container-box {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 100px;
  }

  .container-box:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background: url("images/background_3.jpg") no-repeat center;
    background-size: cover;
    filter: blur(50px);
    z-index: -1;
  }

  .contact-box {
    max-width: 850px;
    display: grid;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-color: #fff;
    box-shadow: 0px 0px 19px 5px rgba(0, 0, 0, 0.19);
  }

  .left {
    background: url("images/vistamare.jpg") no-repeat center;
    background-size: cover;
    height: 90%;
  }

  .right {
    padding: 25px 40px;
  }

  h1 {
    position: relative;
    padding: 0 0 10px;
    margin-bottom: 10px;
    text-align: center;
  }

  h1:after {
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

  h3 {
    position: relative;
    padding: 0 0 10px;
    margin-bottom: 10px;
    text-align: center;
  }

  h3:after {
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

  .field {
    width: 100%;
    border: 0px solid rgba(0, 0, 0, 0);
    outline: none;
    background-color: rgba(230, 230, 230, 0.6);
    padding: 0.5rem 1rem;
    font-size: 1.1rem;
    margin-bottom: 22px;
    transition: .3s;
  }

  .field:hover {
    background-color: rgba(0, 0, 0, 0.1);
  }

  textarea {
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

  .btn {
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

  .btn:hover {
    background-color: #FFFFFF;
    color: #7EBA27;
  }

  .field:focus {
    border: 2px solid rgba(30, 85, 250, 0.47);
    background-color: #fff;
  }

  @media screen and (max-width: 880px) {
    .contact-box {
      grid-template-columns: 1fr;
    }
    .left {
      height: 200px;
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
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.4);
    /* Black w/ opacity */
    padding-top: 60px;
  }

  /* Modal Content Box*/

  .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 25%;
    /* Could be more or less, depending on screen size */
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
    from {
      -webkit-transform: scale(0)
    }
    to {
      -webkit-transform: scale(1)
    }
  }

  @keyframes animatezoom {
    from {
      transform: scale(0)
    }
    to {
      transform: scale(1)
    }
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

  .texing {
    position: center;
  }

  .intext {
    background-color: none;
    display: flex;
    font-weight: bold;
    justify-content: space-between;
    align-items: left;
    height: 100px;
    font-size: 16px;
    padding: 20px 10px;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
  }

  .intext_1 {
    background-color: none;
    display: flex;
    font-weight: bold;
    justify-content: right;
    align-items: left;
    height: 100px;
    font-size: 16px;
    padding: 20px 10px;
    margin-left: 20px;
    margin-right: 20px;
    margin-top: 20px;
  }

  /* The Modal Close Button (x) */

  .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
  }

  .close:hover,
  .close:focus {
    color: #f44336;
    cursor: pointer;
  }

  /* Clear floats */

  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and delete button on extra small screens */

  @media screen and (max-width: 300px) {
    .cancelbtn,
    .deletebtn {
      width: 100%;
    }
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 370px;
    margin: auto;
    text-align: center;
  }

  .price {
    color: #7EBA27;
    font-size: 30px;
  }

  .card_2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 500px;
    margin: auto;
    text-align: center;
  }

  hr.new4 {
    border: 1px solid #7EBA27;
  }

  /* Slideshow container */

  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */

  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
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

  /* Caption text */

  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */

  .numbertext {
    color: #f2f2f2;
    font-size: 19px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */

  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active,
  .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */

  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {
      opacity: .4
    }
    to {
      opacity: 1
    }
  }

  @keyframes fade {
    from {
      opacity: .4
    }
    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */

  @media only screen and (max-width: 300px) {
    .prev,
    .next,
    .text {
      font-size: 11px
    }
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

      <!-- Navbar -->
      <nav class="main-nav">
        <a id="imglogo" href="home_princ.php?numPagina=1&numPaginaVecchio=1"><img  style="margin-left: 5%;" src="images/e_farm_banner.png" width=174px height=76px alt="EveryFarm, smart agriculture"></a>

        <div class='profile-box'>
          <p class='name' style="color:#7EBA27;">
            <?php  echo $_SESSION['nome']." ".$_SESSION['cognome'] ?>
          </p>
          <img class='imgprofilo' src="<?php echo $_SESSION['fotoP'] ?>">
          <button class="openbtn" onclick="openNav()">☰</button>
        </div>


        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

          <li>
            <!--<a href="#">
      <i class="fas fa-user" style = "padding-right: 20px">
    </a>--> 
            <!-- Funzioni barra laterale  --> 
          </li>
          <a href="profilo.php"><i class="fa fa-fw fa-user"></i> Profilo </a>
          <a href="caricaTerreno.php"><i class="fas fa-plus"></i> Carica terreno</a>
          <a href="imieiterreni.php"><i class="fa fa-fw fa-tractor"></i> I miei Terreni </a>
          <a href="imieianimali.php?nomeTerreno=inserisci"><i class="fa fa-fw fa-horse"></i> I miei Animali</a>
          <a href="lemiepiante.php?idTerreno=inserisci"><i class="fa fa-fw fa-leaf"></i> Le mie Piante</a>
          <a href="sonointeressato.php"><i class="fas fa-heart"></i> Sono interessato </a>
          <a href="utilityScripts/logout.php"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
        </div>



        <script>
          function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
          }

          function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
          }
          
          
        </script>

      </nav>
    </div>
    <br>
    <h1>Recap</h1>
    <br>
    <div class="card_2">
      <div class="slideshow-container">
        <!-- Qui se non ci sono foto non devono essere mostrate -->
        
        <script>
         // Apro una pagina PHP a parte per vedere quali foto sono state inserite 
          
          <?php
            if($_SESSION['primaVoltaBollettino'] == 0)
            {
              ?>
          var datiDaInviare = "?";
          var primoCheck = 0; 
          var secondoCheck = 0;
          var terzoCheck = 0;
          var quartoCheck = 0;
          var quintoCheck = 0;
          var sestoCheck = 0;
          
          // Controllo inserimento delle foto -> serve per una corretta compilazione del bollettino 
          // Prima foto
          
          if(Cookies.get('urlTerreno1') != null)
            {
              // Foto presente -> flag a 1
              primoCheck = 1;
              datiDaInviare = datiDaInviare + 'primaFoto=1';
            }
          
          // Seconda foto
          
          if(Cookies.get('urlTerreno2') != "undefined")
            {
              // Foto presente -> flag a 1
              secondoCheck = 1; 
              
              // Controllo presenza foto precedenti 
              
              if(primoCheck == 1)
                {
                  // Concatenazione con & 
                  datiDaInviare = datiDaInviare + '&secondaFoto=1';
                }
              else 
                {
                  // Il primo pulsante delle foto non e' stato utilizzato 
                  datiDaInviare = datiDaInviare + 'secondaFoto=1'
                }
            }
          
          // Terza foto
          
          if(Cookies.get('urlTerreno3') != null)
            {
              // Foto presente -> flag a 1
              terzoCheck = 1; 
              
              // Controllo presenza foto precedenti
              
              if(secondoCheck == 1)
                {
                  // Concatenazione con & 
                  datiDaInviare = datiDaInviare + '&terzaFoto=1';
                }
              else if(primoCheck == 0 && secondoCheck == 0)
                {
                  // Il secondo e il primo pulsante delle foto non e' stato utilizzato 
                  datiDaInviare = datiDaInviare + 'terzaFoto=1';
                }
            }
          
          // Quarta foto
          
          if(Cookies.get('urlTerreno4') != null)
            {
              // Foto presente -> flag a 1
              quartoCheck = 1; 
              
              // Controllo presenza foto precedenti
              
              if(terzoCheck == 1)
                {
                  // Concatenazione con & 
                  datiDaInviare = datiDaInviare + '&quartaFoto=1';
                }
              else if(primoCheck == 0 && secondoCheck == 0 && terzoCheck == 0)
                {
                  // I primi 3 pulsanti non sono stati utlizzati 
                  datiDaInviare = datiDaInviare + 'quartaFoto=1';
                }
            }
          
          // Quinta foto 
          
          if(Cookies.get('urlTerreno5') != null)
            {
              // Foto presente -> flag a 1
              quintoCheck = 1; 
              if(quartoCheck == 1)
                {
                  // Concatenazione con & 
                  datiDaInviare = datiDaInviare + '&quintaFoto=1';
                }
              else if(primoCheck == 0 && secondoCheck == 0 && terzoCheck == 0 && quartoCheck == 0)
                {
                  // I primi 3 pulsanti non sono stati utlizzati 
                  datiDaInviare = datiDaInviare + 'quintaFoto=1';
                }
            }
          
          // Ultima foto
          
          if(Cookies.get('urlTerreno6') != null)
            {
              // Foto presente -> flag a 1
              sestoCheck = 1; 
              
              // Controllo presenza foto precedenti
              
              if(quintoCheck == 1)
                {
                  // Concatenazione con & 
                  datiDaInviare = datiDaInviare + '&sestaFoto=1';
                }
              else if(primoCheck == 0 && secondoCheck == 0 && terzoCheck == 0 && quartoCheck == 0 && quintoCheck == 0)
                {
                  // I primi 3 pulsanti non sono stati utlizzati 
                  datiDaInviare = datiDaInviare + 'sestaFoto=1';
                }
            }
          
          // Apro la pagina per il controllo 
          console.log(datiDaInviare);
          
         open('utilityScripts/presenzaFoto.php' + datiDaInviare, '_self');
          
              <?php
            }
          ?>
        </script>
        
        <?php
           
           if($primaFoto == 1)
           {
             // Foto presente -> mostro foto con riferimento allo slideshow 
            ?>
               <div class="mySlides fade">
                  <div class="numbertext">1 / 6</div>
                  <img id="terreno1" style="width:100%">
                    <script>
                      console.log(Cookies.get('urlTerreno1'));
                     document.getElementById('terreno1').src = Cookies.get('urlTerreno1');
                    </script>
                </div>
            <?php
           }
        else 
        {
          // Inserisco un immagine di prova 
           ?>
               <div class="mySlides fade">
                  <div class="numbertext">1 / 6</div>
                  <img id="terreno1" style="width:100%">
                    <script>
                     document.getElementById('terreno1').src = "https://firebasestorage.googleapis.com/v0/b/everyfarm-b43bf.appspot.com/o/png-clipart-question-mark-question-mark-miscellaneous-angle.png?alt=media&token=e0429430-b53d-4f4e-bbaa-d942b2a3beed";
                    </script>
                </div>
            <?php
        }
          
        
        if($secondaFoto == 1)
          {
           // Foto presente -> mostro foto con riferimento allo slideshow 
            ?>
               <div class="mySlides fade">
                  <div class="numbertext">2 / 6</div>
                  <img id="terreno2" style="width:100%">
                    <script>
                     document.getElementById('terreno2').src = Cookies.get('urlTerreno2');
                    </script>
                </div>
            <?php
          }
        else 
        {
          // Inserisco un immagine di prova 
           ?>
               <div class="mySlides fade">
                  <div class="numbertext">2 / 6</div>
                  <img id="terreno2" style="width:100%">
                    <script>
                     document.getElementById('terreno2').src = "https://firebasestorage.googleapis.com/v0/b/everyfarm-b43bf.appspot.com/o/png-clipart-question-mark-question-mark-miscellaneous-angle.png?alt=media&token=e0429430-b53d-4f4e-bbaa-d942b2a3beed";
                    </script>
                </div>
            <?php
        }
        
        if($terzaFoto == 1)
          {
          // Foto presente -> mostro foto con riferimento allo slideshow 
            ?>
               <div class="mySlides fade">
                  <div class="numbertext">3 / 6</div>
                  <img id="terreno3" style="width:100%">
                    <script>
                     document.getElementById('terreno3').src = Cookies.get('urlTerreno3');
                    </script>
                </div>
            <?php
        }
        else 
        {
          // Inserisco un immagine di prova 
           ?>
               <div class="mySlides fade">
                  <div class="numbertext">3 / 6</div>
                  <img id="terreno3" style="width:100%">
                    <script>
                     document.getElementById('terreno3').src = "https://firebasestorage.googleapis.com/v0/b/everyfarm-b43bf.appspot.com/o/png-clipart-question-mark-question-mark-miscellaneous-angle.png?alt=media&token=e0429430-b53d-4f4e-bbaa-d942b2a3beed";
                    </script>
                </div>
            <?php
        }
        
        if($quartaFoto == 1)
          {
          // Foto presente -> mostro foto con riferimento allo slideshow 
            ?>
               <div class="mySlides fade">
                  <div class="numbertext">4 / 6</div>
                  <img id="terreno4" style="width:100%">
                    <script>
                     document.getElementById('terreno4').src = Cookies.get('urlTerreno4');
                    </script>
                </div>
            <?php
        }
        else 
        {
          // Inserisco un immagine di prova 
           ?>
               <div class="mySlides fade">
                  <div class="numbertext">4 / 6</div>
                  <img id="terreno4" style="width:100%">
                    <script>
                     document.getElementById('terreno4').src = "https://firebasestorage.googleapis.com/v0/b/everyfarm-b43bf.appspot.com/o/png-clipart-question-mark-question-mark-miscellaneous-angle.png?alt=media&token=e0429430-b53d-4f4e-bbaa-d942b2a3beed";
                    </script>
                </div>
            <?php
        }
        
        if($quintaFoto == 1)
          {
          // Foto presente -> mostro foto con riferimento allo slideshow 
            ?>
               <div class="mySlides fade">
                  <div class="numbertext">5 / 6</div>
                  <img id="terreno5" style="width:100%">
                    <script>
                     document.getElementById('terreno5').src = Cookies.get('urlTerreno5');
                    </script>
                </div>
            <?php
        }
        else 
        {
          // Inserisco un immagine di prova 
           ?>
               <div class="mySlides fade">
                  <div class="numbertext">5 / 6</div>
                  <img id="terreno5" style="width:100%">
                    <script>
                     document.getElementById('terreno5').src = "https://firebasestorage.googleapis.com/v0/b/everyfarm-b43bf.appspot.com/o/png-clipart-question-mark-question-mark-miscellaneous-angle.png?alt=media&token=e0429430-b53d-4f4e-bbaa-d942b2a3beed";
                    </script>
                </div>
            <?php
        }
        
        if($sestaFoto == 1)
          {
          // Foto presente -> mostro foto con riferimento allo slideshow 
            ?>
               <div class="mySlides fade">
                  <div class="numbertext">6 / 6</div>
                  <img id="terreno6" style="width:100%">
                    <script>
                     document.getElementById('terreno6').src = Cookies.get('urlTerreno6');
                    </script>
                </div>
            <?php
        }
        else 
        {
          // Inserisco un immagine di prova 
           ?>
               <div class="mySlides fade">
                  <div class="numbertext">6 / 6</div>
                  <img id="terreno6" style="width:100%">
                    <script>
                     document.getElementById('terreno6').src = "https://firebasestorage.googleapis.com/v0/b/everyfarm-b43bf.appspot.com/o/png-clipart-question-mark-question-mark-miscellaneous-angle.png?alt=media&token=e0429430-b53d-4f4e-bbaa-d942b2a3beed";
                    </script>
                </div>
            <?php
        }
        ?>
           
          
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
      </div>
      </div>

      <!-- Compilazione scheda info terreno --> 
      <h1 id="title">prova</h1>
      <script>
        document.getElementById("title").innerHTML = Cookies.get('nomeTerreno')
      </script>
      <p id="dimTerreno">Dimensioni</p>
      <script>
        document.getElementById("dimTerreno").innerHTML = Cookies.get('dimensioneTerreno') + ' ettari'
      </script>
      <p> <i class="fas fa-map-marker-alt" id="posTerreno"></i>  </p>
      <script>
       <?php echo " "; ?> document.getElementById("posTerreno").innerHTML = Cookies.get('posizioneTerreno')
      </script>
      <p id="utilPrinc"></p>
      <script>
        document.getElementById("utilPrinc").innerHTML = Cookies.get("utilizzoTerreno")
      </script>
      <p class="price"><i class="fas fa-euro-sign" id="prezzoT"></i></p>
      <script>
        document.getElementById('prezzoT').innerHTML = ' ' + Cookies.get('prezzoTerreno')
      </script>
      

      <div class="box">
        <p><i class="fas fa-plus"></i> <?php echo $numFoto; ?> fotografie <i class="fas fa-camera"></i></p>
        <p><i class="fas fa-plus"></i>
          <?php echo " ".$_SESSION['numAnimali'] ?> animali <i class="fa fa-fw fa-horse"></i></p>
        <p><i class="fas fa-plus"></i>
          <?php echo " ".$_SESSION['numPiante'] ?> piante <i class="fa fa-fw fa-leaf"></i></p>
      </div>
      <p style="  margin-bottom: 20px; margin-left: 0px; margin-right: 0px;margin-top: 20px;" id="descTerr"> </p>
      <script>
        document.getElementById('descTerr').innerHTML = Cookies.get('bioTerreno')
      </script>
      <button class="button2" onclick="window.open('caricaTerreno.php?modifica=1','_self')"> Modifica <i class="fas fa-pencil-alt"></i></button>
      <br> <br>
    </div>
     </div>
    <br>
    <br>
    <hr class="new4">
    <br>
    <div class="box">
      <br>
      <h3 style="font-size: 25px;">Animali inseriti</h3>
      <br>

      <?php 
              for($i = 0; $i < $_SESSION['numAnimali']; $i++)
              {
                ?>
      <div class="card">
        <img id="fotoAnimale<?php echo $i ?>" style="width:100%">
        <h1 id="nomeAnimale<?php echo $i ?>"></h1>
        <p id="specAnimale<?php echo $i ?>"></p>
        <script>
          document.getElementById('fotoAnimale<?php echo $i ?>').src = Cookies.get('Animale<?php echo $i?>');
          document.getElementById('nomeAnimale<?php echo $i ?>').innerHTML = Cookies.get('nomeB<?php echo $i?>');
          document.getElementById('specAnimale<?php echo $i ?>').innerHTML = Cookies.get('specieB<?php echo $i ?>');
        </script>
        <div>
          <p id="etaAnim<?php echo $i ?>"></p>
          <p><i class="fas fa-weight-hanging" id="pesoAnim<?php echo $i ?>"></i></p>
          <script>
            console.log(Cookies.get('etaB<?php echo $i ?>'));
            document.getElementById('etaAnim<?php echo $i ?>').innerHTML = Cookies.get('etaB<?php echo $i ?>') + " anni";
            document.getElementById('pesoAnim<?php echo $i ?>').innerHTML = " " + Cookies.get('pesoB<?php echo $i ?>')
          </script>

          <p style="  margin-bottom: 20px; margin-left: 0px; margin-right: 0px;margin-top: 20px;" id="bioAnim<?php echo $i ?>"> </p>
          <script>
            document.getElementById('bioAnim<?php echo $i ?>').innerHTML = Cookies.get('bioB<?php echo $i ?>')
          </script>
          <div class="intext">
            <button class="button2" onclick = "window.open('caricaBestia.php?modifica=1&idAnim=<?php echo $i ?>','_self')"><i class="fas fa-pencil-alt"></i></button>
          </div>
        </div>
      </div>
      
      <?php
              }
  
         ?>
      
    </div>

    <!-- Info piante - compilazione scheda piante  --> 
    <br>
    <hr class="new4">
    <br>
    <h3 style="font-size: 25px;">Piante inserite</h3>
    <br>
    <div class="box">

      <?php 
            for($i = 0; $i < $_SESSION['numPiante']; $i++)
            {
              // Imposytazione informazioni -> retrieval dai cookie 
              ?>
                
               <div class="card">
                  <img id = "fotoPianta<?php echo $i ?>" style="width:100%">
                  <h1 id = "nomePianta<?php echo $i ?>">Nome Pianta</h1>
              <div>
              <p id = "dimensionePianta<?php echo $i ?>">altezza</p>
              <p style = "  margin-bottom: 20px; margin-left: 0px; margin-right: 0px;margin-top: 20px;" id = "bioPianta<?php echo $i ?>"> </p> 
                
                <script> 
                      if(Cookies.get('Pianta<?php echo $i; ?>') != "undefined")
                        {
                          // In caso di foto non inserita non mostrare nulla 
                           document.getElementById('fotoPianta<?php echo $i?>').src = Cookies.get('Pianta<?php echo $i ?>'); 
                        }
                      
                      document.getElementById('nomePianta<?php echo $i ?>').innerHTML = Cookies.get('nomeP<?php echo $i ?>');
                      document.getElementById('dimensionePianta<?php echo $i ?>').innerHTML = Cookies.get('dimensioneP<?php echo $i ?>'); 
                      document.getElementById('bioPianta<?php echo $i ?>').innerHTML = Cookies.get('bioP<?php echo $i ?>');
                </script> 
                
               <div class="intext">
                <button class="button2" onclick = "window.open('caricaPianta.php?modifica=1&idPianta=<?php echo $i ?>','_self')"><i class="fas fa-pencil-alt"></i></button>
              </div>
              
            </div>
            </div>

            <?php
            }
        ?>
      
      <script> 
 
 // Funzione di passaggio a script esterno per controllo info + dati 
 function inserisciTerreno()
  {
    // Raccolgo i cookie in un unica stringa e poi li invio allo script php
    
    // Aggiunta dati terreno a stringa per invio a script PHP esterno 
    var datiDaInviare; 
    
    datiDaInviare = 'nomeTerreno=' + Cookies.get('nomeTerreno') + '&dimensioneTerreno=' + Cookies.get('dimensioneTerreno') + 
      '&posizioneTerreno=' + Cookies.get('posizioneTerreno') + '&utilizzoTerreno=' + Cookies.get('utilizzoTerreno') + 
      '&prezzoTerreno=' + Cookies.get('prezzoTerreno') + '&descTerr=' + Cookies.get('bioTerreno'); 
    
    // Aggiungo le foto ai dati da inviare
      <?php
      for($i = 0; $i < 6; $i++)
          {
              ?>
                  datiDaInviare = datiDaInviare + '&urlTerreno<?php echo $i+1 ?>=' + Cookies.get('urlTerreno<?php echo $i+1 ?>');
              <?php
          } 
      
      ?>
    
    // Il collegamento funziona correttamente 
    
    // Carico dati di animali e piante
    <?php 
        for($i = 0; $i < $_SESSION['numAnimali']; $i++)
        {
          ?>
            datiDaInviare = datiDaInviare + 
              '&Animale<?php echo $i ?>=' + Cookies.get('Animale<?php echo $i ?>') 
            + '&nomeB<?php echo $i?>=' + Cookies.get('nomeB<?php echo $i ?>') + 
              '&specieB<?php echo $i ?>=' + Cookies.get('specieB<?php echo $i ?>') 
            + '&etaB<?php echo $i ?>=' + Cookies.get('etaB<?php echo $i ?>') 
            + '&pesoB<?php echo $i ?>=' + Cookies.get('pesoB<?php echo $i ?>')
            + '&bioB<?php echo $i ?>=' + Cookies.get('bioB<?php echo $i ?>');
          <?php
        }
    ?>
    
    // Dati degli animali correttamente aggiunti 
    
    // Carico i dati delle piante
    <?php 
    for($i = 0; $i < $_SESSION['numPiante']; $i++)
    {
      ?>
          datiDaInviare = datiDaInviare + 
            '&Pianta<?php echo $i ?>=' + Cookies.get('Pianta<?php echo $i ?>') +
            '&nomeP<?php echo $i ?>=' + Cookies.get('nomeP<?php echo $i ?>') + 
            '&dimensioneP<?php echo $i ?>=' + Cookies.get('dimensioneP<?php echo $i ?>') +
            '&bioP<?php echo $i ?>=' + Cookies.get('bioP<?php echo $i ?>');
            
      <?php
    }
    
    // Dati delle piante correttamente inviati 
    ?>
  
         // Apertura script 
  window.open('terrainScripts/inserisciTerreno.php?' + datiDaInviare, '_self');
}
      
      </script>
      
<!-- Bottoni --> 
    </div>
    <br>
    <div class="intext">
      <button class="reset" onclick="location.href = 'caricaPianta.php'"> Torna indietro</button>
      
      
      <button class="buttonIn" onclick="inserisciTerreno()"><i class="fas fa-upload"></i> Carica</button>
      <!-- Qua elimino tutti i cookie -->
      
      <script>  

   // JS per lo slideshow 

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
  }
 

</script>
      
    </div>

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