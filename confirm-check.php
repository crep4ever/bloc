<?php if ($_SESSION['category'] == 'invalid') { ?>
  <section class="feature fa-exclamation-triangle">
    <h3>Attention</h3>
    <p>
      Impossible de déterminer la catégorie du participant à partir de sa date de naissance.<br />
      Merci de <a href="registration.php">retourner au formulaire</a> afin de corriger ces informations.
    </p>
  </section>
<?php } ?>

<?php if (!$_SESSION['conditions']) { ?>
  <section class="feature fa-exclamation-triangle">
    <h3>Attention</h3>
    <p>
      Vous devez accepter le <a href="program.php#rules">règlement de la compétition</a> pour valider votre inscription.<br />
      Merci de <a href="registration.php">retourner au formulaire</a> afin de corriger ces informations.
    </p>
  </section>
<?php } ?>

<?php 
  $ok = $_SESSION['category'] != 'invalid' && $_SESSION['conditions'];
?>

<?php if ($ok) { ?>
      <p>
	Vous vous apprêtez à finaliser l'inscription du participant 
	<b><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></b>.
      </p>

      <p>
	Une fois le paiement effectué, une confirmation vous sera
	envoyée par email à l'adresse
	<b><?php echo $_SESSION['mail']?></b>
      </p>

      <p>
	Merci de bien vérifier les informations saisies avant de
	procéder au paiement. En cas d'informations incomplètes ou
	erronées, vous pouvez <a href="registration.php">retourner au formulaire d'inscription</a>
	pour les modifier.
      </p>

      <table>

	<tr>
	  <td>Nom</td>
	  <td><?php echo $_SESSION['lastname'] ?></td>
	</tr>

	<tr>
	  <td>Prénom</td>
	  <td><?php echo $_SESSION['firstname'] ?></td>
	</tr>

	<tr>
	  <td>Date de naissance</td>
	  <td><?php echo $_SESSION['birthday'] ?></td>
	</tr>

	<tr>
	  <td>Catégorie</td>
	  <td><?php echo $_SESSION['category'] . ' ' . $_SESSION['sex_str'] ?></td>
	</tr>

	<tr>
	  <td>Licence</td>
	  <td><?php echo $_SESSION['licenceType'] . ' ' . $_SESSION['licenceNumber'] ?></td>
	</tr>

	<tr>
	  <td>Club</td>
	  <td><?php echo $_SESSION['club'] ?></td>
	</tr>

	<tr>
	  <td>Niveau</td>
	  <td><?php echo $_SESSION['experience'] ?></td>
	</tr>

	<tr>
	  <td>Commentaire</td>
	  <td><?php echo $_SESSION['comment'] ?></td>
	</tr>

	<tr>
	  <td>Mail</td>
	  <td><?php echo $_SESSION['mail'] ?></td>
	</tr>

	<tr>
	  <td>Téléphone</td>
	  <td><?php echo $_SESSION['tel'] ?></td>
	</tr>

      </table>

      <p>
	<a href="<?= $_SESSION['paypal']; ?>" class="button big">Paiement</a>
      </p
<?php } ?>

