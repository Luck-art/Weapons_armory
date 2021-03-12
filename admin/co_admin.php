<?php
  session_start();
?>
<link rel="stylesheet" type="text/css" href="css/co_admin.css">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">

    <header> <!--header qui sert à contenir la partie nav de la page-->
          <h1><img src="img/w.png" class="image">Weapons<br/>armory</h1>
          
            <nav>
                 <a href="../index.php"><p>Accueil</p></a>
                 <a href="../boutique.php"><p>Boutique</p></a>
                 <a href="../form.php"><p>Contact</p></a>
                 <a href="../register.php"><p>Register</p></a>
                 <a href="index.php"><p>Administration</p></a>
            </nav>
              <a href="../panier.php"><p class="panier">Panier<img src="icones/panier.png"></p></a>
     </header> <!--fin du header-->

	   <?php

	   $user='Lucas'; // Ici on test les valeurs des champs à remplir, cette ligne de code indique ce que l'on doit remplir dans la case "username" pour pouvoir se connecter... ///
	   $password_definit='1997'; //Ici de même, mais cette fois ci pour la case "password" //

       if(isset($_POST['submit'])){ // Ici on vérifie si le bouton submit existe, si il existe et qu'il renvoie des information en "POST" alors:

        $username = $_POST['username']; // Le nom de l'utilisateur est égale à $_POST['username'] cela servira à éviter de toujours avoir à retaper $username = $_POST['username'] //
        $password = $_POST['password']; // Le mot de passe est égale à $_POST['password'] cela servira à éviter de toujours avoir à retaper $password = $_POST['password'] //

       if ($username&&$password){ // Si le nom de l'utilisateur et le mot de passe sont remplis alors://

       if ($username==$user&&$password==$password_definit){ // Si le "username" est égale au nom d'utilisateur rentré et est également égale au mot de passe rentré alors:

        $_SESSION['username']=$username; // Alors on peut se connecter à la page d'administration du site web! //
       	header('Location:admin.php');

       }
       else{ // Sinon message d'erreur... //

        echo "Identifiants erronnés";

       }

       }
       else{ // Sinon, message d'erreur //

        echo "Veuillez remplir tous les champs"; 

       }

       }

	  ?>
    <main>

	  <h1>
	  	  Administration - Connexion  <!-- Ici il s'agit du formulaire qui servira à se connecter via le nom de l'utilisateur "username", et le mot de passe "password" -->
	  </h1>
	  <form action="" method="POST"/> 
	  	    <h3>Pseudo:</h3><input type="text" name="username"/><br/><br/>
	  	    <h3>Mot-de-passe:</h3><input type="password" name="password"><br/><br/>
	  	    <input type="submit" name="submit"/><br/><br/>
	  </form>

          <button onclick="topFunction()" id="myBtn" title="Go to top">^</button> <!-- Ici on définit le bouton qui nous permettra de scroll vers le haut -->

    </main>


      <script src="JS/co_admin.js"></script>

    <?php

       require_once('require/footer.php');

    ?>