<?php

     session_start();

?>

 <h1>Bienvenue, <?php echo $_SESSION['username']; ?></h1> <!-- Ici on utilise les variables de session pour se connecter, grâce aux sessions on peut réutiliser le "username" que l'on a utilisé lors du remplissage du formulaire sur la page de connexion  si le "username" et le "password" sont exacts alors on sera connecter à l'espace administratif et le "username" correspondant sera affiché sur l'espace admin! -->
<br/>

<a href="?action=add">Ajouter un produit</a><br/> <!-- Ici on utilise une variable de type "GET" étant donné qu'il y a ici "?action=add". Ici le "a href" servira à ajouter un produit. -->
<a href="?action=modifyanddelete">Modifier / Supprimer un produit</a><br/><br/> <!-- Pareil pour ici à la seul différence se sera pour modifier ou supprimer un produit. -->

<a href="?action=add_category">Ajouter une catégorie</a><br/> <!-- De même pour ici, la variable change car ce "a href" sert à ajouter non pas un produit mais une catégorie -->
<a href="?action=modifyanddelete_category">Modifier / Supprimer une catégorie</a><br/><br/> <!-- Pour modifier ou supprimer une catégorie -->

<a href="?action=options">Options</a><br/><br/> <!-- Pour changer les options de calcul de poids ou cencore pour régler la tva, cela nécessite une autre variable.-->

<a href="../index.php">Retour</a><br/><br/>


<?php
  try{ //On essaye de connecter à la base de donnée...//
 		$bdd = new PDO('mysql:host=localhost;port=3308;dbname=weapons_armory','root',''); //Nouvelle connection à la base de donnée -> On indique le serveur MySQL, l'adresse localhost, le port de la base de donnée, le nom de base de donnée donc dans mon cas il s'agit de "weapons_armory", l'utilisateur donc "root" dans ce cas de figure (on est sur serveur locale), et pour finir le mot de passe qui n'existe pas dans ce cas. //
        $bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER); // Les noms de champs seront en caractères minuscules //   
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Les erreurs lanceront des exeptions //
 	}

    catch(Exception $e){ // Si la connexion ne peut pas se faire alors on indique un message d'erreur //

         die("une erreur est survenue");

    }

    if(isset($_SESSION['username'])){ // Ici on vérifie que "username" existe //

      if(isset($_GET['action'])){ // On vérifie si la variable "action" existe //

         if($_GET['action']=='add'){ // Si la variable "action" est égale à "add" alors... //

           if(isset($_POST['submit'])){ // On vérifie la variable "submit" existe //

            $stock=$_POST['stock']; // $stock est égale à "$_POST" stock //
 	          $nomProduit=$_POST['nomProduit']; // $nomProduit est égale à "$_POST" nomProduit //
 	          $qteProduit=$_POST['qteProduit']; // Pareil pour ici, mais pour qteProduit //
 	          $prixProduit=$_POST['prixProduit']; // De même ici //

 	          $img = $_FILES['img']['name']; // $img est égale à ['img']['name'] (on reprend le $FILES qui est présent dans le formulaire qui permet aussi de renvoyer des informations mais à l'inverse de $_POST ce n'est pas une variable superglobal) //

 	          $img_tmp = $_FILES['img']['tmp_name']; // $img_tmp est égale à $_FILES['img']['tmp_name'] //

 	          echo $_FILES['img']['tmp_name']; // Ici on affiche ['img'] et ['tmp_name'] //
             
              if(!empty($_FILES) && isset($_FILES['image'])){ // Si l'envoie se fait différament que avec $_FILES et que $_FILES['image'] existe ... //
                 echo $_FILES['image']['tmp_name']; // Alors on affiche $_FILES['image']['tmp_name'] //
                }

 	           if (!empty($img_tmp)){ // Si ça ne correspond pas à $img_tmp... //

 		          $image = explode('.',$img); // Alors $image est égale '.',$img (ici on scinde une chaîne de caractères en segments grâce à "explode"...) //

 		          $image_ext = end($image); // $image_ext est égale à end($image) (ici, on se sert du "end" pour déplacer le pointeur interne du tableau array jusqu'au dernier élément et retourner sa valeur) //

 		          if (in_array(strtolower($image_ext),array('png','jpg','jpeg'))===false){ // Si dans le tableau  ou il y a "$image_ext" il n'y a pas les extensions suivantes ('png','jpg','jpeg') alors... //

 			          echo "Veuillez rentrer une image de type: jpg,png,jpeg"; // On affiche un message d'erreur //

 		          }else{  // Sinon...  //

                        $image_size = getimagesize($img_tmp); // $image_size est égale à getimagesize($img_tmp) //

                        if ($image_size['mime']=='image/jpeg'){ //Si ($image_size['mime']=='image/jpeg') alors... //

           	                $image_src = imagecreatefromjpeg($img_tmp); //  $image_src est égale à imagecreatefromjpeg($img_tmp) alors... // // Ici cela sert à vérifier que l'image qui à était sélectionnée de base était bien en format jpg/jpeg et qu'elle n'a pas était modifiée volontairement ce que certains hackers s'amusent à faire... //

                        }else if ($image_size['mime']=='image/png'){ // Sinon si ($image_size['mime'] est égale à 'image/png') alors ... //

           	                      $image_src = imagecreatefrompng($img_tmp); // $image_src est égale à imagecreatefrompng($img_tmp) alors ... // // Comme plus haut pour le format jpg/jpeg, ici on fait la vérification nécessaire pour le format png... //

                        }else{ // Sinon... // 

                             $image_src = false; // $image_src est égale à false alors... //

                             echo "Veuillez rentrer une image valide."; // On affiche un message d'erreur //

                             //Cela permet également d'éviter toute tentative d'intrusion... //

                        } // C'est ici que l'on va faire la fonction de redimensionnement. //

                        if ($image_src!==false){ // Si $image_src est different de false... //

           	                $image_width=200; // Alors, $images_width (largeur de l'image) est égale à 200px; //

           	                if ($image_size[0]==$image_width){ //Si $image_size est égale $image_width... //

           		                $image_finale = $image_src; //Alors $image_finale est égale à $image_src // 

           	                }else{ // Sinon... //

                                  $new_width[0]=$image_width; // On crée une nouvelle largeur d'image ($new_width) qui sera égale à $image_width //

                                  $new_height[1] = 200; // On définit une nouvelle hauteur ($new_height[1]) qui est égale à 200px; //

                                  $image_finale = imagecreatetruecolor($new_width[0],$new_height[1]); // On retourne une ressource représentant une image noire //

                                  imagecopyresampled($image_finale,$image_src,0,0,0,0,$new_width[0],$new_height[1],$image_size[0],$image_size[1]); // Ici on utilise la fonction "imagecopyresampled" pour copier, redimensionner et rééchantillonner l'image //

           	                }

           	                imagejpeg($image_finale,'img/'.$nomProduit.'.jpg'); // imagejpeg correspond donc à $image_finale et au $nomproduit //

                        }

 		            }

 	            }else{ // Sinon on affiche un message d'erreur... //

                     echo "Veuillez rentrer une image";

 	            }

                if ($nomProduit&&$qteProduit&&$prixProduit&&$stock){ 

 	                  $category = $_POST['category']; // La variable $category est égale à $_POST category. On la récupère avec le formulaire qui envoie les information grâce à la méthode "POST"... //

                    $weight = $_POST['weight']; // $weight est égale à $_POST weight //

                    $select = $bdd->query("SELECT price FROM weight WHERE name='$weight'"); // Ici on execute une requête SQL sur la base de donnée ou l'on sélectionne la catégorie "price" (ou la colonne "price") dans la table "weight" quand "name" est égale à "$weight" //

                    $s = $select->fetch(PDO::FETCH_OBJ); // $s est égale à $select que l'on transforme en objet //

                    $shipping = $s->price; // $shipping est égale à $s qui correspond à price //

                    $old_prixProduit = $prixProduit; // $old_prixProduit (ou l'ancien prix du produit) est égale à $prixProduit (ou tout simplement est égale au nouveau prix du produit)

                    $final_price = $old_prixProduit + $shipping; // $final_price ("final_price" qui est une colonne de la table "panier") est égale à $old_prixProduit + $shipping ("shipping qui est également une colonne de la table "panier") //

                    $select = $bdd->query("SELECT tva FROM panier"); // $select est égale à $bdd (qui représente la base de donnée) ou l'on fait une requête SQL ou l'on va selectionner la colonne "tva" dans la table "panier" //

                    $s1 = $select->fetch(PDO::FETCH_OBJ); // $s1 est égale $select que l'on tranforme en objet //

                    $tva = $s1->tva; // $tva est égale $s1 qui correspond à "tva" //

                    $final_price_1 = $final_price+$final_price*$tva/100; // $final_price_1 (on rajoute le 1 pour le différentier du $final_price) est égale à $final_price + lui même * $tva/100 //

                    $insert = $bdd->prepare("INSERT INTO panier VALUES('','$nomProduit','$qteProduit','$prixProduit','$category','$weight','$shipping','$tva',$final_price,'$stock')"); // Ici on prepare une requete SQL dans la base de donnée pour insérer des valeurs à l'interieur, donc ici, on laisse le premier champ vide car il s'agit du champ "id" est que se champ est en "auto-incrémentation", pour les autres on remplie tout simplement leur noms... //
                    $insert->execute(); // On execute la requête sur la base de donnée //

                }else{ // Sinon on affiche un message d'erreur... //

 	                 echo "Veullez remplir tous les champs";
 	
                }

            }
   ?>

        <!--Début du formulaire d'ajout de produit-->

        <form action="" method="POST" enctype="multipart/form-data">
  	    <h3><em>Nom du produit</em></h3><input type="text" name="nomProduit"/>
  	    <h3><em>Quantitée du produit</em></h3><input type="text" name="qteProduit"/>
  	    <h3><em>Prix du produit</em></h3><input type="text" name="prixProduit"><br/><br/>
  	    <h3><em>Image:</em></h3>
  	    <input type="file" name="img"/><br/><br/>
  	    <h3><em>Categorie :</em></h3><select name="category">
  	  	
        <?php $select=$bdd->query("SELECT * FROM category"); // Ici on dit que $select est égale $bdd et on execute ensuite une requête SQL pour selectionner la totalitée de la table "category" //

             while($s = $select->fetch(PDO::FETCH_OBJ)){ //Quand $s est égale à $select alors on le transforme en objet //

            ?>

          	<option><?php echo $s->name; ?></option> <!-- On affiche le nom de la catégorie choisie -->

          	<?php

          }

        ?>

  	      </select><br/>

          <h3><em>Poids plus de :</em></h3><select name="weight">

          <?php 

             $select=$bdd->query("SELECT * FROM weight"); //$select est égale à $bdd ou l'on execute une requête SQL: on selectionne tous les éléments de la table "weight" //

             while($s = $select->fetch(PDO::FETCH_OBJ)){ // Quand $s est égale à $select alors on le transforme en objet //

            ?>

            <option><?php echo $s->name; ?></option> <!-- On affiche $s qui correspond à "name" -->

            <?php

            }

        ?>

          </select><br/><br/>                                                
          <h3><em>Stock :</em></h3><input type="text" name="stock"><br/><br/> 
  	      <input type="submit" name="submit"/>
          </form> 

          <!--Fin du formulaire d'ajout de produit-->                                                           
     
         <?php

         }else if ($_GET['action']=='modifyanddelete'){ // Sinon si "$_GET action" est égale à modifyanddelete alors... //

    	      $select = $bdd->prepare("SELECT * FROM panier"); // On prepare une requête SQL ou l'on va sélectionner tous les éléments de la table panier //
            $select->execute(); // Ici on execute tout simplement la requête SQL qu'on a fait juste avant //

            while($s=$select->fetch(PDO::FETCH_OBJ)){ // Quand $s est égale à $select alors on le transforme en objet //

         	   echo $s->nomproduit; // On affiche $s qui correspond à "nomProduit" //
         	   ?>
         	   <a href="?action=modify&amp;id=<?php echo $s->id; ?>">Modifier</a> <!-- Ici on relis le href à "modify" par la méthode "$_GET" pour faire en sorte que lorsque l'on appuie sur "Modifier" cela modifie l'élément désiré -->
               <a href="?action=delete&amp;id=<?php echo $s->id; ?>">Supprimer</a><br/><br/>  <!-- De même ici mais pour "delete" -->
               <?php

            }
        		
 	     }else if ($_GET['action']=='modify'){ // Sinon si "$_GET['action']" est égale à 'modify'... //
             

            $id=$_GET['id']; // Alors $id est égale à $_GET['id'] //

            $select = $bdd->prepare("SELECT * FROM panier WHERE id=$id"); // $select est égale à $bdd ou l'on prepare une requête SQL: On selectionne tous les éléments dans la table "panier" quand id est égale $id //
            $select->execute(); // On execute la requête SQL //

            $data = $select->fetch(PDO::FETCH_OBJ); // $data est égale à $select que l'on transforme en objet //

 		    ?>

            <!--Début du formulaire de modification de produit -->

            <form action="" method="POST">
  	        <h3>Nom du produit</h3><input value="<?php echo $data->nomproduit; ?>" type="text" name="nomProduit"/>
  	        <h3>Quantitée du produit</h3><input value="<?php echo $data->qteproduit; ?>" type="text" name="qteProduit"/>
  	        <h3>Prix du produit</h3><input value="<?php echo $data->prixproduit; ?>" type="text" name="prixProduit">
            <h3>Stock :</h3><input type="text" value="<?php echo $data->stock; ?>" name="stock"><br/><br/>
  	        <input type="submit" name="submit" value="Modifier" />
            </form>

            <!--Fin du formulaire de modification de produit -->

            <?php

            if (isset($_POST['submit'])){ // On vérifie que submit existe //

              $stock= $_POST['stock']; // $stock est égale à "$_POST" stock //
        	    $nomProduit=$_POST['nomProduit']; // $nomProduit est égale à "$_POST" nomProduit //
 	            $qteProduit=$_POST['qteProduit']; // Pareil pour ici, mais pour qteProduit //
 	            $prixProduit=$_POST['prixProduit']; // De même ici //

 	            $update = $bdd->prepare("UPDATE panier SET nomproduit='$nomProduit',qteproduit='$qteProduit',prixproduit='$prixProduit',stock='$stock' WHERE id=$id"); // Ici on prepare une requête SQL sur la base de donnée: On met à jour et on modifie les paramètres d'exécution de "nomproduit" ou on dit qu'il est égale à:'$nomProduit',qteproduit='$qteProduit',prixproduit='$prixProduit',stock='$stock' quand "id" est égale à "$id" //
 	            $update->execute(); // Ici on execute la requête SQL faite juste avant //

 	            header('Location: admin.php?action=modifyanddelete');

            } 
 		
 	    }else if($_GET['action']=='delete'){ // Sinon si $_GET['action'] est égale à delete... //

              $id=$_GET['id']; // Alors $id est égale à $_GET['id'] //
              $delete = $bdd->prepare("DELETE FROM panier WHERE id=$id"); // $delete est égale à $bdd ou l'on prepare une requête SQL: On supprime tous les éléments de la table "panier" quand id est égale à $id //
              $delete->execute();

 	    }else if($_GET['action']=='add_category'){ // Sinon si "$_GET['action']" est égale à add_category //

 	    	 if (isset($_POST['submit'])){ // On vérifie si "$_POST['submit']" existe //

 	    	 	$name = $_POST['name']; // $name est égale à "$_POST['name']" //

 	    	 	if ($name){ // Si $name existe... //

 	    	 		$insert = $bdd->prepare("INSERT INTO category VALUES('','$name')"); // On prepare une requête SQL: On insert dans la table "category" les valeurs suivantes: (('','$name') l'espace vide correspond à l'id qui est en auto_increment c'est pour cela que on laisse l'espace vide) //
                    $insert->execute(); // On execute la requête SQL //

 	    	 	}else{ // Sinon on affiche un message d'erreur //

                  echo "Veuillez remplir tous les champs.";

 	    	 	}

 	    	 }

             ?>

            <!-- Début du formulaire d'ajout de catégorie-->

             <form action="" method="POST">
             <h3><em>Nom de la catégorie:</em></h3><input type="text" name="name"/><br/><br/>
             <input type="submit" name="submit" value="Ajouter"/>
             </form>

            <!-- Fin du formulaire d'ajout de catégorie-->

             <?php



 	    }else if($_GET['action']=='modifyanddelete_category'){ // Sinon si "$_GET['action']" est égale à 'modifyanddelete_category'...//

             $select = $bdd->prepare("SELECT * FROM category"); // Alors $select est égale à $bdd ou l'on prepare une requête SQL: On selectionne tous les éléments de la table "category" // 
             $select->execute(); // On execute la requête SQL //

             while($s=$select->fetch(PDO::FETCH_OBJ)){ // Quand $s est égale à $select on le tranforme en objet //

         	   echo $s->name; // On affiche $s qui correspond à name //
         	   ?>
         	     <a href="?action=modify_category&amp;id=<?php echo $s->id; ?>">Modifier</a> <!-- Ici on relis le href à "modify_category" par la méthode "$_GET" pour faire en sorte que lorsque l'on appuie sur "Modifier" cela modifie l'élément désiré -->
               <a href="?action=delete_category&amp;id=<?php echo $s->id; ?>">Supprimer</a><br/><br/> <!-- De même ici mais pour supprimer une catégorie -->
               <?php

            }


 	    }else if($_GET['action']=='modify_category'){ // Sinon si "$_GET['action']" est égale à 'modify_category' ... //

            $id=$_GET['id']; // Alors $id est égale à "$_GET['id']" //

            $select = $bdd->prepare("SELECT * FROM category WHERE id=$id"); // $select est égale à $bdd ou l'on prepare une requête SQL: On selectionne tous les éléments de la table "category" quand id est égale à $id //
            $select->execute(); // On execute la requête SQL //

            $data = $select->fetch(PDO::FETCH_OBJ); // $data est égale à $select que l'on transforme en objet //

 		    ?>
 
            <!--Début du formulaire de modification de catégorie-->

            <form action="" method="POST">
  	        <h3><em>Nom du produit</em></h3><input value="<?php echo $data->name; ?>" type="text" name="nomProduit"/>
  	        <input type="submit" name="submit" value="Modifier" />
            </form>

            <!--Fin du formulaire de modification de catégorie-->

            <?php

            if (isset($_POST['submit'])){ // On vérifie si "$_POST['submit']" existe, s'il existe... //

        	    $nomProduit=$_POST['nomProduit']; // Alors $nomProduit est égale à "$_POST['nomProduit']" //

 	            $update = $bdd->prepare("UPDATE category SET name='$nomProduit' WHERE id=$id"); //  Ici on prepare une requête SQL sur la base de donnée: On met à jour et on modifie les paramètres d'exécution de "name" ou on dit qu'il est égale à:'$nomProduit' quand "id" est égale à "$id"  //
 	            $update->execute(); // On execute la requête SQL //

 	            header('Location: admin.php?action=modifyanddelete_category');

            }  

 	    }else if($_GET['action']=='delete_category'){ // Sinon si "$_GET['action']" est égale à 'delete_category'... //

 	    	     $id=$_GET['id']; // Alors $id est égale à "$_GET['id']" //
             $delete = $bdd->prepare("DELETE FROM category WHERE id=$id"); // $delete est égale à $bdd ou l'on prepare une requête SQL: On supprime tous les éléments de la table "category" quand id est égale à $id //
             $delete->execute(); // On execute la requête SQL //

             header('Location: admin.php?action=modifyanddelete_category');

 	    }else if($_GET['action']=='options'){ // Sinon si "$_GET['action']" est égale à 'options'... //
         
        ?>

        <!--Début du formulaire de modification d'options -->

        <h2><em>Frais de ports:</em></h2><br/>
        <h3><em>Options de poids</em></h3>

        <?php

        $select = $bdd->query("SELECT * FROM weight"); // $select est égale à $bdd ou l'on execute une requête SQL: On selectionne tous les éléments de la table "weight" //

        while ($s=$select->fetch(PDO::FETCH_OBJ)){ // Quand $s est égale $select alors on le transforme en objet //

        ?>

        <form action="" method="POST"> 
        <input type="text" name="weight" value="<?php echo $s->name;?>"/><a href="?action=modify_weight&amp;name=<?php echo $s->name; ?>"> Modifier</a>
        </form>



        <?php

        }

        $select = $bdd->query("SELECT tva FROM panier"); // $select est égale à $bdd ou l'on execute une requête SQL: On selectionne la colonne "tva" dans la table "panier" //

        $s = $select->fetch(PDO::FETCH_OBJ); // $s est égale $select que le transforme en objet //

        if (isset($_POST['submit2'])){ // On vérifie que "$_POST['submit2']" existe et si il existe... //

          $tva=$_POST['tva']; // Alors $tva est égale à "$_POST['tva']" //

          if ($tva){ // Si $tva existe... // 

             $update = $bdd->query("UPDATE panier SET tva=$tva"); // Alors $update est égale à $bdd ou l'on execute une requête SQL: On met à jour la table "panier" et on modifie les paramètres d'execution de "tva" qui devient égale à $tva... //

          }

        }

        ?>

        <h3>TVA :</h3>

        <form action="" method="POST">
        <input type="text" name="tva" value="<?php echo $s->tva;?>"/>
        <input type="submit" name="submit2" value="Modifier">
        </form> 

        <!--Fin du formulaire de modifications d'options-->

        <?php

      }else if($_GET['action']=='modify_weight'){ // Sinon si "$_GET['action']" est égale à 'modify_weight'... //

            $old_weight = $_GET['name']; // Alors $old_weight est égale à  "$_GET['name']" //
            $select = $bdd->query("SELECT * FROM weight WHERE name=$old_weight"); // $select est égale à $bdd ou l'on execute une requête SQL: On selectionne tous les éléments de la colonne "weight" quand name es tégale à $old_weight //
            $s = $select->fetch(PDO::FETCH_OBJ); // $s est égale à $select que l'on transforme en objet //

           if (isset($_POST['submit'])){ // On vérifie que "$_POST['submit']" si il existe... //

               $weight=$_POST['weight']; // Alors $weight est égale à "$_POST['weight']" //
               $price=$_POST['price']; // $price est égale à "$_POST['price']" //

               if ($weight&&$price){ // Si $weight && $price existe alors... //

                 $update = $bdd->query("UPDATE weight SET name='$weight', price='$price' WHERE name=$old_weight"); // $update est égale $bdd on execute une requête SQL: On met à jour la colonne "weight" et on modifie les paramètres d'execution de "name=$weight" et "price=$price" quand "name" est égale à $old_weight //


               }

           }

      ?>

        <!--Début du formulaire de modification de poids -->

        <h2><em>Frais de ports:</em></h2><br/> 
        <h3><em>Options de poids:</em></h3>

        <form action="" method="POST">
          <h3><em>Poids (plus de):</em></h3><input type="text" name="weight" value="<?php echo $_GET['name'];?>"/> 
          <h3><em>Correspond à:</em></h3><input type="text" name="price" value="<?php echo $s->price; ?>"/> €<br/><br/> 
          <input type="submit" name="submit" value="Modifier">
        </form>

        <!-- Fin du formulaire de modification de poids -->

      <?php

      }else{ // Sinon on affiche un message d'erreur //

              die('Une erreur est suvernue.');

 	    }

 	}else{

     

 	}

  }else{

    

  }
?>