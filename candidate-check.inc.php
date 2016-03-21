<?php
require_once 'globals.php';
require_once 'database.php';

// Recheck available places from already registered candidates in db
$available = false;
if ($_SESSION['category'] == 'microbe' || $_SESSION['category'] == 'poussin')
{
  $db->query("SELECT * FROM bloc_2016 WHERE (categorie = :cat1 OR categorie = :cat2) AND payer_id IS NOT NULL");
  $db->bind(':cat1', 'microbe');
  $db->bind(':cat2', 'poussin');
  $db->resultset();
  $available = ($GLOBALS['available-places'] - $db->rowCount()) > 0;
}
else if ($_SESSION['category'] == 'benjamin' || $_SESSION['category'] == 'minime')
{
  $db->query("SELECT * FROM bloc_2016 WHERE (categorie = :cat1 OR categorie = :cat2) AND payer_id IS NOT NULL");
  $db->bind(':cat1', 'benjamin');
  $db->bind(':cat2', 'minime');
  $db->resultset();
  $available = ($GLOBALS['available-places'] - $db->rowCount()) > 0;
}

$errors = [];

if (!$available)
{
  array_push($errors, "Les inscriptions sont fermées pour la catégorie demandée.<br />
                       Vous pouvez néanmoins <a href=\"contact.php\">nous contacter</a> pour une
                       inscription sur liste d'attente.");
}

if (empty($_SESSION['lastname']))
{
  array_push($errors, "Vous devez renseigner le nom du participant.");
}

if (empty($_SESSION['firstname']))
{
  array_push($errors, "Vous devez renseigner le prénom du participant.");
}

if (empty($_SESSION['club']))
{
  array_push($errors, "Vous devez renseigner le club d'appartenance du participant.");
}

if (empty($_SESSION['experience']))
{
  array_push($errors, "Vous devez renseigner le niveau du participant.");
}

if ($_SESSION['category'] == 'invalid')
{
  array_push($errors, "Impossible de déterminer la catégorie du participant à partir de sa date de naissance.");
}

if ($_SESSION['licenceType'] == 'FFME' && strlen($_SESSION['licenceNumber']) != 6)
{
  array_push($errors, "Votre numéro de licence FFME <b>" . $_SESSION['licenceNumber'] . "</b>
                       n'a pas le bon format&nbsp: un numéro à 6 chiffres est attendu.");
}

if ($_SESSION['licenceType'] == 'FFCAM' && strlen($_SESSION['licenceNumber']) != 12)
{
  array_push($errors, "Votre numéro de licence FFCAM <b>" . $_SESSION['licenceNumber'] . "</b>
                       n'a pas le bon format&nbsp: un numéro à 12 chiffres est attendu.");
}

if ($_SESSION['licenceType'] == 'UNSS' && strlen($_SESSION['licenceNumber']) != 9)
{
  array_push($errors, "Votre numéro de licence UNSS <b>" . $_SESSION['licenceNumber'] . "</b>
                       n'a pas le bon format&nbsp: un numéro à 9 chiffres est attendu.");
}

$candidate_ok = empty($errors);

if (!$candidate_ok)
{
  $errors_html = "<section class=\"feature fa-exclamation-triangle\">";
  $errors_html .= "<h3>Attention</h3>";
  $errors_html .= "<ul>";
  foreach ($errors as $error)
  {
      $errors_html .= "<li>" . $error . "</li>";
  }
  $errors_html .= "</ul></section>";

  $errors_html .= "<p>";
  $errors_html .= "Merci de <a href=\"registration.php\">retourner au formulaire</a> afin de corriger ces informations.";
  $errors_html .= "</p>";

  echo $errors_html;
}
?>

<?php if ($candidate_ok) { ?>
  <h2>Merci de bien vérifier les informations saisies avant de continuer.</h2>
  <p>
    En cas d'informations incomplètes ou erronées, vous pouvez
    <a href="registration.php">retourner au formulaire d'inscription</a>
    pour les modifier.
  </p>

  <table>

    <tr>
      <td>Participant</td>
      <td><?php echo $_SESSION['lastname'] . ' ' . $_SESSION['firstname'] ?></td>
    </tr>

    <tr>
      <td>Catégorie</td>
      <td><?php echo ucwords($_SESSION['category'] . ' ' . $_SESSION['sex_str']) . ' (' . $_SESSION['birthday'] . ')' ?></td>
    </tr>

    <tr>
      <td>Club</td>
      <td><?php echo $_SESSION['club'] . ' ; Licence ' . $_SESSION['licenceType'] . ' ' . $_SESSION['licenceNumber'] ?></td>
    </tr>

    <tr>
      <td>Niveau</td>
      <td><?php echo $_SESSION['experience'] . ' ' . $_SESSION['comment'] ?></td>
    </tr>

  </table>

  <ul class="actions">
    <li><a href="candidate-process.php" class="button big scrolly" >Continuer</a></li>
  </ul>

<?php } ?>
