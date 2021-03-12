<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>
	 <header>
	 	     <h1><img src="images/w.png">Weapons<br/>armory</h1>
     	    
     	      <nav>
                  <a href="index.php"><p>Accueil</p></a>
                  <a href="boutique.php"><p>Boutique</p></a>
                  <a href="form.php"><p>Contact</p></a>
                  <a href="register.php"><p>Register</p></a>
                  <a href="admin/co_admin.php"><p>Administration</p></a>
     	      </nav>
     	        <a href="panier.php"><p>Panier<img src="icones/panier.png"></p></a>
	 </header>

     <main>
           <h1>Informations légales:</h1>
          
          <div>
           <h4>Direction du site:</h4>
           <p>Dante Pardo - WEAPONS ARMORY SAS</p>
           <p>16 avenue du cèdre</p>
           <p>44001 Paris FRANCE</p>
           <br/>
           <h4>Hébergement:</h4>
           <p>LLP</p>
           <p>67 rue de l'église</p>
           <p>31011 Lille FRANCE</p>
          </div>

     </main>

     <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

      <footer>
               <section id="container">
                      
                    <h3>Contactez-nous:</h3>
                    <p>33 (0)4 56 55 11 83</p>
                    <p>33 (0)6 44 02 03 74</p>
                    <p>contact@weaponsarmory.fr</p>
                   
              </section>
              <section id="container">
                   
                    <h3>Informations:</h3>
                    <a href="id.php"><p>Qui sommes nous?</p></a>
                    <a href="info.php"><p>Informations légales</p></a>
                    <a href="vente.php"><p>Conditions générales de ventes</p></a>
                   
              </section>
              <section id="container2">
                    <h3>Suivez nous sur:</h3>
                    <div class="range">
                       <p><img src="icones/fb.png"></p>
                       <p><img src="icones/twit.png"></p>
                       </div>
              </section>
     </footer>

   <script src="info.js"></script>

</body>
</html>