<?php
 session_start();

 try{
        $bdd = new PDO('mysql:host=localhost;port=3308;dbname=weapons_armory','root','');
        $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
      catch(Exception $e){

         echo "une erreur est survenue";
         die();

    }
?>
<!DOCTYPE html>
<html>
 <head>
       <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="css/header.css">
 </head>
 <header>
	 	     <h1><img src="img/w.png">Weapons<br/>armory</h1>
     	    
     	      <nav>
     	      	   <a href="index.php"><p>Accueil</p></a>
     	      	   <a href="boutique.php"><p>Boutique</p></a>
     	      	   <a href="form.php"><p>Contact</p></a>
                 <a href="register.php"><p>Register</p></a>
                 <a href="admin/co_admin.php"><p>Administration</p></a>
     	      </nav>
     	        <p>Panier<img src="icones/panier.png"></p>
 </header>
