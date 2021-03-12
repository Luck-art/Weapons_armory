<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="css/promo.css">
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>
	 <header>
	 	     <h1><img src="images/w.png">Weapons<br/>armory</h1>
     	    
     	      <nav>
     	      	   <a href="index.php"><p>Accueil</p></a>
     	      	   <a href="boutique.php"><p>Boutique</p></a>
     	      	   <a href="form.php"><p>Contact</p></a>
                   <a href="register.php"><p>Register</p></a>
                   <a href="admin/co_admin.php"><p>Administration</p></a>
     	      </nav>
     	        <p>Panier<img src="icones/Caddie.png"></p>
	 </header>

      <main>
          <h1>Articles en promotions:</h1>

            <div class="yolo">
                
                <div class="claymore">
                 <h2>Claymore Impériale</h2>
                 <img src="images/epee.jpg" alt="claymore" id="claymore" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>50€</h4>
                 <s>70€</s>
                
                </div>

                <div class="viking">
                 <h2>Casque de viking</h2>
                 <img src="images/viking.jpg" id="casquev" alt="casque viking" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>60€</h4>
                 <s>90€</s>
                 <?php
                   
                 ?>
                </div>

                <div class="jap">
                 <h2>Lance japonaise</h2>
                 <img src="images/lance.jpg" id="lance" alt="lance japonaise" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>80€</h4>
                 <s>120€</s>
                 <?php
                  
                 ?>
                </div>
                 
                

            </div>

            <div class="yolo">


            <div class="bourguignon">
                 <h2>Casque  Bourguignon</h2>
                 <img src="images/bourguignon.jpg" alt="casque bourguignon" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>200€</h4>
                 <s>300€</s>
                 <?php
                  
                 ?>
                </div>

            <div class="hallebarde">
                 <h2>Hallebarde de garde</h2>
                 <img src="images/hallebarde.jpg" alt="hallebarde de garde" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>80€</h4>
                 <s>130€</s>
                 <?php
                   
                 ?>
                </div>

            <div class="chasse">
                 <h2>Lance de chasse</h2>
                 <img src="images/chasse.jpg" alt="Lance de chasse" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>70€</h4>
                 <s>100€</s>
                 <?php
                  
                 ?>
                </div>
                 
                 
                 
            </div>

            <div class="yolo">



            <div class="guan_dao">
                 <h2>Guan Dao de Samouraï</h2>
                 <img src="images/guan_dao.jpg" alt="Guan Dao de Samouraï" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>120€</h4>
                 <s>190€</s>
                 <?php
                   
                 ?>
                </div>

           <div class="templier">
                 <h2>Ecu de templier</h2>
                 <img src="images/shield.jpg" alt="Ecu de templier" class="one">
                 <br/>
                 <a href="panier2.php?action=ajout&amp;l=LIBELLEPRODUIT&amp;q=QUANTITEPRODUIT&amp;p=PRIXPRODUIT" onclick="window.open(this.href, '', 
                'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;"><input type="button" id="button" value="Ajouter au panier"></a>
                 <hr>
                 <h4>90€</h4>
                 <s>145€</s>
                 <?php
                   
                 ?>
                </div> 

           <div class="etoile">
                 <h2>Etoile du matin</h2>
                 <img src="images/etoile_matin.jpg" alt="Etoile du matin" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>40€</h4>
                 <s>80€</s>

                </div>

            </div>
      </main>


          <footer>
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
     
</body>
</html>