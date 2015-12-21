<?php if (empty($_SESSION['mail'])) { ?>
  <section class="feature fa-exclamation-triangle">
    <h3>Attention</h3>
    <p>
      Vous devez renseigner un email de contact valide.
    </p>
  </section>
<?php } ?>

<?php if (empty($_SESSION['tel']) || strlen($_SESSION['tel']) != 10) { ?>
  <section class="feature fa-exclamation-triangle">
    <h3>Attention</h3>
    <p>
      Vous devez renseigner un numéro de téléphone de contact valide.
    </p>
  </section>
<?php } ?>


<?php if (!$_SESSION['conditions']) { ?>
  <section class="feature fa-exclamation-triangle">
    <h3>Attention</h3>
    <p>
      Vous devez accepter le <a href="program.php#rules">règlement de la compétition</a> pour valider votre inscription.
    </p>
  </section>
<?php } ?>

<?php
$contact_ok =
!empty($_SESSION['mail']) &&
!empty($_SESSION['tel']) && strlen($_SESSION['tel']) == 10 &&
$_SESSION['conditions'];
?>

<?php if ($contact_ok) { ?>
  <p>
    Vous vous apprêtez à finaliser l'inscription des participants.
  </p>

  <p>
    Une fois le paiement effectué, une confirmation vous sera
    envoyée par email à l'adresse
    <b><?php echo $_SESSION['mail']?></b>.
  </p>

  <p style="text-align: center">
    <a href="<?= $_SESSION['paypal']; ?>" class="button big">Paiement</a>
  </p>

<?php } ?>

<?php if (!$contact_ok) { ?>
  <p>
    Merci de <a href="registration.php">retourner au formulaire</a> afin de corriger ces informations.
  </p>
<?php } ?>
