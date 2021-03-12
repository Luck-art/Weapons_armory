 <link rel="stylesheet" type="text/css" href="css/sidebar.css">
 <link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
 <div class="sidebar">
 <h4>Derniers Articles:</h4>

<?php

    $select = $bdd->prepare("SELECT * FROM panier ORDER BY id DESC LIMIT 0,2");
    $select->execute();

    while ($s=$select->fetch(PDO::FETCH_OBJ)){

    ?>

        <img src="admin/img/<?php echo $s->nomproduit;?>.jpg"/>
    	<h2><?php echo $s->nomproduit;?></h2>
        <h5><?php echo $s->qteproduit;?></h5>
        <h4><?php echo $s->prixproduit;?>€</h4>
        <br/><br/>
       
    <?php

 

    }

?>
</div>

