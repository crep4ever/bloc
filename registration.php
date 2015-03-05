<?php include("header.php"); ?>

<?php require 'globals.php' ?>

<?php 
// Check date validity
if (strtotime('now') < $GLOBALS['registration-open-date']) // too soon
{
$info = $info . <<< MSG
  <section class="feature feature fa-info-circle">
    <h3>Les inscriptions ne sont pas encore ouvertes</h3>
    <p>
      Merci de revenir plus tard.
    </p>
  </section>
MSG;
}
else if (strtotime('now') > $GLOBALS['registration-close-date']) // too late
{
$info = $info . <<< MSG
  <section class="feature feature fa-info-circle">
    <h3>Les inscriptions sont maintenant fermées</h3>
    <p>
      Vous pouvez néanmoins <a href="contact.php">nous contacter</a> pour une
      inscription sur liste d'attente.
    </p>
  </section>
MSG;
}
else
{
// Check available places from already registered candidates
require 'database.php';
$db = new Database();

$db->query("SELECT * FROM bloc_participants WHERE (categorie = :cat1 OR categorie = :cat2) AND payer_id IS NOT NULL");

$db->bind(':cat1', 'poussin');
$db->bind(':cat2', 'benjamin');
$db->resultset();
$remainingPlacesPB = max(0, $GLOBALS['available-places'] - $db->rowCount());

$db->bind(':cat1', 'minime');
$db->bind(':cat2', 'cadet');
$db->resultset();
$remainingPlacesMC = max(0, $GLOBALS['available-places'] - $db->rowCount());

if ($remainingPlacesPB == 0)
{
    $info = $info . <<< MSG
      <section class="feature fa-exclamation-triangle">
	<h3>Attention</h3>
	<p>
	  Les inscriptions sont closes pour les catégories <b>Poussin et Benjamin</b>.<br />
	  Vous pouvez néanmoins <a href="contact.php">nous contacter</a> pour une
	  inscription sur liste d'attente.
	</p>
      </section>
MSG;
}

if ($remainingPlacesMC == 0)
{
  $info = $info . <<< MSG
    <section class="feature fa-exclamation-triangle">
      <h3>Attention</h3>
      <p>
	Les inscriptions sont closes pour les catégories <b>Minime et Cadet</b>.<br />
	Vous pouvez néanmoins <a href="contact.php">nous contacter</a> pour une
	inscription sur liste d'attente.
      </p>
    </section>
MSG;
}
}

$displayForm = (strtotime('now') >= $GLOBALS['registration-open-date']) && 
	       (strtotime('now') <= $GLOBALS['registration-close-date']);
?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Enregistrement</h2>
  </header>

  <div class="container">
    <div class="row 150%">
      <div class="8u 12u$(2)">

	<!-- Content -->
	<section id="content">
	  <?php echo $info ?>
	  <?php if ($displayForm) include("registration-form.php"); ?>
	</section>

      </div>
      <div class="4u 12u$(2)">

	<!-- Sidebar -->
	<section id="sidebar">

	  <section>
	    <h3>Inscriptions en ligne</h3>
	    <ul>
	    <li>Ouverture : <?php echo $GLOBALS['registration-open-date-str'] ?></li>
	    <li>Fermeture : <?php echo $GLOBALS['registration-close-date-str'] ?></li>
	    </ul>

	    <hr />

	    <h3>Places restantes disponibles</h3>

	    <p>Les inscriptions sont limitées à <?php echo
	    $GLOBALS['available-places']; ?> participants par
	    demi-journées.</p>
	    <footer>
	      <table class="actions">
		<tr>
		  <th>Catégorie</th>
		  <th>Places restantes</th>
		</tr>
		<tr>
		  <td>Poussins / Benjamins (F&amp;G)</td>
		  <td><?php echo $remainingPlacesPB ?></td>
		</tr>
		<tr>
		  <td>Minimes / Cadets (F&amp;G)</td>
		  <td><?php echo $remainingPlacesMC ?></td>
		</tr>
	      </table>
	    </footer>
	  </section>

	  <hr />     

	</section>

      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>
