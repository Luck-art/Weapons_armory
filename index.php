<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">    
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>

    

     <header> <!--header qui sert à contenir la partie nav de la page-->
     	    <h1><img src="images/w.png" class="image">Weapons<br/>armory</h1>
     	    
     	      <nav>
     	      	   <a href="index.php"><p>Accueil</p></a> <!-- Je fais un liens vers le fichier index.php -->
     	      	   <a href="boutique.php"><p>Boutique</p></a>
     	      	   <a href="form.php"><p>Contact</p></a>
                 <a href="register.php"><p>Register</p></a>
                 <a href="admin/co_admin.php"><p>Administration</p></a>
     	      </nav>
     	         <a href="panier.php"><p class="panier">Panier<img src="icones/panier.png"></p></a>
     </header> <!--fin du header-->


     <div class="banniere"> <!--Cette div contiendra la bannière de la page d'accueil-->
    
      <img src="images/crusader.jpg" class="swaggy">

     </div> <!--fin de la div bannière-->

     <main> <!--le main contiendra la partie description du site web qui sera implanté dans une balise article-->
     	  <h2>Weapons armory: votre armurie historique en ligne</h2>
           
     	  <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     	  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     	  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     	  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     	  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     
     	  <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


     </main> <!--fin du main-->
     
     <aside> <!--l'aside servira à afficher les nouveautées de la boutique sous forme de slider-->
     	   <h1>Articles en ventes:</h3>

           <div class="slideshow-container">

<div class="mySlides fade"> <!-- Div de la première image -->
  <div class="numbertext">1 / 3</div> <!-- Chiffres de la pagination -->   
  <img src="images/heaume.jpg" class="one"> <!-- Insertion de la première image -->
  <div class="text">Heaume de légionnaire romain</div> <!-- Description de la première image -->
</div>

<div class="mySlides fade"> <!-- Div de la deuxième image -->
  <div class="numbertext">2 / 3</div> <!-- Chiffres de la pagination -->
  <img src="images/sabre.jpg" class="one"> <!-- Insertion de la deuxième image -->
  <div class="text">Sabre orientale</div> <!-- Description de la deuxième image -->
</div>

<div class="mySlides fade"> <!-- Div de la troisième image -->
  <div class="numbertext">3 / 3</div> <!-- Chiffres de la pagination -->
  <img src="images/sabre_2.jpg" class="one"> <!-- Insertion de la troisième image -->
  <div class="text">Claymore impériale</div> <!-- Description de la troisième image -->
</div>

</div>
<br>

<div class="dark"> <!-- Cette partie sert à l'affichage des points en bas du slider qui correspondent à la pagination des images -->
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
            
              <a href="boutique.php"><p>Watch our store!!!</p></a>  

               <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>


     </aside> <!--fin de l'aside-->

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

<script src="JS/index.js"></script> <!-- On insère le fichier script à la fin pour que la page index se charge plus facilement et plus rapidement -->


</body>
</html>