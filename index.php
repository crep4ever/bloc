<?php include("header.php"); ?>

<?php require 'globals.php' ?>

<!-- Banner -->
<section id="banner">
  <div class="inner right">

    <h2>Open de bloc</h2>
    <p><b><?php echo ucwords($GLOBALS['event-date-str']) ?> à Grenoble</b><br />
      <span><a href="access.php">Espace Vertical 3</a></span></p>
      <ul class="actions">
        <!--<li><a href="registration.php" class="button big scrolly" >S'inscrire</a></li>-->
        <li><a href="program.php" class="button big scrolly" >Plus d'infos</a></li>
        <!--<li><a href="media.php" class="button big scrolly" >Photos et Résultats</a></li>-->
      </ul>

      <div class="quick-icons">
        <a href="https://www.facebook.com/Drac-Vercors-Escalade-160141077367724/?fref=ts" rel="nofollow">
          <i class="fa fa-facebook fa-2x"></i>
        </a>
        <a href="contact.php">
          <i class="fa fa-envelope-o fa-2x"></i>
        </a>
    </div>

  </div>
  <div class="clear">&nbsp;</div>

  </section>

  <!-- One -->
  <section id="one" class="wrapper style1">
    <div class="container">
      <header class="major">

        <h2>Un évènement convivial et pour tous les niveaux</h2>
        <p>
          Le club Drac Vercors Escalade organise avec le soutien de la ville
          de Fontaine la 5<sup>ème</sup> édition de l'Open de Bloc.<br />
          Une compétition d'escalade ludique pour les 8-15 ans ouverte aux Microbes, Poussins, Benjamins et Minimes.
        </p>

      </header>

      <div class="slider">
        <span class="nav-previous"></span>
        <div class="viewer">
          <div class="reel">
            <div class="slide">
              <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="images/slide01.jpg" alt="Open de Bloc 2015 Photo 01" />
            </div>
            <div class="slide">
              <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="images/slide02.jpg" alt="Open de Bloc 2015 Photo 02" />
            </div>
            <div class="slide">
              <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="images/slide03.jpg" alt="Open de Bloc 2015 Photo 03" />
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
          <a href="access.php">
            <section class="feature fa-map-marker">
              <h3>Lieu</h3>
              <p>Espace Vertical 3 à Grenoble.</p>
            </section>
          </a>
        </div>
        <div class="4u 6u$(2) 12u$(3)">
          <section class="feature fa-calendar">
            <h3>Date</h3>
            <p><?php echo ucwords($GLOBALS['event-date-str']) ?></p>
          </section>
        </div>
        <div class="4u$ 6u(2) 12u$(3)">
          <section class="feature fa-users">
            <h3>Participants</h3>
            <p>Microbes, Poussins, Benjamins, Minimes. <br />FFCAM, FFME, UNSS.</p>
          </section>
        </div>
        <div class="4u 6u$(2) 12u$(3)">
          <a href="registration.php">
            <section class="feature fa-sign-in">
              <h3>Inscription</h3>
              <p>Inscriptions en ligne
                jusqu'au <?php echo $GLOBALS['registration-close-date-str']
                ?> au tarif unique de <?php echo $GLOBALS['registration-fee'] ?>€.</p>
              </section>
            </a>
          </div>
          <div class="4u 6u(2) 12u$(3)">
            <a href="https://www.facebook.com/Drac-Vercors-Escalade-160141077367724/?fref=ts" rel="nofollow">
              <section class="feature fa-facebook">
                <h3>Réseaux sociaux</h3>
                <p>Rejoignez notre page Facebook.</p>
              </section>
            </a>
          </div>
          <div class="4u$ 6u$(2) 12u$(3)">
            <a href="mailto:openblocgrenoble@gmail.com">
              <section class="feature fa-envelope-o">
                <h3>Contact</h3>
                <p>openblocgrenoble@gmail.com</p>
              </section>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style3">
      <ul class="actions">
        <li><a href="media.php" class="button big">Voir les souvenirs des éditions précédentes</a></li>
      </ul>
    </section>

    <?php include("footer.php"); ?>
