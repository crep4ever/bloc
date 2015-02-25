<?php include("header.php"); ?>

<section id="main" class="wrapper style1">


  <div class="container">

    <!-- Content -->
    <section id="content">

      <p>
	L'inscription du participant <b><?php echo $firstname ?> <?php echo $lastname ?></b>
	a été réalisée avec succès.
      </p>

      <p>
	Une confirmation du paiement vous a été envoyée par email à l'adresse <b><?php echo $mail ?></b>.
      </p>

      <p>
	Nous vous donnons rendez-vous le <b>dimanche 7 juin</b>
	à <a href="access.html">Espace Vertical 3</a>. N'oubliez pas
	de vous munir :
	<ul>
	  <li>D'une pièce d'identité valide</li>
	  <li>De l'autorisation parentale écrite</li>
	</ul>
      </p>

      <p>
	<a href="index.php" class="button big">Retourner au site</a>
      </p>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
