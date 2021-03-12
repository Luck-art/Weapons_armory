<?php
 session_start();
?>
<body>
<link rel="stylesheet" type="text/css" href="css/panier.css">
<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
<?php

 require_once('header2.php'); // On appelle le fichier header.php //
 require_once('functions_panier.php'); // On appelle le fichier functions_panier.php //


$erreur = false; // $erreur est égale à false //

$action = (isset($_POST['action'])?$_POST['action']:(isset($_GET['action'])?$_GET['action']:null)); // $action est égale à on vérifie si (isset($_POST['action'])?$_POST['action']:(isset($_GET['action'])?$_GET['action'] existent et si oui ils renvoient null //

if ($action!==null){ // Si $action est different de null //

 if (!in_array($action, array('ajout','suppression','refresh'))) // Si ($action, array('ajout','suppression','refresh') n'appartient pas à un tableau alors... //

   $erreur = true; // $erreur est égale à true //

   $l = (isset($_POST['l'])?$_POST['l']:(isset($_GET['l'])?$_GET['l']:null)); // $l est égale à on vérifie si (isset($_POST['l'])?$_POST['l']:(isset($_GET['l'])?$_GET['l'] existent et si oui alors cela renvoie null //
   $p = (isset($_POST['p'])?$_POST['p']:(isset($_GET['p'])?$_GET['p']:null)); // $p est égale à on vérifie si (isset($_POST['p'])?$_POST['l']:(isset($_GET['p'])?$_GET['p'] existent et si oui alors cela renvoie null //
   $q = (isset($_POST['q'])?$_POST['q']:(isset($_GET['q'])?$_GET['q']:null)); // $q est égale à on vérifie si (isset($_POST['q'])?$_POST['q']:(isset($_GET['q'])?$_GET['q'] existent et si oui alors cela renvoie null //

   $l = preg_replace('#/v#','',$l); // On lance une analyse subject pour trouver l'expression rationnelle pattern et remplace les résultats par replacement. //

   $p = floatval($p); // floatval() retourne la valeur de type float (nombre à virgule flottante), extraite à partir du paramètre $p //

   if (is_array($q)){ // Si $q est un tableau alors... //

   $QteArticle = array(); // $QteArticle est égale à un tableau //

   $i = 0; // $i est égale à 0 //

   foreach ($q as $contenu){ // La première forme passe en revue le tableau $q. À chaque itération, la valeur de l'élément courant est assignée à $contenu et le pointeur interne de tableau est avancé d'un élément //

     $QteArticle[$i++] = intval($contenu); // $QteArticle[$i++] est égale à la valeur entière de $contenu // 

   }

   }else{ // Sinon... //

     $q = intval($q); // On retourne la valeur entière de $q //

   }

}

if (!$erreur){ // Si c'est different de $erreur //

  switch ($action){ // On lance une série d'instructions //

    Case "ajout": // Première instruction pour "ajout" //

    ajouterArticle($l,$q,$p); // ajouterArticle correspond à ($l,$q,$p) //

      break; // Fin de la première instruction //
    
    Case "suppression": // Deuxième instruction pour "suppression" //

    supprimerArticle($l); // supprimerArticle correspond à ($l) //

      break; // Fin de la deuxième instruction //

    Case "refresh": // Troisième instruction pour "refresh" //

    for($i = 0;$i<count($QteArticle);$i++){ // Quand $i est égale à 0 alors $i est infèrieur à l'élément du tableau compté par "count" et on rajoute un élément à $i //

        modifierQteArticle($_SESSION['panier']['nomProduit'][$i], round($QteArticle[$i])); // modifierQteArticle correspond à $_SESSION['panier']['nomProduit'][$i]), Retourne la valeur arrondie de $QteArticle à la précision ['$i'] //

    }

      break; // Fin de la troisième instruction //

    Case "Default": // Dernière instruction //

      break; // Fin de la dernière instruction //
  }

}
?>

<!-- Ici on affiche les caractéristiques liées au panier -->
<main>
<form method="POST" action="">
 <table width="500">
       <tr>
           <td>Votre panier:</td>
       </tr>
      <tr>
          <td>Nom du produit:</td>
          <td>Quantitée du produit:</td>
          <td>Prix du produit:</td>
          <td>TVA:</td>
          <td>Action:</td>
      </tr>


<!-- Fin de l'affichage des caractéristiques -->

      <?php

        if(isset($_GET['deletepanier']) && $_GET['deletepanier'] == true){ // Si ($_GET['deletepanier']) et $_GET['deletepanier'] existent, ils sont égaux à true //

          supprimerPanier(); // Et donc, on supprime le panier //
        }

        if(creationPanier()){ // Si (creationPanier()) existe alors... //

        $nbProduits = count($_SESSION['panier']['nomProduit']); // Quand $nbProduits est égale à l'élément du tableau compté par "count" et on rajoute un élément à $nbProduit //

        if ($nbProduits <= 0){ // Si $nbProduits est infèrieur ou égale 0 alors... // 

          echo '<p style="color:Red;">Votre panier est vide !</p>'; // On affiche un message d'erreur //

        }else{ // Sinon... //

          for($i = 0; $i<$nbProduits; $i++){ // Quand $i est égale à 0, que $i est infèrieur à $nbProduit, on ajoute un élément à $i //

            ?>

             <tr>
               
                <!-- Affichage des caractéristiques es produits ajoutés dans le panier depuis la boutique -->

                 <td><br/><?php echo $_SESSION['panier']['nomProduit'][$i]; ?></td>
                 <td><br/><input name="q[]" value="<?php echo $_SESSION['panier']['qteProduit'][$i]; ?>"/></td>
                 <td><br/><?php echo $_SESSION['panier']['prixProduit'][$i];?></td>
                 <td><br/><?php echo $_SESSION['panier']['tva']." %"; ?></td>
                 <td><br/><a href="panier.php?action=suppression&amp;l=<?php echo rawurldecode($_SESSION['panier']['nomProduit'][$i]) ?>">Supprimer</a></td> <!-- rawurldecode décode une chaîne URL -->

                <!-- Fin de l'affichage -->

             </tr>
               <?php } ?>
              <tr>

             <td colspan="2"><br/>
                 <p>Total :<?php echo MontantGlobal()."€"; ?></p><br/>
                 <p>Total avec TVA :<?php echo MontantGlobalTVA()."€"; ?></p><br/>
                
             </td>

             </tr>
                 <td colspan="4">
                     <input type="submit" name="rafraichir"/>
                     <input type="hidden" name="action" value="refresh" />
                     <a href="?deletepanier=true">Supprimer le panier</a>
                     <br/><br/>
                     <a href="end.php">Valider les achats</a>
                 </td>
             </tr>

            

            <?php

          }

        }

      ?>

 </table> 
   </form>
  </main>

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

     </footer>
<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
<script src="JS/panier.js"></script>
</body>
