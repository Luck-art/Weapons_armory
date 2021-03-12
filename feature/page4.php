<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="page4.css">
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

                     <div class="gants">
                             <h2>Gants de maille</h2>
                             <img src="images/gants_maille.jpg" alt="Gants de maille" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>80€</h4>
                        </div>

                        
                     <div class="bras">
                             <h2>Bras en plate de chevalier</h2>
                             <img src="images/bras.jpg" alt="Bras en plate de chevalier" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>100€</h4>                          
                        </div>

                </div>

                        <div class="yolo">

                     <div class="lion">
                             <h2>Haubert de bataille à insigne de lion</h2>
                             <img src="images/lion.jpg" alt="Haubert de bataille à insigne de lion" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>130€</h4>
                        </div>

                        
                     <div class="tunique">
                             <h2>Ensemble de tuniques</h2>
                             <img src="images/tunique.jpg" alt="Ensemble de tuniques" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>250€</h4>                          
                        </div>

                </div>

                <div class="yolo">

                     <div class="bouclier">
                             <h2>Bouclier de sentinelle en bois</h2>
                             <img src="images/bouclier.jpg" alt="Bouclier de sentinelle en bois" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>95€</h4>
                        </div>

                        
                     <div class="dague2">
                             <h2>Long poignard Celtic</h2>
                             <img src="images/dague_2.jpg" alt="Long poignard Celtic" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>110€</h4>                          
                        </div>

                </div>
               
                  <div class="yolo">

                     <div class="scutum">
                             <h2>Scutum de légionnaire romain</h2>
                             <img src="images/scutum_4.jpg" alt="Scutum de légionnaire romain" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>115€</h4>
                        </div>

                        
                     <div class="sabre">
                             <h2>Sabre oriental</h2>
                             <img src="images/sabre_4.jpg" alt="Sabre oriental" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>85€</h4>                          
                        </div>

                </div>

                     <div class="yolo">

                     <div class="shield">
                             <h2>Targe de viking</h2>
                             <img src="images/shield_2.jpg" alt="Targe de viking" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>75€</h4>
                        </div>

                        
                     <div class="etoile">
                             <h2>Etoile du matin décorée</h2>
                             <img src="images/etoile_4.jpg" alt="Etoile du matin décorée" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>115€</h4>                          
                        </div>

                </div>

                      <div class="yolo">

                     <div class="dague">
                             <h2>Dague de noble</h2>
                             <img src="images/dague_5.jpg" alt="Dague de noble" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>95€</h4>
                        </div>

                        
                     <div class="heaume">
                             <h2>Heaume de légionnaire romain</h2>
                             <img src="images/heaume_4.jpg" alt="Heaume de légionnaire romain" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>115€</h4>                          
                        </div>

                </div>

                 <div class="button_nav">
      
                  <a class="item_fleche" href="page3.php"><</a>
                  <a class="item_one" href="boutique.php">1</a>
                  <a class="item" href="page2.php">2</a>
                  <a class="item" href="page3.php">3</a>
                  <a class="item" href="page4.php">4</a>
                  <a class="item" href="page5.php">5</a>
                  <a class="item" href="page5.php">></a>

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

<script src="page4.js"></script>

</body>
</html>