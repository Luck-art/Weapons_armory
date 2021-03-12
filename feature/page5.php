<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="page5.css">
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

     <div class="fauchon">
                 <h2>Jambières de fer</h2>
                 <img src="images/jambieres.jpg" alt="Jambières de fer" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>170€</h4>
                </div>

      <div class="botte">
                 <h2>Bottes de fer</h2>
                 <img src="images/botte.jpg" alt="bottes de fer" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>110€</h4>
                </div>

  </div>

            <div class="yolo">

     <div class="guisarme">
                 <h2>Guisarme bourguignone</h2>
                 <img src="images/guisarme.jpg" alt="Guisarme bourguignone" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>150€</h4>
                </div>

      <div class="arbalete">
                 <h2>Arbalète en chêne à levier</h2>
                 <img src="images/arbalete_2.jpg" alt="Arbalète en chêne à levier" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>130€</h4>
                </div>

  </div>

              <div class="yolo">

     <div class="fauchon">
                 <h2>Fauchon de guerre</h2>
                 <img src="images/fauchon.jpg" alt="Fauchon de guerre" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>120€</h4>
                </div>

      <div class="armor">
                 <h2>Armure ornementalisée</h2>
                 <img src="images/the_armor.jpg" alt="Arbalète en chêne à levier" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>1300€</h4>
                </div>

  </div>

  <div class="yolo">

     <div class="robe">
                 <h2>Robe de la haute cour</h2>
                 <img src="images/robe.jpg" alt="Robe de la haute cour" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>140€</h4>
                </div>

      <div class="robe2">
                 <h2>Robe de noble</h2>
                 <img src="images/robe_2.jpg" alt="Robe de noble" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>140€</h4>
                </div>

  </div>

  <div class="yolo">

     <div class="calice">
                 <h2>Calice de célébration</h2>
                 <img src="images/calice.jpg" alt="Calice de célébration" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>115€</h4>
                </div>

      <div class="masse">
                 <h2>Masse d'arme de guerre</h2>
                 <img src="images/masse.jpg" alt="Masse d'arme de guerre" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>130€</h4>
                </div>

  </div>

   <div class="yolo">

     <div class="hache">
                 <h2>Double hache de mélée</h2>
                 <img src="images/hache.jpg" alt="Double hache de mélée" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>135€</h4>
                </div>

      <div class="robe3">
                 <h2>Robe de haute distinction</h2>
                 <img src="images/robe_3.jpg" alt="Robe de haute distinction" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>180€</h4>
                </div>

  </div>
  

  <div class="button_nav">
      
  <a class="item"  href="page4.php"><</a>
  <a class="item_one" href="boutique.php">1</a>
  <a class="item" href="page2.php">2</a>
  <a class="item" href="page3.php">3</a>
  <a class="item" href="page4.php">4</a>
  <a class="item" href="page5.php">5</a>
  <a class="item_fleche">></a>

</div>
         
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

    <script src="page5.js"></script>

</body>
</html>