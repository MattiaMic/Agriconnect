<?php 

 // Script per la modifica dei dati di un terreno - made by @ferr34

 // Ricezione dei dati in GET dalla pagina precedente 
$nome = $_GET['nome'];
$dimensione = $_GET['dimensione'];
$posizione = $_GET['posizione'];
$utilizzo = $_GET['utilizzo'];
$prezzo = $_GET['prezzo'];
$bio = $_GET['bio'];
$idTerreno = $_GET['idTerreno'];

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
   
       // Creazione della query di modifica 
       $query = "UPDATE terreno SET "; 
   
       if($nome != null)
       {
         // Aggiungo il nome poichè non vuoto
         $query = $query." `nomeTerreno`= '".$nome."', ";
       }
   
       if($dimensione != null)
       {
         
         // Controllo che sia stato mandato un valore numerico -> redirect a pagina "I miei terreni"
         if(is_numeric($dimensione))
         {
           // Aggiungo la dimensione purchè non vuota e composta di soli numeri  
         $query = $query." `dimensione`= ".$dimensione.", ";
         }
         else 
         {
           // Formato non valido per la dimensione 
           ?>
              <script> 
                  alert("Formato per la dimensione non valido. Reinserire usando solo numeri!"); 
                  open('../caricaTerreno.php?idTerreno=<?php echo $idTerreno?>&fmt=1','_self');
              </script>
           <?php
         }
         
         
       }
   
        if($prezzo != null)
       {
         
          // Controllo che il prezzo sia esclusivamente numerico 
          if(is_numeric($prezzo))
          {
            // Aggiungo il prezzo poichè non vuoto e composto di soli numeri 
            $query = $query." `prezzo`= ".$prezzo.", ";
          }
          else 
          {
            // Formato non valido per il prezzo 
           ?>
              <script> 
                  alert("Formato per il prezzo non valido. Reinserire usando solo numeri!"); 
                  open('../caricaTerreno.php?idTerreno=<?php echo $idTerreno?>&fmt=1','_self');
              </script>
           <?php
          }
         
       }
   
      if($posizione != null)
      {
        $query = $query." `via`= '".$posizione."', ";
      }
   
      if($utilizzo != null)
      {
        $query = $query." `utilizzo`= '".$utilizzo."', ";
      }
   
      if($bio != null)
      {
        $query = $query." `descrizione`= '".$bio."' ";
      }
   
      
      $query = $query." WHERE idTerreno = ".$idTerreno." ";
   
    
      // Controllo che ci siano effettive modifiche, altrimenti non effettuo nessuna query 
      if($query == "UPDATE 'terreno' SET WHERE idTerreno = ".$idTerreno." ")
      {
        // Nessuna modifica 
        ?>
            <script> 
                alert('Non sono state rilevate modifiche. Ritorno alla pagina principale.');
                open('../home_princ.php?numPagina=1&numPaginaVecchio=1','_self');
            </script>
        <?php
      }
   else 
   {
     // Modifiche rilevate -> somministrazione query 
     $resModificaTerreno = $conn -> query($query) or die("Errore nella modifica del terreno: {$conn -> error}");
     ?>
        <script> 
            alert('Modifiche correttamente effettuate. Redirect alla pagina principale.');
        </script>
     <?php
   }
      
}

// Chiusura connessione e redirect alla pagina principale 
mysqli_close($conn);

?>
  <script> 
    open('../home_princ.php?numPagina=1&numPaginaVecchio=1','_self');
  </script>
<?php

?>