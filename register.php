<?php
session_start(); // On démarre une session //
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>
     <header> <!--header qui sert à contenir la partie nav de la page-->
     	    <h1><img src="images/w.png" class="image">Weapons<br/>armory</h1>
     	    
     	      <nav>
     	           <a href="index.php"><p>Accueil</p></a>
     	           <a href="boutique.php"><p>Boutique</p></a>
     	           <a href="form.php"><p>Contact</p></a>
                 <a href="register.php"><p>Register</p></a>
                 <a href="admin/co_admin.php"><p>Administration</p></a>
     	      </nav>
     	         <a href="panier.php"><p class="panier">Panier<img src="icones/panier.png"></p></a>
     </header> <!--fin du header-->


     <main>
           <form method="POST" action="">
             <div class="bloc">
              <h1>Register</h1>
               <p>Please fill in this form to create an account.</p>
              <hr>

              <label for="email"><b></b></label>
              <input pattern="[a-zA-Z-[0-9]]+@[a-zA-Z-]+\.[a-zA-Z]{0,20}" type="text" placeholder="Enter Email" name="email" id="email" required><!-- Ici, on utilise du RegEx pour obliger les utilisateurs à respecter certains caractères (par exemple ici: seul les lettres de normales de a-z en caractères minuscule et majuscules sont tolérés, pour se qui est des chiffres cela va de 0 à 20...) -->

              <label for="psw"><b></b></label>
              <input pattern="[a-zA-Z-]{0,20}" type="password" placeholder="Enter Password" name="psw" id="psw" required><!-- De même pour ici -->

              <label for="psw_repeat"><b></b></label>
              <input <input pattern="[a-zA-Z-]{0,20}" type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" required><!-- De même pour ici -->
             <hr>
              
              <button type="submit" class="registerbtn">Register</button>

             </div>
  
           </form> 


    <?php

     $bdd = new PDO("mysql:host=localhost;dbname=weapons_armory;port=3308;charset=utf8", "root", ""); // On établie une nouvelle connexion à la base de donnée //

     
     
     if (isset($_POST['email']) AND isset($_POST['psw']) AND isset($_POST['psw_repeat'])) // Si ($_POST['email']) et isset($_POST['psw']) et isset($_POST['psw_repeat']) existent alors ... //
     {
       $requete = $bdd->prepare("INSERT INTO register(email, psw, psw_repeat) VALUES( ?, ?, ?)"); // On prépare une requête SQL: On insert dans la table "register" les éléments suivant: (email, psw, psw_repeat) qui auront des valeurs qui correspondront par rapport à ce que les utilisateur rentrerons dans les chemps du formulaire //
       $requete->execute(array($_POST['email'],$_POST['psw'],$_POST['psw_repeat'])); // On exécute la requête SQL ou ($_POST['email'],$_POST['psw'],$_POST['psw_repeat']) seront présentés sous forme de tableau //
     }

    ?>

     </main>

        <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>


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

<script src="JS/register.js"></script>


</body>
</html>