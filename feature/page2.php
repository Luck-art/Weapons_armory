<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="page2.css">
	<link href="https://fonts.googleapis.com/css?family=MedievalSharp&display=swap" rel="stylesheet">
</head>
<body>
	 <header>
	 	     <h1><img src="images/w.png">Weapons<br/>armory</h1>
     	    
     	      <nav>
     	      	   <a href="index.php"><p>Accueil</p></a>
     	      	   <a href="boutique.php"><p>Boutique</p></a>
     	      	   <a href="form.php"><p>Contact</p></a>
     	      	   <a href="promo.php"><p>Promotions</p></a>
                 <a href="register.php"><p>Register</p></a>
     	      </nav>
     	        <p>Panier<img src="icones/Caddie.png"></p>
	 </header>

         <aside>
            <nav>
                 <ul>
                     <li class="deroulant"><a href="#"><h1>Filtrer par catégorie</h1></a>
                         <ul class="sous">
                             <li><a href="#"><img src="icones/icone_h.png">Heaumes et casques</a></li>
                             <li><a href="#"><img src="icones/icone_a.png">Armures et tenues</a></li>
                             <li><a href="#"><img src="icones/icone_ac.png">Accessoires</a></li>
                             <li><a href="#"><img src="icones/icone_b.png">Boucliers</a></li>
                             <li><a href="#"><img src="icones/icone_e.png"> Epées et dagues</a></li>
                             <li><a href="#"><img src="icones/icone_l.png">Armes d'hasts</a></li>
                             <li><a href="#"><img src="icones/icone_arc.png">Archerie</a></li>
                             <li><a href="#"><img src="icones/icone_mous.png">Armes à feu</a></li>
                             <li class="axe"><a href="#"><img src="icones/icone_ha.png">Haches<br/>et<br/>fléaux d'armes</a></li>
                         </ul>
                     </li>
                 </ul>
            </nav>
         </aside>


         <main>
               <div class="yolo">

                        <div class="hache">
                             <h2>Hache de barbare Picte</h2>
                             <img src="images/haches.jpg" alt="Hache de barbare Picte" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>70€</h4>
                             
                        </div>

                        <div class="glaive">
                             <h2>Glaive de légionnaire romain</h2>
                             <img src="images/glaive.jpg" alt="Glaive de légionnaire romain" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>90€</h4>
                             
                        </div>

                </div>

                 <div class="yolo">

                        <div class="armor">
                             <h2>Ensemble d'armure de chevalier</h2>
                             <img src="images/armor.jpg" alt="Ensemble d'armure de chevalier" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>500€</h4>
                             
                        </div>

                        <div class="armor2">
                             <h2>Armure de plate reforgé</h2>
                             <img src="images/plate.jpg" alt="Armure de plate reforgé" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>60€</h4>
                        </div>

                </div>

                <div class="yolo">

                        <div class="bourguignon">
                             <h2>Casque bourguignon</h2>
                             <img src="images/bourguignon.jpg" alt="Casque bourguignon" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>200€</h4>
                             <s>300€</s>
                        </div>

                         <div class="chasse">
                             <h2>Lance de chasse</h2>
                             <img src="images/chasse.jpg" alt="Lance de chasse" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>70€</h4>
                             <s>100€</s>
                        </div>
                </div>

                <div class="yolo">

                        <div class="centurion">
                             <h2>Heaume de centurion romain</h2>
                             <img src="images/centurion.jpg" alt="Heaume de centurion romain" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>120€</h4>
                        </div>

                         <div class="decurion">
                             <h2>Heaume de décurion romain</h2>
                             <img src="images/decurion.jpg" alt="Heaume de décurion romain" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>100€</h4>
                        </div>

                </div>

                <div class="yolo">

                        <div class="dague">
                             <h2>Dague de fantassin</h2>
                             <img src="images/dague.jpg" alt="Dague de fantassin" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>80€</h4>
                        </div>

                        <div class="epee">
                             <h2>Claymore impérial</h2>
                             <img src="images/epee.jpg" alt="Gourde en cuir" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>50€</h4>
                             <s>70€</s>
                        </div>

                </div>

                <div class="yolo">

                     <div class="fleau">
                             <h2>Fléau d'arme à deux têtes</h2>
                             <img src="images/fleau.jpg" alt="Fléau d'arme à deux têtes" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>120€</h4>
                        </div>

                        
                     <div class="gourde">
                             <h2>Gourde d'excursion</h2>
                             <img src="images/gourde.jpg" alt="Gourde d'excursion" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>40€</h4>
                             
                        </div>
                </div>

                <div class="button_nav">
      
                  <a class="item_fleche"  href="boutique.php"><</a>
                  <a class="item_one" href="boutique.php">1</a>
                  <a class="item" href="page2.php">2</a>
                  <a class="item" href="page3.php">3</a>
                  <a class="item" href="page4.php">4</a>
                  <a class="item" href="page5.php">5</a>
                  <a class="item" href="page3.php">></a>

                 </div>

                 <button onclick="topFunction()" id="myBtn" title="Go to top">^</button> 

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

<script src="page2.js"></script>

</body>
</html>