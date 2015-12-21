<!-- CHECK LIST -->
  <div class="checklist">
    <ul class="fa-ul">
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
  echo "<th>Club</th>";
  echo "<th>Catégorie</th>";
  echo "</tr>";

  foreach ($rows as $row)
  {
    $sex       = ($row['sexe'] == 'M') ? 'Garçon' : 'Fille';
    $lastname  = strtoupper($row['nom']);
    $firstname = ucwords(strtolower($row['prenom']));
    $category  = ucfirst($row['categorie']) . " " . $sex;
    $club      = strtoupper($row['club']);
    echo "<tr>";
    echo "<td>" . $lastname  . "</td>";
    echo "<td>" . $firstname . "</td>";
    echo "<td>" . $club      . "</td>";
    echo "<td>" . $category  . "</td>";
    echo "</tr>";
  }

  echo "</table>";

  echo "<hr />";
  echo "<b>Montant de l'inscription pour " . count($rows) . " participants : " . count($rows) * $GLOBALS['registration-fee'] . "€ TTC</b>";
  ?>


<ul class="actions">
  <li><a href="candidate-register.php" class="button big scrolly" >Ajouter un participant</a></li>
  <li><a href="transaction-register.php" class="button big scrolly" >Continuer</a></li>
</ul>

</div>
