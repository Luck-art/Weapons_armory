<?php
  session_start(); // On démarre une session //
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"> <!-- balise servant à reconnaitre les caractères spéciaux -->
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet"> <!-- Lien pour l'utilisation de la police -->
</head>
<body>
	 <header>
	 	     <h1><img src="images/w.png">Weapons<br/>armory</h1> <!-- C'est ici que se trouve l'icone "W" du header -->
     	    
     	      <nav>                                     <!-- Début de la barre de navigation -->
     	      	   <a href="index.php"><p>Accueil</p></a>
     	      	   <a href="boutique.php"><p>Boutique</p></a>
     	      	   <a href="form.php"><p>Contact</p></a>
                 <a href="register.php"><p>Register</p></a>
                 <a href="admin/co_admin.php"><p>Administration</p></a>
     	      </nav>                                    <!-- Fin de la barre de navigation -->
     	         <a href="panier.php"><p class="panier">Panier<img src="icones/panier.png"></p></a>
	 </header>

     <main>

  <div><img src="images/blasonmirroir.png"></div> 

      <fieldset>
     	<legend><img src="icones/Message-rempli.png"></legend> 

     	   <form method="POST" action="">

  <div> 
     
   <input pattern="[a-zA-Z-]{0,20}" type="text" name="nom" id="nom" class="champ" placeholder="Votre nom..." /><br /><br /> <!-- Ici, on utilise du RegEx pour obliger les utilisateurs à respecter certains caractères (par exemple ici: seul les lettres de normales de a-z en caractères minuscule et majuscules sont tolérés, pour se qui est des chiffres cela va de 0 à 20...) -->

    
   <input pattern="[a-zA-Z]{0,20}" type="text" name="prenom" id="prenom" class="champ" placeholder="votre prénom..." /><br /><br />  <!-- De même pour ici -->

    
   <input pattern=" [1 - 9]{0,20}" type="number" name="numero" id="numero" class="champ" placeholder="votre numéro..." ></<br /><br /> <!-- Ici c'est pareil sauf que comme il s'agit d'un numéro on adapte le RegEx en conséquence... -->
     <br/>
   <textarea name="commentaires" id="commentaires" placeholder="vos commentaires..."></textarea><br/><br/>

    
   <input pattern="[a-zA-Z-[0-9]]+@[a-zA-Z-]+\.[a-zA-Z]{0,20}" type="text" name="mail" id="mail" class="champ" placeholder="votre email..." /><br /><br />  <!-- De même ici -->

   <input type="submit" id="envoi" value="Envoyer" /> 
   <input type="reset" id="rafraichir" value="Rafraîchir" /> 
  </div> 
</form> 


   <?php

     $bdd = new PDO("mysql:host=localhost;dbname=weapons_armory;port=3308;charset=utf8", "root", ""); // On établie une nouvelle connexion à la base de donnée //

     
     
     if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['numero']) AND isset($_POST['commentaires']) AND isset($_POST['mail'])) // Si $_POST['nom'], $_POST['prenom'],$_POST['numero'],$_POST['commentaires'] et $_POST['mail'] existent alors ... //
     {
       $requete = $bdd->prepare("INSERT INTO contact(nom, prenom, numero, commentaires, email) VALUES( ?, ?, ?, ?, ?)"); // On prépare une requête SQL: On insert dans la table "contact" les valeurs suivantes: nom, prenom, numero, commentaires, email qui ont des valeurs inconnues étant donnée que ces valeurs seront définies lorsqu'un utilisateur remplira le formulaire de contact //
       $requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['commentaires'],$_POST['mail'])); // On éxecute la requête SQL ou $_POST['nom'],$_POST['prenom'],$_POST['numero'],$_POST['commentaires'],$_POST['mail'] seront présentés sous forme de tableau //
     }

   ?>

</fieldset>

   <div><img src="images/blason.png" id="blason_bottom"></div>

               <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>

     </main>

     <footer>                      <!-- Début du footer -->
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
                 <!--Fin du footer -->
  <script src="JS/form.js"></script>
</body>
</html>