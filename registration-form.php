<!-- CHECK LIST -->
  <div class="checklist">
    <ul class="fa-ul">
      <li><i class="fa-li fa-2x fa fa-users"></i>
        La compétition concerne uniquement les catégories Poussins, Benjamins,
        Minimes et Cadets, licenciés FFCAM, FFME ou UNSS.
      </li>
      <li><i class="fa-li fa-2x fa fa-eur"></i>
        Les frais d'inscription sont de <?php echo $GLOBALS['registration-fee'] ?>€ par participant.
      </li>
      <li><i class="fa-li fa-2x fa fa-question-circle"></i>
        Avez-vous bien lu <a href="program.php" target="_blank">les règles du jeu</a>
        avant de procéder à l'inscription&nbsp;?
      </li>
    </ul>
</div>

<!-- CANDIDATES SUMMARY -->
<?php
// Get list of this session's registered candidates
$db->query("SELECT * FROM bloc_participants WHERE session = '" . session_id() . "'");
$rows = $db->resultset();
?>

<div class="candidates-summary">

  <!-- Text -->
  <?php
  echo "<table>";
  echo "<tr>";
  echo "<th>Nom</th>";
  echo "<th>Prénom</th>";
  echo "<th>Catégorie</th>";
  echo "<th colspan=\"2\">Club</th>";
  echo "</tr>";

  foreach ($rows as $row)
  {
    $sex       = ($row['sexe'] == 'M') ? 'Garçon' : 'Fille';
    $lastname  = strtoupper($row['nom']);
    $firstname = ucwords(strtolower($row['prenom']));
    $category  = ucfirst($row['categorie']) . " " . $sex;
    $club      = strtoupper($row['club']);
    $url_params = "?lastname=" . $row['nom']
     . "&firstname=" . $row['prenom']
     . "&category=" . $row['categorie']
     . "&club=" . $row['club'];

    echo "<tr>";
    echo "<td>" . $lastname  . "</td>";
    echo "<td>" . $firstname . "</td>";
    echo "<td>" . $category  . "</td>";
    echo "<td>" . $club      . "</td>";
    echo "<td><a href=\"candidate-remove.php" . $url_params . "\"><div class=\"fa fa-times\"></div></a></td>";
    echo "</tr>";
  }

  echo "</table>";

  echo "<p style=\"text-align: right\">";
  echo "<b>" . count($rows) . " participant(s) : " . count($rows) * $GLOBALS['registration-fee'] . "€ TTC</b>";
  echo "</p>"
  ?>

<ul class="actions">
  <li><a href="candidate-register.php" class="button big scrolly" >Ajouter un participant</a></li>

<?php if (count($rows) > 0) { ?>
  <li><a href="transaction-register.php" class="button big scrolly" >Continuer</a></li>
<?php } ?>
</ul>

</div>
