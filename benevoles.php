<?php
$jqueryui = true;
include("header.php");
require 'database.php';
$db = new Database();
?>


<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Cher bénévole&nbsp;: c'est grâce à toi que cet évènement est possible&nbsp;!</h2>
    <p> La réussite de cette journée nécessite la mobilisation d'une cinquantaine de bénévoles.
      <br /> De courtes formations seront assurées, ainsi chacun pourra apporter sa pierre à l'édifice.
      <br /> Et évidemment, le repas sera offert&nbsp;!
    </p>
  </header>

  <div class="container">
    <?php include("benevoles-missions.inc.php"); ?>
    <p>Voir la <a href="list-benevoles.php" target="_blank">liste des bénévoles inscrits</a>.</p>
    <?php include("benevoles-form.inc.php"); ?>
  </div>
</section>

<?php include("footer.php"); ?>
