<?php
require_once 'globals.php';
require_once 'database.php';

function displayActions($count)
{
  $html = "<ul class=\"actions\">";
  $html .= "<li><a href=\"candidate-register.php\" class=\"button big icon fa-cart-plus\" >Ajouter un participant</a></li>";

  if ($count > 0)
  {
    $html .= "<li><a href=\"transaction-register.php\" class=\"button big special icon fa-credit-card\" >";
    $html .= "Payer " . $count . " inscription";
    if ($count > 1)
    {
      $html .= "s";
    }
    $html .=  " (" . $count * $GLOBALS['registration-fee'] . "€)";
    $html .= "</a></li>";
  }
  $html .= "</ul>";

  echo $html;
}

?>

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
      Avez-vous bien lu <a href="program.php#rules">les règles du jeu</a>
      avant de procéder à l'inscription&nbsp;?
    </li>
    <li><i class="fa-li fa-2x fa fa-sign-in"></i>
      Avez-vous considéré de <a href="benevoles.php">rejoindre notre équipe de bénévoles</a>&nbsp;?
    </li>
  </ul>
</div>

<!-- CANDIDATES SUMMARY -->
<?php
// Get list of this session's registered candidates
$db->query("SELECT * FROM bloc_2016 WHERE session = '" . session_id() . "' AND payer_id IS NULL");
$rows = $db->resultset();
?>

<div class="candidates-summary">

  <?php
  if (count($rows) > 0)
  {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Prénom</th>";
    echo "<th>Catégorie</th>";
    echo "<th>Club</th>";
    echo "<th></th>";
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
      echo "<td><a title=\"Supprimer ce participant\" href=\"candidate-remove.php" . $url_params . "\"><div class=\"fa fa-times\"></div></a></td>";
      echo "</tr>";
    }

    echo "</table>";
  }
  ?>

<?php displayActions(count($rows)) ?>

</div>
