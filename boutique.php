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
<html lang="fr">
<head>
    <title>boutique</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/boutique.css">
    <link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>
<?php
  require_once('header2.php'); // On effectue un appelle du fichier "header.php" //
?>

<aside>
<?php
  
    require_once('sidebar.php'); // De même pour la sidebar //

?>
</aside>
<main>

<?php
    
     if (isset($_GET['show'])){ // On vérifie si "$_GET['show']" existe, si il existe alors... //

         $panier = $_GET['show']; // $panier est égale à "$_GET['show']" //

        $select = $bdd->prepare("SELECT * FROM panier WHERE nomproduit='$panier'"); // $select est égale à $bdd ou on prépare une requête SQL: On selectionne tous les éléments de la table "panier" quand "nomproduit" est égale à "$panier" //
     	$select->execute(); // On execute la requête SQL //

     	$s = $select->fetch(PDO::FETCH_OBJ); // $s est égale à $select que l'on transforme en objet //

     	?>
         
         <!--Ce block de code permet d'afficher les différentes informations si-dessous lorsque l'on clique sur une carde d'un article -->

        <div class="yolo">
         <div class="eee">
         <img src="admin/img/<?php echo $s->nomproduit; ?> "/>
         </div>
         <h1><?php echo $s->nomproduit; ?></h1>
         <h3><?php echo $s->qteproduit; ?></h3>
         <h3><?php echo $s->prixproduit; ?>€</h3>
         <h5>Stock : <?php echo $s->stock; ?></h5>
         <?php if ($s->stock!=0){ ?><a href="panier.php?action=ajout&amp;l=<?php echo $s->nomproduit; ?>&amp;q=l&amp;p=<?php echo $s->prixproduit; ?>">Ajouter au panier</a><?php }else{echo "Stock épuisé !";} ?>
        </div>

        <!-- Fin du block -->

     	<?php
   
     }else{

     if (isset($_GET['category'])){ // Si $_GET['category'] existe alors... //

        $category=$_GET['category']; // $category est égale à $_GET['category'] //
     	$select = $bdd->prepare("SELECT * FROM panier WHERE category='$category'"); // $select est égale à $bdd ou l'on prepare une requête SQL: On selectionne tous les éléments dans la table "panier" quand "category" est égale à "$category" //      
     	$select->execute(); // On execute la requête SQL //

     	while ($s=$select->fetch(PDO::FETCH_OBJ)){ // Quand $s est égale à $select alors on le transforme en objet //

     		?>

             <!-- Ce block de code permet d'afficher les les différentes informations si-dessous sur les cards des articles -->

             <div class="boubou">
              <div class="bou">
              <a href="?show=<?php echo $s->nomproduit; ?>"><img src="admin/img/<?php echo $s->nomproduit; ?>"/></a>
              </div>
              <a href="?show=<?php echo $s->nomproduit; ?>"><h2><?php echo $s->nomproduit;?></h2></a>
              <h2><?php echo $s->qteproduit;?></h2>
              <h2><?php echo $s->prixproduit;?>€</h2>
              <h3>Stock : <?php echo $s->stock; ?></h3>
              <?php if ($s->stock!=0){ ?><a href="panier.php?action=ajout&amp;l=<?php echo $s->nomproduit; ?>&amp;q=l&amp;p=<?php echo $s->prixproduit; ?>">Ajouter au panier</a><?php }else{echo '<h3 style="color red;">Stock épuisé !</h3>';} ?>
             </div>

            <!-- Fin du block -->

     		<?php

     	}

?>



<?php

     }else{ // Sinon ... //

     $select = $bdd->query("SELECT * FROM category"); // $select est égale à $bdd ou l'on execute une requête SQL: on selectionne tous les éléments de la table "category" //

     while ($s = $select->fetch(PDO::FETCH_OBJ)){ // Quand $s est égale à $select alors on le transforme en objet //

     	?>
       
       <div class="reduc">
     	<a href="?category=<?php echo $s->name;?>"><h3><?php echo $s->name?></h3></a>
        <br/>
       </div>
     	<?php

     }

}

}
?>
<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
</main>
<?php
   require_once('footer.php'); // On effectue un appelle du fichier "footer.php" //
?>
<script src="JS/boutique.js"></script>
</body>