<?php 
session_start(); // Avvio sessione 

if($_SESSION['nome'] != null || $_SESSION['cognome'] != null)
{
  // Utente ancora loggato 
  header('Location: home_princ.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ="
      crossorigin="anonymous"
    />
  <link rel="icon" href="icon/EveryFarm_favico.ico" type="image/gif" />
  <title>EveryFarm - Home</title>
  </head>
  
  <!--css-->
  <style>
    
    /* stile della pagina web*/
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
  
    }
    
.main-nav {
  background-color:  #052500; /*green*/
  display: flex;
  font-weight: bold;
  justify-content: space-between;
  height: auto;
  width: 100%;
}
    


/*schermata con scritta "EveryFarm, smart agriculture Benvenuto in EveryFarm, Il modo più semplice per gestire il tuo terreno"*/
.showcase {
  width: 100%;
  height: 400px;
  background: url("images/banner.jpg") no-repeat center center/cover;  
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  justify-content: flex-end;
  padding-bottom: 80px;
  margin-bottom: 20px;
}
    
/*sottoclasse che specifica che nello showcase i testi con h2 hanno questa specifica*/
.showcase h2 {
  font-size: 30px;
}

.showcase p,
.showcase h2 {
  margin-bottom: 10px;
}
/*sottoclasse che specifica posizione */
.showcase .btn {
  margin-top: 15px;
}
 
    
 /* bottoni*/    
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
    }
    
.button2:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }
    
    .button3 { 
    
      border: none;
      color: #7EBA27;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 15px;
      margin: auto;
      margin-left: 10px;
      margin-right: 15px;
      cursor: pointer;
    }
    
.button3:hover {
      color: #ffffff;
      }
    
    .buttonReg { 
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
    
.buttonReg:hover {
      background-color: #FFFFFF;
      color: #7EBA27;
      }
.buttonScdP { 
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
    
.buttonScdP:hover {
      background-color: #FFFFFF;
      color: #D88315;
      }
    
/*box con descrizione e numero di box presenti e la loro dimensione*/
.box {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 20px;
  margin-bottom: 30px;
  margin-left: 20px;
  margin-right:20px;
  margin-top: 20px;
}
/*box con immagine e la loro dimensione*/
.box img {
  width: 100%;
  margin-bottom: 10px;
  /* height: 150px; */
}
    
/*box scritta*/
.box h3 {
  margin-bottom: 5px;
}
/*box scritta*/
.box a {
  display: inline-block;
  padding-top: 10px;
  color: #0067b8;
  font-weight: bold;
}
/*box scritta*/
.box a:hover i {
  margin-left: 9px;
}
/*seconda immagine con chi siamo, ecc.*/
.center {
  background: url("images/farming_8.jpg") no-repeat center center/cover;
  height: 400px;
  width: 100%;
  font-weight: bold;
}
/*seconda immagine con chi siamo, ecc.*/

/* footer*/    
.footer {
  background-color: #052500;
   width: 100%;
  margin: auto;
}
/* interno footer*/ 
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
      margin-right: 10px;
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
    

    
    #div1_header{
      display: flex;
    }
    
    .logo{
     margin: 5px 10px; 
    }
    
    .boxice {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-gap: 20px;
  margin-bottom: 30px;
  margin-left: 20px;
  margin-right:20px;
  margin-top: 20px;
}
/*box con immagine e la loro dimensione*/
.boxice img {
  width: 100%;
  margin-bottom: 10px;
  /* height: 150px; */
}
    
/*box scritta*/
.boxice h3 {
  margin-bottom: 5px;
}
/*box scritta*/
.boxice a {
  display: inline-block;
  padding-top: 10px;
  color: #0067b8;
  font-weight: bold;
}
  </style>
  
  
  
  <!--html-->
  <body>
  <div class="container">
      <!-- Nav -->
  <nav class="main-nav">
        <a class="logo" href="home_nologin.php"><img src="images/e_farm_banner.png" margin=0px width=174px height=76px alt="EveryFarm, smart agriculture"></a>
         <div id="div1_header">
           <h4 class="button3" onclick="document.getElementById('id02').style.display='block'" style="width:auto;"> Password dimenticata? </h4>
           <button class="button2" onclick="location.href = 'registrazione.php' "><span> Registrati </span></button>
           <button class="button1" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Accedi</button>
         </div> 
    <!-- Login box  --> 
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="userScripts/login2.php" method="POST">
    <div class="imgcontainer-boxice">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/16 bit.png" alt="Avatar" class="avatar">
    </div>

    <div class="container-boxice">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Inserisci Email" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Inserisci Password" name="psw" required>
        <br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Ricorda password
      </label>
        <br>
        <br>
      <p align="right">
      <button class="button1"type="submit">Accedi</button>
      </p>
  
    </div>
  </form>
</div>
    
    <div id="id02" class="modal">
  
  <form class="modal-content animate" action="utilityScripts/recoverPw.php" method="POST">
    <div class="imgcontainer-boxice">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/foggissima.jpg" alt="Avatar" class="avatar">
    </div>

     <!-- Box recupero password --> 
    <div class="container-boxice">
      <label for="email"><b>Password dimenticata?</b></label>
      <input type="text" placeholder="Inserisci Email" name="emRic" required>
        <br>
        <br>
      <p align="center">
        <button class="button1" type="submit">Recupera password</button>
      </p>
  
    </div>
  </form>
</div>
    
    </nav>
     <header class="showcase">
       <br><br><br>
       <h2 style="font-size: 90px; color: #7EBA27">Smart Agriculture!</h2>
       <h1>Benvenuto in EveryFarm, il modo più semplice per gestire il tuo terreno</h1>
       <br>
     
       <button class="button1" onclick="location.href = 'registrazione.php'"><i class="fas fa-plus"></i> Registrati gratuitamente</button>
      </header>
    
     <section class="box">
        <div>
          <img src="images/Impresa_agricola_generica.jpg" alt="" />
          <h3 style="color: black; font-size: 25px">Scopri nuove opportunità</h3>
          <p>
           Registrati sul nostro sito: potrai accedere ad un mondo di servizi. Offriamo una vasta gamma di prodotti, supporto e assistenza
          </p>
        </div>
        <div>
          <img src="images/foggia_5.jpg" alt="" />
          <h3 style="color: black; font-size: 25px">Vendi e Acquista terreni</h3>
          <p>
           Il nostro sito offre la possibilià di caricare e acquistare terreni di ogni tipo e grandezza, rispettando ogni esigenza
          </p>
        </div>
        <div>
          <img src="images/pastore.jpg" alt="" />
          <h3 style="color: black; font-size: 25px">Gestisci piante e animali</h3>
          <p>
            Offriamo la possibilità di inserire piante ed animali d'allevamento, insieme al terreno, fornendo una trattativa a 360 gradi
          </p>
        </div>
        <div>
          <img src="images/foggia_2.jpg" alt="" />
          <h3 style="color: black; font-size: 25px">Il mondo verde a portata di click </h3>
          <p>
          Chi sceglie EveryFarm trova un partner affidabile per fare acquisti o vendere in completa sicurezza e tranquillità
          </p>
        </div>
        <div>
      </section>
       
  
         <section class="center">
        <div class="content" style="margin-left: 2%">
          <br>
          <br>
          <h2 style="font-size: 50px;">Entra nella community di EveryFarm!</h2>
          <p>
           Registrati,Vendi,Acquista - tutto da un' unica piattaforma!
          </p>
          <br>
           <button class="button2" onclick="location.href = 'chisiamo.php' "> Chi siamo?</button>
           </div>
       </section>

      <!-- Footer -->
      <footer class="footer">
        <div class="footer-inner">
          <p> Contact us: everyfarmpoliba@gmail.com </p>
          <p>© 2021 All Rights Reserved. Design By Gruppo 31</p> 
        </div>
      </footer>
    </div>
    
  
   <!--Javascript-->
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
  
  
  </body>
</html>