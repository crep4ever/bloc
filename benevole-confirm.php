<?php

require 'database.php';
$db = new Database();

/* Process benevole form results */

$lastname  = strtoupper(trim(htmlspecialchars($_POST['nom'])));
$firstname = ucwords(trim(htmlspecialchars($_POST['prenom'])));
$mail = htmlspecialchars($_POST['email']);
$missions = implode(',', $_POST['missions']);
$dispo = "";
if (in_array('dispo', $_POST))
{
  $dispo = $_POST['dispo'];
}
$comment = trim(htmlspecialchars($_POST['message']));

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
  $db->query("INSERT INTO bloc_2016_benevoles(nom, prenom, mail, missions, dispo, comment) VALUES(:nom, :prenom, :mail, :missions, :dispo, :comment)");
  $db->bind(':nom', $lastname);
  $db->bind(':prenom' , $firstname);
  $db->bind(':mail', $mail);
  $db->bind(':missions', $missions);
  $db->bind(':dispo', $dispo);
  $db->bind(':comment', $comment);
  $db->execute();
  $db->endTransaction();

  /* display confirmation  */
  include("header.php");

  $html = "<section id=\"main\" class=\"wrapper style1\">" .
          "<div class=\"container\">" .
          "<h2>Merci de votre participation</h2>" .

  $html .= "<a href=\"benevoles.php\" class=\"button big scrolly\" >Retourner au site</a>";
  $html .= "</div>";
  $html .= "</section>";

  echo $html;

  include("footer.php");
}

?>
