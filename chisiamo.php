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
  <title>EveryFarm - Chi siamo?</title>
  </head>
  
   <!--css-->
  <style>
    
    /* Stile della pagina web*/
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
  background: url("images/everyfarm_ban.png") no-repeat center center/cover;  
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
      margin-left: 10px;
      margin-right: 5px;
      cursor: pointer;
    }
    
.button2:hover {
      background-color: #FFFFFF;
      color: #D88315;
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
  grid-template-columns: repeat(5, 1fr);
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
  background: url("images/everyfarm_ban.png") no-repeat center ;
  height: 500px;
  width: 100%;
}
/*seconda immagine con chi siamo, ecc.*/
.center .content {
  width: 30%;
  padding: 10px 0 0 10px;
}
/*seconda immagine con chi siamo, ecc. scritta */
.center p {
  margin: 10px 0 10px;
}
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
    .footer_1 {
  background-color: none;
   width: 100%;
  margin: auto;
}
/* interno footer*/ 
.footer-inner_1 {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 40px;
  color: black;
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
    
    
.container-box{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.left-2{
padding: 25px 40px;
}

.right-2{
	
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
    
     .button4 { 
    
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

    
  </style>
  
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
  
  <form class="modal-content animate" action="userScripts/login2.php" method="POST">
    <div class="imgcontainer-boxice">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/foggissima.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container-boxice">
      <label for="email"><b>Password dimenticata?</b></label>
      <input type="text" placeholder="Inserisci Email" name="uname" required>
        <br>
        <br>
      <p align="center">
        <button class="button1"type="submit">Recupera password</button>
      </p>
  
    </div>
  </form>
</div>
    
    </nav>
  <br>
         
<div class= "container-box">
   <div class="contact-box">
			<div class="left">
      <img class='imgprofilo2' src="images/pink_floyd.jpg" style="width: 400px; height:400px;  border-radius: 50%"></a>
          <br>
          </div>
     </div>
			<div class="right">
				<br>
        <h1 style="font-size: 40px; color: #7EBA27; border-radius: 50%; text-align: center">
          Chi siamo?
        </h1>
        <br>
          <p style="text-align:center;font-size: 20px;">
            Siamo un gruppo di programmatori emergente, abbiamo già collaborato precedentemente per realizzare l'applicazione per smartphone UniRoom.
            Il nostro obiettivo è offrire il servizio online di compravendita più semplice, veloce e sicuro nel settore primario. 
            Per questo,noi del gruppo "numero 31", vogliamo unire due settori paradossalmente discordi che, nel terzo millennio,
            Lavorano permettendo agli utenti di fare affari. Vogliamo garantire una piattaforma intuitiva ed efficace e
            ad un’offerta ampia e di qualità, contenuti controllati per una maggiore sicurezza.
          </p> 
        <br>
        <br>
   </div>
</div>
    
<div class= "container-box">
   <div class="contact-box">
     <br><br>
			<div class="right-2">
        		<br>
        <h1 style="font-size: 40px; color: #7EBA27; text-align: center ">
          Di chi ci occupiamo?
        </h1>
        <br>
          <p style="text-align:center; font-size: 20px;">
           Il nostro sito di compravendita punta ad un vasto pubblico di tutte le età, in modo da offrire
            un'utenza estesa per poter, da un lato, far affacciare le nuove generazioni ad un settore antico quanto indispensabile,
            mentre le generazioni più "avanzate" possono garantire di un servizio nuovo, fresco ed intuitivo. 
            Inoltre la compravendita di animali e piante allarga ancora di più il bacino d'utenza.  
          </p> 
   
          <br>
          </div>
     </div>
			<div class="left-2">
		   <img class='imgprofilo2'src="images/foggia_1.jpg"  style="width: 400px; height:400px; border-radius: 50%"></a>
        <br>
        <br>
   </div>
</div>
  
  
  <div class= "container-box">
   <div class="contact-box">
     <br><br>
			<div class="left">
      <img class='imgprofilo2' src="images/brando.jpg" style="width: 400px; height:400px; border-radius: 50%"></a>
          <br>
          </div>
     </div>
			<div class="right">
				<br>
        <h1 style="font-size: 40px; color: #7EBA27; text-align: center ">
          Un libero mercato più 'smart'
        </h1>
        <br>
          <p style="text-align:center; font-size: 20px;">
           Per quanto riguarda il fulcro della pagina, ovvero il pagamento, esso si svolgerà all'infuori del sito: 
           EveryFarm fungerà solo ed unicamente da 'tramite' per la contrattazione tra due utenti tramite un'apposita casella di mail, strumento più usato da ogni fascia di età.
           Questo sistema ha tanti punti di forza come, ad esempio, un 'contatto' diretto tra due utenti sostenendo un modo più semplice 
           per ricercare al meglio terreni in tutta Italia, in modo tale da 'accorciare le distanze'.
          </p> 
        <br>
        <br>
   </div>
</div>
<br>
 <h1 style="font-size: 30px; color: #7EBA27; text-align: center">
        Gli sviluppatori del progetto
        </h1>
<br>
<div class="box">

             <div class="card">
             
            <img src="icon/carnicellifrancesco.jpg" alt="Denim Jeans" style="border-radius: 50%">
              <h1>CARNICELLI FRANCESCO</h1>
             <h3>(575610)</h3>
      <h3>
        Responsabile #2 Sviluppo Frontend
               </h3>
             <u class="psw" style = "color:#7EBA27;">
              f.carnicelli@studenti.poliba.it
               </u>
            
               <br>
        </div>
     <div class="card">
      
            <img src="icon/ferrantecataldo.jpg" alt="Denim Jeans" style="width:100%;border-radius: 50%">
        <h1>FERRANTE CATALDO</h1>
             <h3>(574480)</h3>
          <h3>Responsabile del progetto & Backend Dev. #1</h3>
             <u class="psw" style = "color:#7EBA27;">
              c.ferrante2@studenti.poliba.it
            </u>
         
        <br>
        </div>
     <div class="card">
         
            <img src="icon/giorgiogianferrino.jpg" alt="Denim Jeans" style="width:100%;border-radius: 50%">
       <h1>GIANFERRINO GIORGIO</h1>
             <h3>(575977)</h3>
       <h3>
         Responsabile #1 Sviluppo Frontend
       </h3>
             <u class="psw" style = "color:#7EBA27;">
              g.gianferrino@studenti.poliba.it
            </u>
       
        <br>
        </div>
      
     <div class="card">

            <img src="icon/davidenusco_2.jpg" alt="Denim Jeans" style="width:100%; border-radius: 50%">
              <h1>NUSCO DAVIDE GIUSEPPE</h1>
             <h3>(575665)</h3>
<h3>
 Responsabile #3 Sviluppo Frontend 
       </h3>
            <u class="psw" style = "color:#7EBA27;">
             d.nusco@studenti.poliba.it
            </u>
          
       <br>
        </div>
     <div class="card">
    
            <img src="icon/stefanopaparella.jpg" alt="Denim Jeans" style="width:100%; border-radius: 50%">
               <h1>PAPARELLA STEFANO</h1>
             <h3>(574878)</h3>
      <h3>
        DB Architect &
       Backend Dev. #2
       </h3>
       <br>
            <u style = "color:#7EBA27;">
          s.paparella2@studenti.poliba.it
            </u>
          
       <br>
        </div>
     </div>
    <br>
    <br>
<h1 style="font-size: 30px; color: #7EBA27; text-align: center"> Fotografie </h1>
 <footer class="footer_1">
        <div class="footer-inner_1">
               <i class="fab fa-instagram" style="font-size: 50px; color: #7EBA27;"></i> <a class="button4" href="https://instagram.com/marco_a_ph?utm_medium=copy_link" style="width:auto; font-size:30px"> @marco_a_ph </a> 
           <img src="images/marco_2.jpg" alt="Denim Jeans" style="width:20%; border-radius: 50%">
             
        </div>
      </footer>
<br>
<br>
   <!-- Footer -->
      <footer class="footer">
        <div class="footer-inner">
                <p> Contact us: everyfarmpoliba@gmail.com </p>
          <p>© 2021 All Rights Reserved. Design By Gruppo 31</p> 
        </div>
      </footer>
</div> 
   <!--javascript-->
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