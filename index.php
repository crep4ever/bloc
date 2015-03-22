<?php include("header.php"); ?>

<?php require 'globals.php' ?>

<!-- Banner -->
<section id="banner">
  <div class="inner">
    <h2>Open de bloc de Grenoble</h2>
   <p><?php echo $GLOBALS['event-date-str'] ?></p>
    <ul class="actions">
      <li><a href="#cta" class="button big scrolly">Inscription</a></li>
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
	édition de l'Open de bloc de Grenoble. <br />
	Une compétition d'escalade ludique pour les 10&nbsp;/&nbsp;17 ans où chacun pourra s'exprimer pleinement.
      </p>

    </header>
    <div class="slider">
      <span class="nav-previous"></span>
      <div class="viewer">
	<div class="reel">
	  <div class="slide">
	    <img src="images/slide01.jpg" alt="Open de Bloc 2013" />
	  </div>
	  <div class="slide">
	    <img src="images/slide02.jpg" alt="Open de Bloc 2013" />
	  </div>
	  <div class="slide">
	    <img src="images/slide03.jpg" alt="Open de Bloc 2013" />
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
	  <p><a href="access.php">Espace Vertical 3 à Grenoble.</a></p>
	</section>
      </div>
      <div class="4u 6u$(2) 12u$(3)">
	<section class="feature fa-calendar">
	  <h3>Date</h3>
	  <p><?php echo $GLOBALS['event-date-str'] ?></p>
	</section>
      </div>
      <div class="4u$ 6u(2) 12u$(3)">
	<section class="feature fa-users">
	  <h3>Participants</h3>
	  <p>Compétition ouverte aux catégories poussins, benjamins, minimes et cadets.</p>
	</section>
      </div>
      <div class="4u 6u$(2) 12u$(3)">
	<section class="feature fa-sign-in">
	  <h3>Inscription</h3>
	  <p><a href="registration.php">Inscriptions en ligne</a>
	  jusqu'au <?php echo $GLOBALS['registration-close-date-str']
	  ?> au tarif unique de <?php echo $GLOBALS['registration-fee'] ?>€.</p>
	</section>
      </div>
      <div class="4u 6u(2) 12u$(3)">
	<section class="feature fa-facebook">
	  <h3>Réseaux sociaux</h3>
	  <p>Rejoignez notre page Facebook.</p>
	</section>
      </div>
      <div class="4u$ 6u$(2) 12u$(3)">
	<section class="feature fa-envelope-o">
	  <h3>Contact</h3>
	  <p><a href="mailto:opendebloc.grenoble@gmail.com">opendebloc.grenoble@gmail.com</a></p>
	</section>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta" class="wrapper style3">
  <ul class="actions">
    <li><a href="registration.php" class="button big">Prenez votre place !</a></li>
  </ul>
</section>

<?php include("footer.php"); ?>
