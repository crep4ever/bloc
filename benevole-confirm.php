<?php

require 'database.php';
$db = new Database();

/* Process benevole form results */

$defaultValues = array(
    'nom' => '',
    'prenom' => '',
    'email' => '',
    'phone' => '',
    'missions' => [],
    'dispo' => '',
    'message' => '',
);
$formValues = array_merge($defaultValues, $_POST);

$lastname  = strtoupper(trim(htmlspecialchars($formValues['nom'])));
$firstname = ucwords(trim(htmlspecialchars($formValues['prenom'])));
$mail = htmlspecialchars($formValues['email']);
$phone = htmlspecialchars($formValues['telephone']);
$missions = implode(',', $formValues['missions']);
$dispo = $formValues['dispo'];
$comment = trim(htmlspecialchars($formValues['message']));

/* Checks */

$errors = [];
if (empty($lastname))
{
  array_push($errors, "Vous devez renseigner votre nom.");
}

if (empty($firstname))
{
  array_push($errors, "Vous devez renseigner votre prénom.");
}

if (empty($mail))
{
  array_push($errors, "Vous devez renseigner votre email.");
}

if (!empty($errors))
{
  include("header.php");

  $html = "<section id=\"main\" class=\"wrapper style1\">" .
          "<div class=\"container\">" .
          "<section class=\"feature fa-exclamation-triangle\">" .
          "<h3>Attention</h3>" .
          "<ul>";

  foreach ($errors as $error)
  {
    $html .= "<li>" . $error . "</li>";
  }

  $html .= "</ul></section>";
  $html .= "<a href=\"benevoles.php\" class=\"button big scrolly\" >Retourner au formulaire</a>";
  $html .= "</div>";
  $html .= "</section>";

  echo $html;

  include("footer.php");
}
else
{
  /* insert benevole in db  */
  $db->beginTransaction();
  $db->query("INSERT INTO bloc_2016_benevoles(nom, prenom, mail, tel, missions, dispo, comment) VALUES(:nom, :prenom, :mail, :tel, :missions, :dispo, :comment)");
  $db->bind(':nom', $lastname);
  $db->bind(':prenom' , $firstname);
  $db->bind(':mail', $mail);
  $db->bind(':tel', $phone);
  $db->bind(':missions', $missions);
  $db->bind(':dispo', $dispo);
  $db->bind(':comment', $comment);
  $db->execute();
  $db->endTransaction();

  /* display confirmation  */
  include("header.php");

  $html = "<section id=\"main\" class=\"wrapper style1\">" .
          "<div class=\"container\">" .
          "<h2>Merci de votre participation</h2>";
          "<p>Nous vous communiquerons plus d'information sur votre adresse <b>" . $mail . "</b>.</p>";

  $html .= "<a href=\"benevoles.php\" class=\"button big special\" >Retourner au site</a>";
  $html .= "</div>";
  $html .= "</section>";

  echo $html;

  include("footer.php");
}

?>
