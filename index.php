<?php include("header.php"); ?>

<?php require 'globals.php' ?>

<!-- Banner -->
<section id="banner">
  <div class="inner">
    <h2>Open de bloc de Grenoble</h2>
   <p><?php echo $GLOBALS['event-date-str'] ?></p>
    <ul class="actions">
      <li><a href="registration.php" class="button big scrolly">Inscription</a></li>
    </ul>
  </div>
</section>

<!-- One -->
<section id="one" class="wrapper style1">
  <div class="container">
    <header class="major">

      <h2>Un évènement convivial et pour tous les niveaux</h2>
      <p>
	Le club CAF Fontaine en montagne vous invite à la 3ème
	édition de l'Open de bloc de Grenoble : <br />
	une compétition ouverte aux catégories poussins, benjamins,
	minimes et cadets.
      </p>

    </header>
    <div class="slider">
      <span class="nav-previous"></span>
      <div class="viewer">
	<div class="reel">
	  <div class="slide">
	    <img src="images/slide01.jpg" alt="" />
	  </div>
	  <div class="slide">
	    <img src="images/slide02.jpg" alt="" />
	  </div>
	  <div class="slide">
	    <img src="images/slide03.jpg" alt="" />
	  </div>
	</div>
      </div>
      <span class="nav-next"></span>
    </div>
  </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
  <div class="container">
    <div class="row uniform">
      <div class="4u 6u(2) 12u$(3)">
	<section class="feature fa-map-marker">
	  <h3>Adresse</h3>
	  <p><a href="http://www.espacevertical.com/#ev3">Espace Vertical 3 à Grenoble.</a></p>
	</section>
      </div>
      <div class="4u 6u$(2) 12u$(3)">
	<section class="feature fa-calendar">
	  <h3>Date</h3>
	  <p>Dimanche 7 juin 2015. Consultez le <a href="program.php#program">programme</a>.</p>
	</section>
      </div>
      <div class="4u$ 6u(2) 12u$(3)">
	<section class="feature fa-users">
	  <h3>Catégories</h3>
	  <p>Poussins, Benjamins, Minimes, Cadets. <br /> Consultez le <a href="program.php#rules">règlement</a>.</p>
	</section>
      </div>
      <div class="4u 6u$(2) 12u$(3)">
	<section class="feature fa-sign-in">
	  <h3>Inscription</h3>
	  <p>Tarif unique de <?php echo $GLOBALS['registration-fee'] ?>€. <br /> <a href="registration.php">Inscription en ligne</a> jusqu'au <?php echo $GLOBALS['registration-close-date-str'] ?>.</p>
	</section>
      </div>
      <div class="4u 6u(2) 12u$(3)">
	<section class="feature fa-facebook">
	  <h3>Réseaux sociaux</h3>
	  <p>Rejoignez-nous sur Facebook.</p>
	</section>
      </div>
      <div class="4u$ 6u$(2) 12u$(3)">
	<section class="feature fa-envelope-o">
	  <h3>Contact</h3>
	  <p>Organisateur : CAF Fontaine, Fabien Viguier.</p>
	</section>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
