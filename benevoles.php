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
    <nav class="subnav">
      <ul>
        <li><a href="#description">Description des missions</a></li>
        <li><a href="#enregistrement">Se positionner</a></li>
      </ul>
    </nav>

    <hr />
    <?php include("benevoles-missions.inc.php"); ?>
    <hr />
    <p>Voir la <a href="list-benevoles.php">liste des bénévoles inscrits</a>.</p>
    <hr />
    <?php include("benevoles-form.inc.php"); ?>
    <hr />
  </div>
</section>

<?php include("footer.php"); ?>
