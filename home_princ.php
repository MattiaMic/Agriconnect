<?php 
 // Backend code by @ferr34 
  // Frontend Code by @giorgio @Francesco @Davide
  session_start(); 
  $_SESSION['primaVoltaT'] = 0;
  $_SESSION['primaVoltaA'] = 0; 
  $_SESSION['primaVoltaP'] = 0; 
  $_SESSION['numAnimali'] = 0; 
  $_SESSION['numPiante'] = 0; 
  $_SESSION['primaVoltaBollettino'] = 0;
  
$numPaginaVecchio = $_GET['numPaginaVecchio'];  
$numPagina = $_GET['numPagina'];

$regioneScelta = $_GET['regione'];
$dim = $_GET['dimensione'];
$prezzo = $_GET['prezzo'];

  // Creazione connessione per visualizzazzione terreni
  $conn = new mysqli("ftp.everyfarmpoliba.altervista.org","everyfarmpoliba","Mc6xAMaFG974"); 
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
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <title>Agriconnect - Home</title>
  </head>
  
  
  <style>
    
    #header { 
    background-color: #052500;
    width: 100%;
    height: auto;
    display: flex;
    justify-content: space-between;
  }
  
  #div1_header {
    display: flex;
  }
    
    #div2_header {
    display: flex;
    flex-direction: row;
    height: auto;
    max-width: 400px;
    margin-top: 30px;
    margin-bottom: 30px;
  }
    
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
  background: url("images/foggia_7.jpg") no-repeat center center/cover;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-style: Italic;
  text-decoration-color: #052500;
  text-align: center;
  justify-content: flex-end;
  padding-bottom: 95px;
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
  background: url("images/farming_8.jpg") no-repeat center center/cover;
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
    


.pagination a:hover:not(.active) {background-color: #ddd;}
    

  </style>

  <body>
   
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
   </div>
       <div>   
    <!-- Header -->
      <header class="showcase">
        <br>
        <br>
        
      
         <h1>Rendi proficua la tua passione per il mondo verde!</h1>
         <h3>Acquista un terreno o mettine in vendita uno</h3>
         <br>
        <br>
         <button class="button1" onclick="location.href='caricaTerreno.php'"> <i class="fas fa-plus"></i>  Carica Terreno </button>
         <a style="color: #7EBA27">
         oppure
         </a>
         <button class="button2" onclick="document.querySelector('#terreni').scrollIntoView({behavior: 'smooth'});"><i class="fas fa-search-plus"></i> Cerca Il terreno che fa per te </button>
        
   
      </header>
    </div>
      <!-- Box -->
      <div class="intext" id = "terreni">
        
        <h1>Potrebbero interessarti...</h1>    
        
       
        
          <!-- Regione di residenza --> 
        <label for = "regioneResidenza" ><h3> Cerca terreni nella tua zona o seleziona la regione di interesse, la grandezza e il suo prezzo: 
          </h3/label>
        <select id = "regioneResidenza" class = "select-selected">
              <option value = "qd">Qualsiasi regione</option>
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
          
          <!-- Devo valutare bene le value della select --> 
          <select class = "select-selected" id = "dimensione" >
             <option value = "qd">Qualsiasi grandezza</option>
             <option value = "5">Meno di 5 ettari</option>
             <option value = "15">Da 5 ettari fino a 15 ettari </option>
             <option value = "30">Da 15 ettari fino a 50 ettari</option>
             <option value = "50">Più di 50 ettari</option>
          </select>
          
          <select class = "select-selected" id = "prezzo">
             <option value = "qd">Qualsiasi prezzo</option>
             <option value = "5">Meno di 5.000 €</option>
             <option value = "15">Da 5.000 € fino ai 15.000 €</option>
            <option value = "50">Da 15.000 € fino ai 50.000 € </option>  
             <option value = "51">Più di 50.000 €</option>
          </select>
          
          <script>
            // Controllo se i filtri non sono stati selezionati 
            function controllaFiltri()
            {
              <?php 
              if($regioneScelta != null)
              {
                ?>
                    document.getElementById('regioneResidenza').value = "<?php echo $regioneScelta; ?>";
                <?php
              }
            
              if($dim != null)
              {
                ?>
                    document.getElementById('dimensione').value = "<?php echo $dim; ?>";
                <?php
              }
            
              if($prezzo != null)
              {
                ?>
                     document.getElementById('prezzo').value = "<?php echo $prezzo; ?>";
                <?php
              }
            ?>
            }
                    
            controllaFiltri();
            
          </script> 

                   
        <button name = "filtro" onclick="applicaFiltri()" type = "button" class="button1"><i class="fas fa-search"></i></button> 
               
    </div>
        <div class="box">
        <?php 
            // Retrieval dei terreni da altervista 
            if(!$conn)
            {
              // Errore nella connessione al DBMS 
              echo "Errore rilevato nella connessione al DBMS:{$conn -> error}";
            }
            else 
            {
              $cont = 0; 
              
              // Flag 
              $filtroReg = 0; 
              $filtroDim = 0; 
              $filtroPrezz = 0; 
              
              // Connessione andata a buon fine -> Selezione database
              $conn -> select_db("my_everyfarmpoliba");
              
              $primaFoto = 0; // Variabile che tiene conto di che foto si deve visualizzare
              
              // Estrazione primo idTerreno 
              $estraiPrimoId = "SELECT idTerreno FROM terreno LIMIT 1";
              $resEstraiPrimoId = $conn -> query($estraiPrimoId) or die("Errore estrazione primo idTerreno:{$conn -> error}"); 
              while($rowEstraiPrimoId = $resEstraiPrimoId -> fetch_array(MYSQLI_ASSOC))
              {
                $primoId = $rowEstraiPrimoId['idTerreno'];
              }
              
              // Selezione tramite ID 
              if($numPagina != 1)
              {
                $limiteBasso = $primoId + 8  * ($numPagina - 1); 
                $limiteAlto = $limiteBasso + 8;
                
                  // Estrazione terreni
              $estraiInfoTerreni = "SELECT terreno.idTerreno,nomeTerreno,dimensione,via,prezzo,numFotoInserite,utente.regioneResidenza FROM terreno,fotoTerreno,animale,pianta,utenteTerreno,utente 
                                              WHERE utenteTerreno.username = utente.username AND utenteTerreno.idTerreno = terreno.idTerreno AND utenteTerreno.username <> '".$_SESSION['username']."' 
                                              AND (terreno.idTerreno BETWEEN ".$limiteBasso." AND ".$limiteAlto.") AND (terreno.idTerreno = utenteTerreno.idTerreno OR fotoTerreno.idTerreno = terreno.idTerreno 
                                                  OR pianta.idTerreno = terreno.idTerreno OR animale.idTerreno = terreno.idTerreno)";
               // Controllo se sono stati inseriti dei parametri di ricerca 
                if($regioneScelta != "qd" && $regioneScelta != null)
                {
                  $estraiInfoTerreni = $estraiInfoTerreni." AND utente.regioneResidenza = '".$regioneScelta."' "; // Questa tecnica funziona 
                }
                
                if($dim != "qd" && $dim != null)
                {
                  // Qui entra correttamente -> aggiungo la dimensione 
                  
                  // Controllo i valori inseriti 
                  if($dim == "5")
                  {
                    // Voglio meno di 5 ettari di terreno 
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione < 5"; 
                  }
                  
                  if($dim == "15")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione BETWEEN 5 AND 15";
                  }
                  
                  if($dim == "30")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione BETWEEN 15 AND 50";
                  }
                  
                  if($dim == "50")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione > 50"; 
                  }
                }
                
                // Controllo se abbiamo un filtro sul prezzo 
                if($prezzo != "qd" && $prezzo != null)
                {
                  // Controllo i vari valori del prezzo 
                  if($prezzo == "5")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo < 5000";
                  }
                  
                  if($prezzo == "15")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo BETWEEN 5000 AND 15000";
                  }
                  
                  if($prezzo == "50")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo BETWEEN 15000 AND 50000";
                  }
                  
                  if($prezzo == "51")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo > 50000";
                  }
                }
                
               // Fine filtri         
              }
              else // Num pagina = 1 
              {
                   // Estrazione terreni
              $estraiInfoTerreni = "SELECT terreno.idTerreno,nomeTerreno,dimensione,via,prezzo,numFotoInserite,utente.regioneResidenza FROM terreno,fotoTerreno,animale,pianta,utenteTerreno,utente 
                                              WHERE utenteTerreno.username != '".$_SESSION['username']."' AND utenteTerreno.username = utente.username AND terreno.idTerreno = utenteTerreno.idTerreno 
                                              AND (terreno.idTerreno = utenteTerreno.idTerreno OR fotoTerreno.idTerreno = terreno.idTerreno 
                                                  OR pianta.idTerreno = terreno.idTerreno OR animale.idTerreno = terreno.idTerreno) ";
                
                // Controllo se sono stati inseriti dei parametri di ricerca 
                if($regioneScelta != "qd" && $regioneScelta != null)
                {
                  $estraiInfoTerreni = $estraiInfoTerreni." AND utente.regioneResidenza = '".$regioneScelta."' "; // Questa tecnica funziona 
                }
                
                if($dim != "qd" && $dim != null)
                {
                  // Qui entra correttamente -> Aggiungo la dimensione 
                  
                  // Controllo i valori inseriti 
                  if($dim == "5")
                  {
                    // Voglio meno di 5 ettari di terreno 
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione < 5"; 
                  }
                  
                  if($dim == "15")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione BETWEEN 5 AND 15";
                  }
                  
                  if($dim == "30")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione BETWEEN 15 AND 50";
                  }
                  
                  if($dim == "50")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.dimensione > 50"; 
                  }
                }
                
                // Controllo se abbiamo un filtro sul prezzo 
                if($prezzo != "qd" && $prezzo != null)
                {
                  // Controllo i vari valori del prezzo 
                  if($prezzo == "5")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo < 5000";
                  }
                  
                  if($prezzo == "15")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo BETWEEN 5000 AND 15000";
                  }
                  
                  if($prezzo == "50")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo BETWEEN 15000 AND 50000";
                  }
                  
                  if($prezzo == "51")
                  {
                    $estraiInfoTerreni = $estraiInfoTerreni." AND terreno.prezzo > 50000";
                  }
                }
                
               // Fine filtri         
              }
              
              // Query + somministrazione 
              $estraiInfoTerreni = $estraiInfoTerreni." GROUP BY terreno.idTerreno LIMIT 8";
              $resEstraiInfoTerreni = $conn -> query($estraiInfoTerreni) or die("Errore estrazione info Terreni:{$conn -> error}");
              
              
              // Fetch dei risultati 
              while($row = $resEstraiInfoTerreni -> fetch_array(MYSQLI_ASSOC))
              { 
                if($cont = 0)
                {
                  $cont = 1; 
                  $primoId = $row['idTerreno'];
                }
                ?>
                    <div class="card" onclick="apriVetrina(<?php echo $row['idTerreno']; ?>)">
                      
                       <?php 
                          if($primaFoto == 0)
                          {
                            $primaFoto = 1; 
                            
                            $estraiPrimaFoto = "SELECT terreno.idTerreno,fotoTerreno.foto as foto, idFoto FROM terreno,fotoTerreno WHERE fotoTerreno.idTerreno = terreno.idTerreno LIMIT 1";
                            $resEstraiPrimaFoto = $conn -> query($estraiPrimaFoto) or die("Errore estrazione prima foto:{$conn -> error}"); 
                            
                            while($row2 = $resEstraiPrimaFoto -> fetch_array(MYSQLI_ASSOC))
                            {
                              $topLimit = $row2['idFoto'];
                              ?>
                                 <a id="imglogo" onclick = "apriVetrina(<?php echo $row2['terreno.idTerreno']; ?>)"><img src="<?php echo $row2['foto'] ?>" alt="Denim Jeans" style="width:100%"></a>
                              <?php
                            }
                          }
                          else
                          {
                            // Creazione dinamica boundaries per fare apparire 8 terreni per ogni pagina
                            $topLimit = $topLimit + $row['numFotoInserite']; 
                            $estraiSecondaFoto = "SELECT terreno.idTerreno, fotoTerreno.foto as foto, idFoto FROM terreno,fotoTerreno WHERE fotoTerreno.idTerreno = terreno.idTerreno AND idFoto = ".$topLimit." ";
                            $resEstraiSecondaFoto = $conn -> query($estraiSecondaFoto) or die("Errore estrazione seconda foto:{$conn -> error}");
                            
                            while($row3 = $resEstraiSecondaFoto -> fetch_array(MYSQLI_ASSOC))
                            {
                              ?>
                                  <a id="imglogo" onclick = "apriVetrina(<?php echo $row3['terreno.idTerreno']; ?>)"><img src="<?php echo $row3['foto'] ?>" alt="Denim Jeans" style="width:100%"></a>
                              <?php
                             
                            }
                          }
                       ?>
                       
                       <!-- Compilazione card terreno -->
                      
                       <h1><?php echo $row['nomeTerreno'] ?></h1>
                       <p><i class="fas fa-map-marker-alt"></i> <?php echo $row['via'] ?></p>
                       <p class="price"><?php echo $row['prezzo']?><i class="fas fa-euro-sign"></i></p>
                       <div>
                         
                         <?php 
                             
                          // Estrazione numFoto 
                           $estrainumFoto = "SELECT COUNT(*) as numFoto FROM terreno,fotoTerreno WHERE terreno.idTerreno = fotoTerreno.idTerreno AND terreno.idTerreno = ".$row['idTerreno']." ";
                           $resEstraiNumFoto = $conn -> query($estrainumFoto) or die("Errore estrazione numFoto:{$conn -> error};");
                            
                           while($row6 = $resEstraiNumFoto -> fetch_array(MYSQLI_ASSOC))
                           {
                             ?> 
                              <p><i class="fas fa-plus"></i> <?php echo $row6['numFoto']; ?> foto <i class="fas fa-camera"></i></p>
                              <?php
                           }
                         
                            // Estrazione numero di animali e di piante 
                            $estrainumAnimali = "SELECT COUNT(*) as numAnimali FROM terreno,animale WHERE terreno.idTerreno = animale.idTerreno AND terreno.idTerreno = ".$row['idTerreno']." ";
                            $resEstraiNumAnimali = $conn -> query($estrainumAnimali) or die("Errore estrazione numAnimali:{$conn -> error};");
                            
                            while($row4 = $resEstraiNumAnimali -> fetch_array(MYSQLI_ASSOC))
                            {
                              ?>
                                <p><i class="fas fa-plus"></i> <?php echo $row4['numAnimali']; ?> animali<i class="fa fa-fw fa-horse"></i></p>  
                              <?php
                            }
                
                            $estraiNumPiante = "SELECT COUNT(*) as numPiante FROM terreno,pianta WHERE terreno.idTerreno = pianta.idTerreno AND terreno.idTerreno = ".$row['idTerreno']." ";
                            $resEstraiNumPiante = $conn -> query($estraiNumPiante) or die("Errore estrazione numPiante:{$conn -> error};");
                
                            while($row5 = $resEstraiNumPiante -> fetch_array(MYSQLI_ASSOC))
                            {
                              ?>  
                                  <p><i class="fas fa-plus"></i> <?php echo $row5['numPiante'];?> piante <i class="fa fa-fw fa-leaf"></i></p>
                              <?php
                            }
                         ?>       
                       <br>
                      </div>
                    </div>
                <?php
              }
            }
        ?>
        
           </div>
       
        
           
     <!-- Elenco pagine -->
             <br>
        <div class="page">
        <div class="pagination">
          <a style="font-size: 20px"  onclick="paginaPrecedente()">&laquo;</a> <!-- Per gestire le pagine quando faccio l'estrazione controllo, in base al numero pagina a quanto devono andare gli ID nel controllo -->
          <a style="font-size: 20px" id = "indicePagina1" onclick = "nuovaPagina(<?php echo $numPagina; ?>,1)">1</a>
          <a style="font-size: 20px" id = "indicePagina2" onclick = "nuovaPagina(<?php echo $numPagina?>,2)">2</a>
          <a style="font-size: 20px" id = "indicePagina3" onclick = "nuovaPagina(<?php echo $numPagina?>,3)">3</a>
          <a style="font-size: 20px" id = "indicePagina4" onclick = "nuovaPagina(<?php echo $numPagina?>,4)">4</a>
          <a style="font-size: 20px" id = "indicePagina5" onclick = "nuovaPagina(<?php echo $numPagina?>,5)">5</a>
          <a style="font-size: 20px" id = "indicePagina6" onclick = "nuovaPagina(<?php echo $numPagina?>,6)">6</a>
          <a style="font-size: 20px" onclick = "paginaSuccessiva()">&raquo;</a>
        </div>
        </div>
            <section class="center">
        <div  style="margin-left: 2%; ">
          <br>
          <h2 style="font-size: 40px;">Visualizza i terreni caricati!</h2>
          <p>
            EveryFarm permette di visualizzare i terreni caricati e suddivisi per: terreni, animali e piante.
          </p>
           <button class="button1" onclick="location.href='imieiterreni.php'" > Visualizza e Scopri di più </button>
        </div>
      </section>
        
        <script> 
          
          // Script apertura nuove pagine 
      function nuovaPagina(j,i)
          {
              window.open('home_princ.php?numPagina=' + i + '&numPaginaVecchio=' + j,'_self');       
          }
          
          function paginaPrecedente()
          { 
            window.open('home_princ.php?numPagina=<?php echo $numPagina - 1 ?>&numPaginaVecchio=<?php echo $numPagina; ?>','_self');
           }
          
          function paginaSuccessiva()
          {
            
            window.open('home_princ.php?numPagina=<?php echo $numPagina + 1 ?>&numPaginaVecchio=<?php echo $numPagina ?>','_self');
          }
          
          // Script per evidenziare su quale pagina stiamo lavorando 
       function focusOnNewPage()
          {
             var element1 = document.getElementById('indicePagina<?php echo $numPaginaVecchio;?>');
             var element = document.getElementById('indicePagina<?php echo $numPagina; ?>');
            
              // Rimuovo l'active 
              element1.classList.remove("active"); 
              element.classList.add("active");
          }
          
          focusOnNewPage();
          
          // Applicazione filtri
          function applicaFiltri()
          {
              var regioneScelta = document.getElementById('regioneResidenza').value; 
              var dim = document.getElementById('dimensione').value;
              var prezzo = document.getElementById('prezzo').value; 
            
            // Invio valori filtri a script esterno 
              var datiDaInviare = 'numPagina=<?php echo $numPagina;?>' + '&regione=' + regioneScelta + '&dimensione=' + dim + '&prezzo=' + prezzo;
              window.open('home_princ.php?' + datiDaInviare, '_self');
          }
          
          // Apertura vetrina dinamica 
          function apriVetrina(i)
          {
            console.log(i);
            window.open('vetrina.php?idTerr=' + i, '_self');
          }
        </script>
        

<!-- Footer --> 
    <footer class="footer">
        <div class="footer-inner">
          <p> Contact us: everyfarmpoliba@gmail.com </p>
          <p>© 2021 All Rights Reserved. Design By Gruppo 31</p> 
        </div>
    </footer>
</div>
  </body>
<?php mysqli_close($conn); ?>
</html>