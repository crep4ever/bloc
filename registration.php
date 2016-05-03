<?php
ob_start();
session_start();

require 'error-handler.php';
set_error_handler("handleError");

require 'database.php';
$db = new Database();

require 'globals.php';
?>

<?php include("header.php"); ?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Inscriptions</h2>
    <!-- CHECK LIST -->
    <div class="checklist">
      <ul class="fa-ul">
        <li><i class="fa-li fa-2x fa fa-users"></i>
          La compétition concerne uniquement les grimpeurs licenciés FFCAM, FFME ou UNSS
          des catégories Microbe, Poussin, Benjamin et Minime nés entre le 01/01/2001 et le 31/12/2008.
        </li>
        <li><i class="fa-li fa-2x fa fa-eur"></i>
          Les frais d'inscription sont de <?php echo $GLOBALS['registration-fee'] ?>€ par participant.
        </li>
        <li><i class="fa-li fa-2x fa fa-question-circle"></i>
          Avez-vous bien lu <a href="program.php#rules">les règles du jeu</a>
          avant de procéder à l'inscription&nbsp;?
        </li>
        <li><i class="fa-li fa-2x fa fa-sign-in"></i>
          Avez-vous considéré de <a href="benevoles.php">rejoindre notre équipe de bénévoles</a>&nbsp;?
        </li>
      </ul>
    </div>

  </header>

  <div class="container">
    <div class="row 150%">
      <div class="4u 12u$(2)">
        <?php include("registration-summary.inc.php"); ?>
      </div>

      <div class="8u 12u$(2)">
        <section id="content">
          <?php include("registration-info.inc.php"); ?>
          <?php if ($displayForm) include("registration-content.inc.php"); ?>
        </section>
      </div>


    </div>
  </div>
</section>

<?php include("footer.php"); ?>
