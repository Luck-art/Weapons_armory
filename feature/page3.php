<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Weapons armory</title>
	<link rel="stylesheet" type="text/css" href="page3.css">
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

                     <div class="hallebarde">
                             <h2>Hallebarde de garde</h2>
                             <img src="images/hallebarde.jpg" alt="Hallebarde de garde" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>80€</h4>
                             <s>130€</s>
                        </div>

                        
                     <div class="guandao">
                             <h2>Guan Dao de Samouraï</h2>
                             <img src="images/guan_dao.jpg" alt="Guan Dao de Samouraï" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>120€</h4>
                             <s>190€</s>
                             
                        </div>
                </div>

                <div class="yolo">

                     <div class="arc">
                             <h2>Arc de guerre renforcé</h2>
                             <img src="images/arc.jpg" alt="Arc de guerre renforcé" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>90€</h4>
                        </div>

                        
                     <div class="arbalete">
                             <h2>Arbalète de sentinelle</h2>
                             <img src="images/arbalete.jpg" alt="Arbalète de sentinelle" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>100€</h4>
                             
                        </div>
                </div>

                <div class="yolo">

                     <div class="trident">
                             <h2>Trident athénien</h2>
                             <img src="images/trident.jpg" alt="Trident athénien" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>110€</h4>
                        </div>

                        
                     <div class="fronde">
                             <h2>Fronde de malfrat</h2>
                             <img src="images/fronde.jpg" alt="Fronde de malfrat" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>50€</h4>
                             
                        </div>
                </div>

                 <div class="yolo">

                     <div class="rapiere">
                             <h2>Rapière de style rennaissance</h2>
                             <img src="images/rapiere.jpg" alt="Rapière de style rennaissance" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>110€</h4>
                        </div>

                        
                     <div class="chope">
                             <h2>Chope sculptée en chêne</h2>
                             <img src="images/chope.jpg" alt="Chope sculptée en chêne" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>40€</h4>
                             
                        </div>
                </div>

                <div class="yolo">

                     <div class="messer">
                             <h2>Messer en acier</h2>
                             <img src="images/sabre2.jpg" alt="Messer en acier" class="two">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>110€</h4>
                     </div>

                      <div class="gun">
                             <h2>Pisolet à silex Napoléon</h2>
                             <img src="images/gun.jpg" alt="Pisolet à silex Napoléon" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>130€</h4>
                     </div> 
                   
                </div>

                 <div class="yolo">

                     <div class="mousquet">
                             <h2>Mousquet oriental</h2>
                             <img src="images/mousquet_2.jpg" alt="Mousquet oriental" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>160€</h4>
                     </div>

                      <div class="mousquet2">
                             <h2>Mousquet ornementalisé</h2>
                             <img src="images/mousquet.jpg" alt="Mousquet ornementalisé" class="one">
                             <br/>
                             <input type="button" id="button" value="Ajouter au panier">
                             <hr>
                             <h4>180€</h4>
                     </div> 
                   
                </div>


             <div class="button_nav">
      
                  <a class="item_fleche"  href="page2.php"><</a>
                  <a class="item_one" href="boutique.php">1</a>
                  <a class="item" href="page2.php">2</a>
                  <a class="item" href="page3.php">3</a>
                  <a class="item" href="page4.php">4</a>
                  <a class="item" href="page5.php">5</a>
                  <a class="item" href="page4.php">></a>

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

<script src="page3.js"></script>

</body>
</html>