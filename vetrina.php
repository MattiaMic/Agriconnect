<?php 
 // Backend code by @ferr34 - non toccare 
  // Frontend Code by @giorgio
  session_start(); 

  // Creazione connessione per visualizzazzione terreni
  $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
  $idTerr = $_GET['idTerr'];
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
  <link rel="icon" href="icon/EveryFarm_favico.ico" type="image/gif" />
  <title>EveryFarm - Vetrina</title>   <!---questo diventa il nome del prodotto -->
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
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
  width:100%;
	max-width: 1900px;
  height:100%;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.0);
}

.left{
	background:transparent;
	background-size: cover;
	height: 100%;
  width:100%;
	max-width: 1900px;
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
  background-color: none;
  border-radius: 20;
  display: flex;
  font-weight: bold;
  justify-content: center;
  align-items: left;
  height: 100px;
  font-size: 16px;
  padding: 20px 10px;
  margin-left: 20px;
  margin-right:20px;
  margin-top: 20px;
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
   
/*login popup*/    
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
  padding-top: 65px;
}

/* Modal Content Box*/
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
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

 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
  max-width: 400px;
  margin: auto;
  text-align: center;
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

    .imgprofilo {
      margin: auto;
      width: 75px;
      height: 75px;
      border-radius: 100%;
      margin-left: 15px;
      margin-right: 15px;
    }
   
     #imglogo {
      margin: 5px 10px;
    }

  </style>
  
  <body>
 <div class="container">
      <!-- Nav -->
      <nav class="main-nav">
        <a id="imglogo" href="home_princ.php?numPagina=1&numPaginaVecchio=1"><img src="images/e_farm_banner.png" width=174px height=76px alt="EveryFarm, smart agriculture"></a>
          
        <div class='profile-box'>
          <div class='profile-box' onclick = "window.open('profilo.php','_self')">
          <p class='name' style = "color:#7EBA27;"><?php  echo $_SESSION['nome']." ".$_SESSION['cognome'] ?></p>
          <img class='imgprofilo' src="<?php echo $_SESSION['fotoP'] ?>">
          </div>
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
</script>
        
   </nav>
   <!--<br>
   <button class="buttonBack"  onclick="location.href = 'home_princ.php' " style="margin-left: 2%"><i class="fas fa-chevron-left"></i> Torna alla ricerca</button>
   <br>-->
 <div class= "container-box">
   <div class="contact-box">
			<div class="left">
     <div class="container-box2">
       <?php 
          // Estrazione foto 
          $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
            
          if(!$conn)
          {
            echo "Errore nella connessione al DBMS:".mysql_errno();
          }
          else 
          {
            // Selezione db 
            $conn -> select_db("my_everyfarmpoliba");
            
            $query = "SELECT DISTINCT foto,idTerreno FROM fotoTerreno WHERE idTerreno = ".$idTerr."";
            $res3 = $conn -> query($query) or die("Errore estrazione foto:{$conn -> error}");
            $cont = 1;
            while($row2 = $res3 -> fetch_array(MYSQLI_ASSOC))
            {
              ?>
                    <div class="mySlides">
                      <div class="numbertext"><?php echo $cont; ?> / <?php echo mysqli_num_rows($res3); ?></div>
                      <img src="<?php echo $row2['foto'] ?>" style="width:100%">
                    </div>
              <?php
                $cont = $cont + 1;
            }
            
          }
            
         
          mysqli_close($conn);
       ?>
       <br>
       <br>
       
  <!--<a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a> -->
       
  <!-- Devo implementare lo slideshow  --> 

  <div class="row"> 
      <?php
        // Estrazione foto per anteprime
      
      $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
            
          if(!$conn)
          {
            echo "Errore nella connessione al DBMS:".mysql_errno();
          }
          else 
          {
            // Selezione db 
            $conn -> select_db("my_everyfarmpoliba");
            $primaFoto = 0;
            $conta = 1;
            
            $query ="SELECT DISTINCT foto,idTerreno FROM fotoTerreno WHERE idTerreno = ".$idTerr." ";
            $resEstraiSlideShow = $conn -> query($query) or die("Errore estrazione foto:{$conn -> error}");

            
            // Fetch dei risultati
            while($row7 = $resEstraiSlideShow -> fetch_array(MYSQLI_ASSOC))
            {
           
                // Ora posso estrarre le foto correttamente per lo slideshow
                ?>
            <div class="column">
                  <img class="demo cursor" src="<?php echo $row7['foto'] ?>" style="width:100%" onclick="currentSlide(<?php echo $conta; ?>)" alt="The Woods">
              </div>
                <?php
                $conta++;
              }
            
            
          }
      
      mysqli_close($conn);
      ?> 
   
  </div>
       
       
</div>

<script>
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
     </div>
     <?php
       // Creazione connessione per visualizzazzione terreni
                  $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

                  if(!$conn)
                  {
                    // Connessione non riuscita 
                    echo "Errore di connessione:";
                    echo mysqli_errno();
                  }
                  else 
                  {
                    $conn -> select_db("my_everyfarmpoliba");
                    
                    $query = "SELECT DISTINCT terreno.idTerreno,nomeTerreno,dimensione,via,prezzo,descrizione,numFotoInserite,utente.regioneResidenza, nome, cognome FROM terreno,fotoTerreno,animale,pianta,utenteTerreno,utente 
                                              WHERE (terreno.idTerreno = utenteTerreno.idTerreno OR fotoTerreno.idTerreno = terreno.idTerreno 
                                                  OR pianta.idTerreno = terreno.idTerreno OR animale.idTerreno = terreno.idTerreno) AND terreno.idTerreno = ".$idTerr." ";
                    $res2 = $conn -> query($query) or die("Last error: {$conn -> error} \n");
                  
                    
                      ?>
                          <div class="right">
                      <?php
                      $cnt = 0;
                      while(($row = $res2 -> fetch_array(MYSQLI_ASSOC)) && ($cnt < 1))
                      {
                        ?>
                          
                          <h1><?php echo $row['nomeTerreno']?></h1>
                            <h3>
                              <?php 
                                 $estraiUsVenditore = "SELECT DISTINCT utenteTerreno.username AS username FROM utenteTerreno WHERE utenteTerreno.idTerreno = ".$idTerr." ";
                                 $resEstraiUsVenditore = $conn -> query($estraiUsVenditore) or die("Errore nel retrieval dell'username: {$conn -> error}");
                    
                                while($row3 = $resEstraiUsVenditore -> fetch_array(MYSQLI_ASSOC))
                                {
                                  $username = $row3['username'];
                                }

                                  // Estrazione email 
                                  $estraiMailVenditore = "SELECT nome,cognome FROM utente WHERE username = '".$username."' ";
                                  $resEstraiMailVenditore = $conn -> query($estraiMailVenditore) or die("Errore retrieval email:{$conn -> error}");
                        
                                  while($row4 = $resEstraiMailVenditore -> fetch_array(MYSQLI_ASSOC))
                                  {
                                     $nome = $row4['nome'];
                                     $cognome = $row4['cognome'];
                                  }
                        
                            echo $nome.' '.$cognome;
                              ?>
                            </h3>
                          <p><?php echo $row['dimensione']?> ettari</p>
                          <p><?php echo $row['utilizzo']?></p>
                          <p><i class="fas fa-map-marker-alt"></i> <?php echo $row['via']?></p>
                          <div class="right">
                            <p class="price"><?php echo $row['prezzo']?><i class="fas fa-euro-sign"></i></p>
                          </div>
                            <p><?php echo $row['descrizione']?></p> 
                            
                            <?php
                          $cnt = $cnt +1;
                      }
                      ?>
                            </div>
                      <?php
                    }
                  
            // Chiusura connessione 
              mysqli_close($conn);
     ?>
			
        <br>
        <br>
        
        <div class="intext">
          <?php
                // Creazione connessione per visualizzazzione terreni
                  $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

                  if(!$conn)
                  {
                    // Connessione non riuscita 
                    echo "Errore di connessione:";
                    echo mysqli_errno();
                  }
          else 
          {
            // Connessione riuscita 
            $conn -> select_db("my_everyfarmpoliba");
            // Se il terreno e' il proprio non deve apparire la casella 
              $controllaVenditore = "SELECT * FROM terreno, utenteTerreno, utente 
              WHERE terreno.idTerreno = utenteTerreno.idTerreno AND utenteTerreno.username = utente.username 
                AND terreno.idTerreno = ".$idTerr." AND utente.username = '".$_SESSION['username']."' ";
              
            $resControllaVenditore = $conn -> query($controllaVenditore) or die("Errore estrazione info venditore:{$conn -> error}");
          
            // Controllo i risultati 
            if(mysqli_num_rows($resControllaVenditore) == 0)
            {
              // Non e' la vetrina de "I miei terreni"
              ?>
                  <button class="button1"  onclick="document.getElementById('id01').style.display='block'"><i class="far fa-envelope"></i> Contatta il Venditore</button>
              <?php
            }
          else
          {
            // Terreno dell'utente -> il pulsante non deve comparire   
          }
            
          }
          
          
          mysqli_close($conn);
              
          
              
          ?>
          
        </div> 
        <div id="id01" class="modal">
        
  <form class="modal-content animate" method="POST" action = "utilityScripts/inviaVenditore.php">
        <div class="imgcontainer-box">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br>
    </div>
 <div class="texing"><h2 style="font-size: 50px">Invia l'email al creatore dell'annuncio</h2></div>
    <br>
    <label for = "bio" style="color: grey; margin-left:2%; margin-right:2%">EveryFarm permette di contattare un utente tramite mail, inserire messaggio qui:</label>
    <div class="container-box">
      <br>
      <div>
      <form>
        <?php 
            $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

                  if(!$conn)
                  {
                    // Connessione non riuscita 
                    echo "Errore di connessione:";
                    echo mysqli_errno();
                  }
                  else 
                  {
                    // Connessione andata a buon fine 
                    $conn -> select_db("my_everyfarmpoliba");
                    
                    $estraiUsVenditore = "SELECT DISTINCT utenteTerreno.username AS username FROM utenteTerreno WHERE utenteTerreno.idTerreno = ".$idTerr." ";
                    $resEstraiUsVenditore = $conn -> query($estraiUsVenditore) or die("Errore nel retrieval dell'username: {$conn -> error}");
                    
                    while($row3 = $resEstraiUsVenditore -> fetch_array(MYSQLI_ASSOC))
                    {
                      $username = $row3['username'];
                    }

                    // Estrazione email 
                    $estraiMailVenditore = "SELECT email FROM utente WHERE username = '".$username."' ";
                    $resEstraiMailVenditore = $conn -> query($estraiMailVenditore) or die("Errore retrieval email:{$conn -> error}");
                    
                    while($row4 = $resEstraiMailVenditore -> fetch_array(MYSQLI_ASSOC))
                    {
                      $_SESSION['emailAnnuncio'] = $row4['email'];
                      $_SESSION['idTerreno'] = $idTerr;
                      ?>  
                          <label for = "bio" style="color: black;">A: <b style="color: #7EBA27 "><?php echo $row4['email'] ?></b></label>
                      <?php
                    }
                  }
        
        mysqli_close($conn);
        
        ?>
        
        
        <b>
        <input type="text" class="field" name = "oggetto" placeholder="Oggetto">
        <label for = "bio" style="color: grey; margin: left">Inserisci messaggio qui</label>
        <textarea id = "bioT" rows = "4" cols = "70" class = "field" name = "messaggio" style="max-width:100%; font-size:20px"></textarea>
      </form>
      <br>
      <br>
             
      <button class="button1" type="submit" style="margin-left=10%">Invia</button>
      </div>
    </div>
  </form>
</div>
        
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
			</div>
		</div>
	</div>
   <br>
<hr class="new4">
   <h2 style="margin-left: 20px;font-size: 30px">
     Animali correlati al terreno
     </h2>
   <br>
   <div class="box" style="margin-left: 20px;">
     <?php
             $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 

                  if(!$conn)
                  {
                    // Connessione non riuscita 
                    echo "Errore di connessione:";
                    echo mysqli_errno();
                  }
                  else 
                  {
                    // Connessione andata a buon fine 
                    $conn -> select_db("my_everyfarmpoliba");
                    
                    $estraiDatiAnimali = "SELECT nomeComune,specie,eta,peso,idTerreno,fotoAnimale,bioAnimale FROM animale WHERE animale.idTerreno = ".$idTerr." ";
                    $resEstraiDatiAnimali = $conn -> query($estraiDatiAnimali) or die("Errore estrazione dati animali: {$conn -> error}");
                    
                    // Estrazione dei risultati 
                    while($row5 = $resEstraiDatiAnimali -> fetch_array(MYSQLI_BOTH))
                    {
                      ?>
                            <div class="card">
                              <img src="<?php echo $row5['fotoAnimale']; ?>" alt="Denim Jeans" style="width:100%">
                                <h1><?php echo $row5['nomeComune']; ?></h1>
                                <p><?php echo $row5['specie']; ?></p>
                                <div>
                                  <p><?php echo $row5['eta']; ?> anni </p>
                                  <p><?php echo $row5['peso']; ?> kg <i class="fas fa-weight-hanging"></i></p>            
                                  <p style = "  margin-bottom: 20px; margin-left: 0px; margin-right: 0px;margin-top: 20px;"> <?php echo $row5['bioAnimale']; ?> </p> 
                                </div>
                            </div>
                      <?php
                    }
                  }
                  mysqli_close($conn)
     ?>
      
       
     
   </div>
   <br>
   <br>
   <hr class="new4">
   <h2 style="margin-left: 20px;font-size: 30px">
     Piante correlate al terreno
   </h2>
   <br>
   <div class="box" style="margin-left: 20px;">
     
     <?php
     $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
     
     if(!$conn)
       {
         // Connessione non riuscita 
         echo "Errore di connessione:";
         echo mysqli_errno();
       
       }
      else 
       {
         // Connessione andata a buon fine 
         $conn -> select_db("my_everyfarmpoliba");
         $estraiDatiPiante = "SELECT nomeComune, dimensionePianta, fotoPianta, idTerreno, bioPianta FROM pianta WHERE pianta.idTerreno = ".$idTerr."";
         $resEstraiDatiPiante = $conn -> query($estraiDatiPiante) or die("Errore estrazione dati piante:{$conn -> error}");
        
         while($row6 = $resEstraiDatiPiante -> fetch_array(MYSQLI_ASSOC))
         {
           ?>
                 <div class="card">
                  <img src="<?php echo $row6['fotoPianta']; ?>" alt="Denim Jeans" style="width:100%">
                  <h1><?php echo $row6['nomeComune']; ?></h1>
                    <div>
                      <p><?php echo $row6['dimensionePianta']; ?></p>
                      <p style = "  margin-bottom: 20px; margin-left: 0px; margin-right: 0px;margin-top: 20px;"><?php echo $row6['bioPianta']; ?></p> 
                    </div>
                    <br>
                  </div>
           <?php
         }
      }
                    
     ?>
  
   </div>
   <br>
   <br>
    <footer class="footer">
        <div class="footer-inner">
          <p> Contact us: everyfarmpoliba@gmail.com </p>
          <p>© 2021 All Rights Reserved. Design By Gruppo 31</p> 
        </div>
    </footer>
</div>
  </body>


</html>