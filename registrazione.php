
<?php 
   // Prendo i dati in GET 
  $modifica = $_GET['modifica'];
  $nome = $_GET['nome'];
  $cognome = $_GET['cognome']; 
  $email = $_GET['email'];
  $username = $_GET['username'];
  $numTelefono = $_GET['numTelefono'];
  $regione = $_GET['regione'];
  $bio = $_GET['bio'];

  $dataNascita = $_GET['dataNascita'];

  // Devo ri-scomporre la data di nascita 
  $giornoNascita = $dataNascita[0].$dataNascita[1];
  $meseNascita = $dataNascita[3].$dataNascita[4]; 
  $annoNascita = $dataNascita[6].$dataNascita[7].$dataNascita[8].$dataNascita[9]; 


?>

<!DOCTYPE html>
<!-- Grafica vi voglio bene scusate se ho sminchiato xD -->
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
  <title>EveryFarm - <?php if($modifica == 1){ echo "Modifica";} else {echo "Registrati";} ?></title>
  </head>
  <style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, "Helvetica", sans, scerif;
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
  padding: 0 10px;
}

.main-nav ul li a {
  padding-bottom: 5px;
}

.main-nav ul li a:hover {
  border-bottom: 2px solid #262626;
}

.main-nav ul.main-menu {
  display: flex;
  margin-right: 30px;
  padding: 0 20px;
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
	background: url("images/vistas.jpg") no-repeat center;
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
	background: url("images/ragazza.jpg") no-repeat center;
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
  border-radius: 10px;
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
    
    
  .footer {
  background-color: #052500;
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

    #imglogo{
    margin-top: 5px;
    margin-bottom: 5px;
    margin-left: 10px;
    margin-right: 10px;
    
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
  </style>
  
  <?php session_start(); ?>
  
  <body>
    
    <!-- Parametri firebase --> 
       <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
       <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-storage.js"></script>
       <script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-analytics.js"></script>
    
    
      <div class="container">
      <!-- Nav -->
      <nav class="main-nav">
        <a id="imglogo" href="home_nologin.php"><img src="images/e_farm_banner.png" width=174px height=76px alt="EveryFarm, smart agriculture"></a>
      </nav>
        
                 	<div class="container-box">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
                <?php 
                    if($modifica == 1)
                    {
                      ?>
                          <h2>Modifica</h2>
                      <?php
                    }
                    else
                    {
                      ?>
                        <h2>Registrati</h2>
                      <?php
                    }
                ?>
        				
				<input type="text" class="field" id = "nome" value = "<?php if($modifica == 1) {echo $nome;} ?>" placeholder="Nome" required>
        <input type="text" class="field" id = "cognome"  value = "<?php if($modifica == 1) {echo $cognome;} ?>" placeholder="Cognome"required>
				<input type="text" class="field" id = "email"  value = "<?php if($modifica == 1) {echo $email;} ?>" placeholder="Email"required>
        
        <?php
            if($modifica != 1)
            {
              ?>
                <input type="password" class="field" id = "password" placeholder="Password"required>
              <?php
            }
        ?>
        
         <input type="text" class="field" id = "user" value = "<?php if($modifica == 1) {echo $username;} ?>" placeholder="Username"required>
				<input type="text" class="field"  id = "numeroTelefono" value = "<?php if($modifica == 1) {echo $numTelefono;} ?>" placeholder="Numero di Telefono"required>
        <!--Data di nascita--> 
                          <br> <br> <h3>Data di Nascita</h3> <br>
                        <label for = "giornoNascita" placeholder="Giorno">Giorno</label>
                        <select id = "giornoNascita"  class = "field">
                 <?php 
                    for($i=1; $i <= 31; $i++)
                    {
                      echo "<option value = ".$i."> ".$i."</option>";
                    }
                 ?>
        </select>
        
        <!-- Mese di nascita --> 
                        <label for = "meseNascita" style = "font-family: Arial, Helvetica, sans, serif;">Mese</label>
                        <select id = "meseNascita" class = "field">
                 <?php 
                    for($i=1; $i <= 12; $i++)
                    {
                      echo "<option value = ".$i."> ".$i."</option>";
                    }
                 ?>
        </select>
        
        <!-- Anno di nascita --> 
                        <label for = "annoNascita" class = "label">Anno</label>
                        <select id = "annoNascita" class = "field">
                 <?php 
                    for($i=1920; $i <= 2002; $i++) // Imponiamo di essere maggiorenni
                    {
                      echo "<option value = ".$i."> ".$i."</option>";
                    }
                 ?>
        </select>
        
        <script> 
          
          <?php 
              if($modifica == 1)
              {
                ?>
                  // Uso il js per impostare la option value 
                  document.getElementById('giornoNascita').value = <?php echo $giornoNascita; ?>;
                  document.getElementById('meseNascita').value = <?php echo $meseNascita; ?>;
                  document.getElementById('annoNascita').value = <?php echo $annoNascita; ?>;
                <?php
              }
          ?>
          
          
        </script> 
        
        <!-- Regione di residenza --> 
        <label for = "regioneResidenza">Regione di residenza</label>
        <select id = "regioneResidenza" class = "field">
        
       <script> 
          // Uso js per immmettere la value ricevuta 
          <?php 
            if($modifica == 1)
            {
              ?>
                document.getElementById('regioneResidenza').value = <?php echo $regione; ?>;
              <?php
            }
         ?>
      </script>
          
              
         <?php
    
            // Inizializzo a inizio file la connessione al database 
            $connessione = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
        
            if (!$connessione)
              {
                // Errore di connessione al DBMS 
                die("Errore di connessione al DBMS rilevato: {$connessione -> error}"); 
              }
            else 
              {
                $connessione -> select_db("my_everyfarmpoliba");
                $res = $connessione -> query("SELECT nomeRegione AS nr FROM regione;");
              
                while($row = $res -> fetch_array(MYSQLI_BOTH))
                {
                  // Fetch delle regioni da inserire nelle select 
                  echo "<option value = '".$row['nr']."'> ".$row['nr']." </option>   "; 
                }
              
                mysqli_close($connessione);
              }
    ?>
        </select>      
        
        <label for = "bio">Raccontaci un po' di te..</label>
        <textarea id = "bio" rows = "4" cols = "50" class = "field"><?php if($modifica == 1) {echo $bio;} ?> </textarea>
        <div class="main-wrapper">
        <div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" id="upload-file" name = "inserisciFoto" onclick='window.alert("Scegliere con cura. Il pulsante verrá poi disabilitato")'>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Carica la tua foto</span>
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

      <br><br>
          <div class="container signin">
            <p>Hai giá un account EveryFarm?<a href="home_nologin.php"> Accedi</a></p>
       
            </div>
        <br>
        
        <?php
          if($modifica != 1)
          {
            ?>
              <button class = "btn" id = "reg" onclick ="alert('Caricamento in corso...');setTimeout(myFunction,3000)"> Registrati</button>
            <?php
          }
          else 
          {
              ?>
                <button class = "btn" id = "mod" onclick = "alert('Caricamento in corso...');setTimeout(modificaDati,3000)"> Modifica</button>
              <?php
          }
        ?>
        
        
        
          
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
              
      })
        .catch(console.error)
      });
       
       function modificaDati()
       {
         // Invio dati allo script che modifica i dati 
         var nome = document.getElementById('nome').value;
         var cognome = document.getElementById('cognome').value;
         var email = document.getElementById('email').value;
         var numTel = document.getElementById('numeroTelefono').value;
         console.log(numTel);
         var username = document.getElementById('user').value;
         
         // Valori delle select -> non da controllare 
         var giorno = document.getElementById('giornoNascita').value;
         var mese = document.getElementById('meseNascita').value;
         var anno = document.getElementById('annoNascita').value;
         
         // Prendo la regione di residenza
         var regione = document.getElementById('regioneResidenza').value;
         console.log(regione);
         // Valori da controllare se vuoti 
         var bio = document.getElementById('bio').value;
         
         // Controllo se sono vuoti 
         if(nome == null || cognome == null || numTel == null || username == null || bio == null)
           {
             window.alert('Ci sono dei campi vuoti. Compilarli per proseguire.');
           }
         else
           {
             // Con la supervariabile tutto ok -> passo i dati in get alla pagina di registrazione 
             if(nuovaUrl == null)
               {
                 // Non devo passre la foto 
                 // Controlo fatto, dati passati correttamente 
             window.open('userScripts/modDatiUtente.php?nome=' + nome + '&cognome=' + cognome + '&email=' + email + 
                          '&numeroTelefono=' + numTel + '&user=' + username + '&giornoNascita=' + giorno + 
                         '&meseNascita=' + mese + '&annoNascita=' + anno + '&bio=' + bio + '&regioneResidenza=' + regione,"_self")
               }
             else 
               {
                 // Devo passare la nuova foto
                 // Controlo fatto, dati passati correttamente 
             window.open('userScripts/modDatiUtente.php?nome=' + nome + '&cognome=' + cognome + '&email=' + email + 
                          '&numeroTelefono=' + numTel + '&user=' + username + '&giornoNascita=' + giorno + 
                         '&meseNascita=' + mese + '&annoNascita=' + anno + '&bio=' + bio + '&foto=' + nuovaUrl + '&regioneResidenza=' + regione,"_self")
               }
             
             ;
           }
       }
       
       
       function myFunction()
       {
        
        // Initialize Firebase
        //firebase.initializeApp(firebaseConfig);
         
         
          // Prendo i dati + controllo che siano stati tutti inseriti
         var nome = document.getElementById('nome').value;
         var cognome = document.getElementById('cognome').value;
         var email = document.getElementById('email').value;
         var password = document.getElementById('password').value;
         var numTel = document.getElementById('numeroTelefono').value;
         console.log(numTel);
         var username = document.getElementById('user').value;
         
         // Valori delle select -> non da controllare 
         var giorno = document.getElementById('giornoNascita').value;
         var mese = document.getElementById('meseNascita').value;
         var anno = document.getElementById('annoNascita').value;
         
         // Prendo la regione di residenza
         var regione = document.getElementById('regioneResidenza').value;
         
         // Valori da controllare se vuoti 
         var bio = document.getElementById('bio').value;
         
         // Controllo se sono vuoti 
         if(nome == null || cognome == null || password == null || numTel == null || username == null || bio == null)
           {
             window.alert('Ci sono dei campi vuoti. Compilarli per proseguire.');
           }
         else
           {
             // Con la supervariabile tutto ok -> passo i dati in get alla pagina di registrazione 
             
             // Controlo fatto, dati passati correttamente 
             window.open('userScripts/reg.php?nome=' + nome + '&cognome=' + cognome + '&email=' + email + 
                         '&password=' + password + '&numeroTelefono=' + numTel + '&user=' + username + '&giornoNascita=' + giorno + 
                         '&meseNascita=' + mese + '&annoNascita=' + anno + '&bio=' + bio + '&foto=' + nuovaUrl + '&regioneResidenza=' + regione,'_self');
           }
          
       }
        
        </script>
    
      </div>
   </div>
 </div>
 
        
     <!-- Footer -->
      <footer class="footer">
        <div class="footer-inner">
          <p>Contact us: everyfarmpoliba@gmail.com </p>
          <p>© 2021 All Rights Reserved. Design By Gruppo 31</p> 
        </div>
    </footer>
  </body>
  
</html>
  