<?php
require_once 'globals.php';
require_once 'database.php';

// Check available places from already registered candidates in db
$db->query("SELECT * FROM bloc_2016 WHERE (categorie = :cat1 OR categorie = :cat2) AND payer_id IS NOT NULL");

$db->bind(':cat1', 'poussin');
$db->bind(':cat2', 'benjamin');
$db->resultset();
$GLOBALS['remaining-places-poussin-benjamin'] = max(0, $GLOBALS['available-places'] - $db->rowCount());

$db->bind(':cat1', 'minime');
$db->bind(':cat2', 'cadet');
$db->resultset();
$GLOBALS['remaining-places-minime-cadet'] = max(0, $GLOBALS['available-places'] - $db->rowCount());

$infos = [];

if (strtotime('now') < $GLOBALS['registration-open-date'])
{
  array_push($infos, "Les inscriptions ne sont pas encore ouvertes.");
}

if (strtotime('now') > $GLOBALS['registration-close-date'])
{
  array_push($infos, "Les inscriptions sont maintenant fermées.");
}

if ($GLOBALS['remaining-places-poussin-benjamin'] == 0)
{
  array_push($infos, "Les inscriptions sont closes pour les catégories <b>Poussin et Benjamin</b>.<br />
                      Vous pouvez néanmoins <a href=\"contact.php\">nous contacter</a> pour une
                      inscription sur liste d'attente.");
}

if ($GLOBALS['remaining-places-minime-cadet'] == 0)
{
  array_push($infos, "Les inscriptions sont closes pour les catégories <b>Minime et Cadet</b>.<br />
                      Vous pouvez néanmoins <a href=\"contact.php\">nous contacter</a> pour une
                      inscription sur liste d'attente.");
}

if (!empty($infos))
{
  $infos_html = "<section class=\"feature feature fa-info-circle\">";
  $infos_html .= "<ul>";

  foreach ($infos as $info)
  {
    $infos_html .= "<li>" . $info . "</li>";
  }

  $infos_html .= "</ul></section>";

  echo $infos_html;
}

$displayForm = (strtotime('now') >= $GLOBALS['registration-open-date']) &&
(strtotime('now') <= $GLOBALS['registration-close-date']);
?>
