<?php

 function creationPanier() // On crée la fonction "creationPanier" // 
 {
 
   try{ // On essaye de se connecter à la base de donnée //

     $bdd = new PDO('mysql:host=localhost;port=3308;dbname=weapons_armory','root',''); // On établie une nouvelle connecxion //
     $bdd->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER); // Les caractères seront écris en minuscule //
     $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // Les erreurs lanceront des exeptions //
   }

   catch(Exception $e){ // Si la connexion échoue alors on affiche un message d'erreur //

      die('Une erreur est survenue');

   }

 	if (!isset($_SESSION['panier'])){ // Si le panier en question existe alors on l'affiche //

 		$_SESSION['panier'] = array(); // $_SESSION['panier'] est égale à array() donc à un tableau //
 		$_SESSION['panier']['nomProduit'] = array(); // $_SESSION['panier']['nomProduit'] est égale à array() //
        $_SESSION['panier']['qteProduit'] = array(); // $_SESSION['panier']['qteProduit'] est égale à array() //
        $_SESSION['panier']['prixProduit'] = array(); // $_SESSION['panier']['prixProduit'] est égale à array() //
        $_SESSION['panier']['verrou'] = false; //  $_SESSION['panier']['verrou'] est égale à false //
        $select = $bdd->query("SELECT tva FROM panier"); // $select est égale à $bdd ou l'on execute une requête SQL: on selectionne tous les éléments de la colonne "tva" dans la table "panier" //
        $data = $select->fetch(PDO::FETCH_OBJ); // $data est égale à $select que l'on transforme en objet //
        $_SESSION['panier']['tva'] = $data->tva;  // "$_SESSION['panier']['tva'] est égale à $data qui correspond à tva" //
 	}

 	return true;
 }

 function ajouterArticle($nomProduit,$qteProduit,$prixProduit){ // Ici on crée la fonction ajouterArticle ou l'on intègre $nomProduit,$qteProduit,$prixProduit //

	if (creationPanier() && !isVerouille()) // Si les fonctions creationPanier() et isVerouille() existent alors... //
	{
		$positionProduit  = array_search($nomProduit, $_SESSION['panier']['nomProduit']); // $positionProduit est égale à array_search($nomProduit, $_SESSION['panier']['nomProduit'] (ici on recherche dans un tableau la clé associée à la première valeur grâce à "array_search" ) //

		if ($positionProduit !== false) // Si $positionProduit est different de false alors ... //
		{
			$_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit; // $_SESSION['panier']['qteProduit'][$positionProduit] est supérieur ou égale à $qteProduit //
		}

		else // Sinon... //
		{
			array_push($_SESSION['panier']['nomProduit'],$nomProduit); // Ici on empile les éléments à la fin du tableau //
			array_push($_SESSION['panier']['qteProduit'],$qteProduit); // Ici on empile les éléments à la fin du tableau //
			array_push($_SESSION['panier']['prixProduit'],$prixProduit);  // Ici on empile les éléments à la fin du tableau //
		}

    }
		else // Sinon on affiche un message d'erreur //
		{
			echo "Erreur,contacter l'administrateur du site.";
		}
    
}
function ModifierQteArticle($nomProduit,$qteProduit){ // Ici on crée la fonction ModifierQterArticle ou l'on intègre $nomProduit,$qteProduit //


	if (creationPanier() && !isVerouille()){ //Si le panier existe... //

	 
	  if ($qteProduit > 0){ //Si la quantité est positive on modifie sinon on supprime l'article... //


		$positionProduit = array_search($nomProduit, $_SESSION['panier']['nomProduit']); //Recherche du produit dans le panier... //
		

		if ($positionProduit !== false){ // Si ($positionProduit est différent de false) alors... //

			$_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit; // $_SESSION['panier']['qteProduit'][$positionProduit] est égale à $qteProduit //
		}

      }

		else{ // Sinon... //

			supprimerArticle($nomProduit); // supprimerArticle supprime le $nomProduit //
		}
	}
	    else // Sinon on affiche un message d'erreur //
	    {
		echo "Erreur, contacter un administrateur.";
	    }
}
function supprimerArticle($nomProduit){ // Ici on crée la fonction supprimerArticle ou l'on intègre $nomProduit// 

 	if (creationPanier() && !isVerouille()){ // Si le panier existe alors... //

 		$tmp = array(); // $tmp est égale à un tableau //
 		$tmp['nomProduit'] = array(); // $tmp['nomProduit'] est égale à un tableau //
 		$tmp['qteProduit'] = array(); // $tmp['qteProduit'] est égale à un tableau //
 		$tmp['prixProduit'] = array(); // $tmp['prixProduit'] est égale à un tableau //
 		$tmp['verrou'] = $_SESSION['panier']['verrou']; // $tmp['verrou'] est égale à $_SESSION['panier']['verrou'] //
 		$tmp['tva'] = $_SESSION['panier']['tva']; // $tmp['tva'] est égale $_SESSION['panier']['tva'] //
 		
 		for ($i = 0; $i < count($_SESSION['panier']['nomProduit']); $i++){ // Quand $i est égale à 0 alors $i est infèrieur  aux éléments du tableau comptés par "count" et on rajoute un élément à $i //

 			if($_SESSION['panier']['nomProduit'][$i] !== $nomProduit){ // Si $_SESSION['panier']['nomProduit'][$i] est different de $nomProduit alors... //

                array_push( $tmp['nomProduit'],$_SESSION['panier']['nomProduit'][$i]); // Ici on empile les éléments à la fin du tableau //
			    array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]); // Ici on empile les éléments à la fin du tableau // 
			    array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]); // Ici on empile les éléments à la fin du tableau //

 			}
 	    }

        $_SESSION['panier'] = $tmp; // $_SESSION['panier'] est égale à $tmp //

        unset($tmp); // On détruit la variable "$tmp" grâce à "unset" //

       }else{ // Sinon on affiche un message d'erreur //

 		        echo "Erreur, veulliez contactez un administrateur.";

 	        }
    
}function MontantGlobal(){ // Ici on crée la fonction "MontantGlobal" //

	$total = 0; // $total est égale à 0 //

	for ($i=0; $i < count($_SESSION['panier']['nomProduit']); $i++){  // Quand $i est égale à 0 alors $i est infèrieur à aux éléments du tableau comptés par "count" et on rajoute un élément à $i //

		$total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i]; // $total est supérieur ou égale à $_SESSION['panier']['qteProduit'][$i] multiplié par $_SESSION['panier']['prixProduit'][$i] //

	}

	return $total; // On retourne $total //

}
function MontantGlobalTva(){ // Ici on crée la fonction "MontantGlobalTva" //

	$total = 0; // $total est égale à 0 //

	for ($i = 0; $i < count($_SESSION['panier']['nomProduit']); $i++) // Quand $i est égale à 0 alors $i est infèrieur à aux éléments du tableau comptés par "count" et on rajoute un élément à $i //
	{ 
		$total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i]; // $total est supérieur ou égale à $_SESSION['panier']['qteProduit'][$i] multiplié par $_SESSION['panier']['prixProduit'][$i] //
	}

	return $total + $total*$_SESSION['panier']['tva']/100; // On retourne $total plus $total multiplié par $_SESSION['panier']['tva'] divisé par 100 //

}
function supprimerPanier(){ // Ici on crée la fonction "SupprimerPanier" //

    	unset($_SESSION['panier']); // Ici on supprime ($_SESSION['panier']) //

    }
function isVerouille(){ //  Ici on crée la fonction "isVerouille" // 

    if(isset($_SESSION['panier']) && $_SESSION['panier']['verrou']){ // Si ($_SESSION['panier']) et $_SESSION['panier']['verrou']) existent alors... //

  	    return true; // On retourne vraie (true) //
    }
    else{ // Sinon on retourne faux (false) //

  	    return false;
    }

}
function compterArticle() //  Ici on crée la fonction "compterArticle" // 
{
	if (isset($_SESSION['panier'])){ // Si ($_SESSION['panier']) existe alors... //

		return count($_SESSION['panier']['nomProduit']); // On retourne le nombre d'éléments comptés par "count" //

	}
	else{ // Sinon on retourne 0 //

		return 0;

	}
}

?>