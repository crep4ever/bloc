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
    <h2>Inscription</h2>
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
