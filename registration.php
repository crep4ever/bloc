<?php include("header.php"); ?>

<?php require 'globals.php' ?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Enregistrement</h2>
  </header>

  <div class="container">
    <div class="row 150%">
      <div class="8u 12u$(2)">

	<!-- Content -->
	<section id="content">
          <?php include("registration-info.php"); ?>
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
		  <td><?php echo $GLOBALS['remaining-places-poussin-benjamin'] ?></td>
		</tr>
		<tr>
		  <td>Minimes / Cadets (F&amp;G)</td>
		  <td><?php echo $GLOBALS['remaining-places-minime-cadet'] ?></td>
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
