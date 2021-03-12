<?php
 try
 {
  $bdd = new PDO('mysql:host=localhost;port=3308;dbname=test','root','');
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
 }
 catch (Exeption $e)
 {
  die('Erreur :' . $e->getMessage());
 }
  $req = $bdd->prepare('INSERT INTO contact (nom,prenom,numero,commentaires) VALUES(?, ?, ?, ?)');
  $req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['numero'],$_POST['commentaires']));

  header('Location: form.php');
?>