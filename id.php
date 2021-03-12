<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="css/id.css">
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>
	   <header> <!--header qui sert à contenir la partie nav de la page-->
     	    <h1><img src="images/w.png">Weapons<br/>armory</h1>
     	    
     	      <nav>
     	      	   <a href="index.php"><p>Accueil</p></a>
     	      	   <a href="boutique.php"><p>Boutique</p></a>
     	      	   <a href="form.php"><p>Contact</p></a>
                   <a href="register.php"><p>Register</p></a>
                   <a href="admin/co_admin.php"><p>Administration</p></a>
     	      </nav>
     	        <a href="panier.php"><p>Panier<img src="icones/panier.png"></p></a>
     </header> <!--fin du header-->
  

    <main> <!-- Dans le main on simule une description de l'entreprise avec la balise <lorem> pour générer du texte -->
    	   <h1>WEAPONS ARMORY</h1>
    	     	    
    	     	     <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	     	    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	     	    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	     	    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	     	    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	     	    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             
    	     	    <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	     	    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	     	    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	     	    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	     	    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	     	    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    	     
    </main> <!-- Fin du main -->
       
    <aside>
    	   <div> <!-- Ici les <div> servent à réaliser des cards pour les articles... -->
    	   	    <h3>Claymore</h3>
    	   	    <img src="images/epee.jpg" alt="claymore" class="epee">
    	   	    <a href=""><p>Watch our store!</p></a>
    	   </div>
           
           <div>
           	   <h3>Templar shield</h3>
           	   <img src="images/shield.jpg" alt="bouclier" class="bouclier">
           	   <a href=""><p>Watch our store!</p></a>
           </div>

           <div>
           	   <h3>Plate's armore</h3>
           	   <img src="images/armor.jpg" alt="armure" class="armure">
           	   <a href=""><p>Watch our store!</p></a>
           </div>

           <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

    </aside>


  <footer> <!-- le footer contiendra des infos pratiques liées au site -->
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
     </footer> <!--fin du footer-->

     <script src="id.js"></script>

</body>
</html>