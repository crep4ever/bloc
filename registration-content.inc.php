<?php
require_once 'globals.php';
require_once 'database.php';

function displayActions($count)
{
  $html = "<ul class=\"actions\">";

  if ($count == 0)
  {
    $html .= "<li><a href=\"candidate-register.php\" class=\"button big special icon fa-cart-plus\" >Enregistrer un (des) participant(s)</a></li>";
  }
  else
  {
    $html .= "<li><a href=\"candidate-register.php\" class=\"button big icon fa-cart-plus\" >Enregistrer un autre participant</a></li>";
  }

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

<!-- CANDIDATES SUMMARY -->
<?php
// Get list of this session's registered candidates
$db->query("SELECT * FROM bloc_2016_grimpeurs WHERE session = '" . session_id() . "' AND payer_id IS NULL");
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
