<?php

$errors = [];
if (empty($_SESSION['mail']))
{
  array_push($errors, "L'adresse email renseignée est incorrecte.");
}

if (empty($_SESSION['tel']) || strlen($_SESSION['tel']) != 10)
{
  array_push($errors, "Le numéro de téléphone renseigné est incorrect.");
}

if (!$_SESSION['conditions'])
{
  array_push($errors, "Vous devez accepter le <a href=\"program.php#rules\">
                       règlement de la compétition</a> pour valider l'inscription des participants.");
}

$contact_ok = empty($errors);

if (!$contact_ok)
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
else
{
  $html = "<p>Vous vous apprêtez à finaliser l'inscription des participants suivants :</p>";
  $html .= "<div class=\"candidates-summary\">";

  $db->query("SELECT * FROM bloc_2017_grimpeurs WHERE session = :session AND payer_id IS NULL");
  $db->bind(":session", session_id());
  $rows = $db->resultset();

  $html .= "<table>";
  $html .= "<tr>";
  $html .= "<th>Nom</th>";
  $html .= "<th>Prénom</th>";
  $html .= "<th>Catégorie</th>";
  $html .= "</tr>";

  foreach ($rows as $row)
  {
    $sex       = ($row['sexe'] == 'M') ? 'Garçon' : 'Fille';
    $lastname  = strtoupper($row['nom']);
    $firstname = ucwords(strtolower($row['prenom']));
    $category  = ucfirst($row['categorie']) . " " . $sex;

    $html .= "<tr>";
    $html .= "<td>" . $lastname  . "</td>";
    $html .= "<td>" . $firstname . "</td>";
    $html .= "<td>" . $category  . "</td>";
    $html .= "</tr>";
  }

  $html .= "</table>";
  $html .= "</div>";

  $html .= "<p>Une fois le paiement effectué, une confirmation vous sera
            envoyée par email à l'adresse <b>" . $_SESSION['mail'] . "</b>.</p>";

  $html .= "<a href=\"" . $_SESSION['paypal'] ."\" class=\"button big special icon fa-credit-card\">Paiement en ligne</a>";

  echo $html;
}
?>
