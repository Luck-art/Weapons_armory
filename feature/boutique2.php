<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="boutique.css">
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
                 <a href="admin/index.php"><p>Admin</p></a>
     	      </nav>
     	        <a href="panier.php"><p class="panier">Panier<img src="icones/panier.png"></p></a>
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
            <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="images/heaume.jpg" class="awesome">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="images/sabre.jpg" class="awesome">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="images/sabre_2.jpg" class="awesome">
    <div class="text">Caption Three</div>
  </div>

   <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="images/norv.jpg" class="awesome">
    <div class="text">Caption Four</div>
  </div>

   <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="images/the_sword.jpg" class="awesome">
    <div class="text">Caption Five</div>
  </div>

   <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="images/etoile.jpg" class="awesome">
    <div class="text">Caption Six</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>

</div>

  <div class="yolo">

    <div class="piege">
                 <h2>Piège de chasse</h2>
                 <img src="images/piege.jpg" alt="Piège de chasse" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>50€</h4>
    </div>

     <div class="corne">
                 <h2>Corne de signal viking</h2>
                 <img src="images/corne.jpg" alt="Corne de signal viking" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>60€</h4>
      </div>

  </div>

 <div class="yolo">

     <div class="viking">
                 <h2>Casque de viking</h2>
                 <img src="images/viking.jpg" alt="casque viking" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>60€</h4>
                 <s>90€</s>
                </div>

      <div class="jap">
                 <h2>Lance japonaise</h2>
                 <img src="images/lance.jpg" alt="lance japonaise" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>80€</h4>
                 <s>120€</s>
                </div>

  </div>


  <div class="yolo">


        <div class="templier">
                 <h2>Ecu de templier</h2>
                 <img src="images/shield.jpg" alt="Ecu de templier" class="one">
                 <br/>
                 <input type="button" id="button" value="Ajouter au panier">
                 <hr>
                 <h4>90€</h4>
                 <s>145€</s>
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


<div class="button_nav">
      
  <a class="item_fleche"><</a>
  <a class="item_one" href="boutique.php">1</a>
  <a class="item" href="page2.php">2</a>
  <a class="item" href="page3.php">3</a>
  <a class="item" href="page4.php">4</a>
  <a class="item" href="page5.php">5</a>
  <a class="item" href="page2.php">></a>

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

    

<script src="boutique.js"></script>

 </body>
 </html>