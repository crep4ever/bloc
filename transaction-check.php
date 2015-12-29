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
    Vous vous apprêtez à finaliser l'inscription des participants suivants :
  </p>

  <?php
  // Get list of this session's registered candidates
  $db->query("SELECT * FROM bloc_2016 WHERE session = '" . session_id() . "'");
  $rows = $db->resultset();
  ?>

  <div class="candidates-summary">

    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Prénom</th>";
    echo "<th>Catégorie</th>";
    echo "</tr>";

    foreach ($rows as $row)
    {
      $sex       = ($row['sexe'] == 'M') ? 'Garçon' : 'Fille';
      $lastname  = strtoupper($row['nom']);
      $firstname = ucwords(strtolower($row['prenom']));
      $category  = ucfirst($row['categorie']) . " " . $sex;

      echo "<tr>";
      echo "<td>" . $lastname  . "</td>";
      echo "<td>" . $firstname . "</td>";
      echo "<td>" . $category  . "</td>";
      echo "</tr>";
    }

    echo "</table>";
    ?>

  <p>
    Une fois le paiement effectué, une confirmation vous sera
    envoyée par email à l'adresse
    <b><?php echo $_SESSION['mail']?></b>.
  </p>

  <a href="<?= $_SESSION['paypal']; ?>" class="button big">Paiement</a>

<?php } ?>

<?php if (!$contact_ok) { ?>
  <p>
    Merci de <a href="registration.php">retourner au formulaire</a> afin de corriger ces informations.
  </p>
<?php } ?>
