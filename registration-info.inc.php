<?php
require_once 'globals.php';
require_once 'database.php';

// Check available places from already registered candidates in db
$db->query("SELECT * FROM bloc_2016 WHERE (categorie = :cat1 OR categorie = :cat2) AND payer_id IS NOT NULL");

$db->bind(':cat1', 'microbe');
$db->bind(':cat2', 'poussin');
$db->resultset();
$GLOBALS['remaining-places-morning'] = max(0, $GLOBALS['available-places'] - $db->rowCount());

$db->bind(':cat1', 'benjamin');
$db->bind(':cat2', 'minime');
$db->resultset();
$GLOBALS['remaining-places-afternoon'] = max(0, $GLOBALS['available-places'] - $db->rowCount());

$infos = [];

if (strtotime('now') < $GLOBALS['registration-open-date'])
{
  array_push($infos, "Les inscriptions ne sont pas encore ouvertes.");
}

if (strtotime('now') > $GLOBALS['registration-close-date'])
{
  array_push($infos, "Les inscriptions sont maintenant fermées.");
}

if ($GLOBALS['remaining-places-morning'] == 0)
{
  array_push($infos, "Les inscriptions sont closes pour les catégories <b>Microbe et Poussin</b>.<br />
                      Vous pouvez néanmoins <a href=\"contact.php\">nous contacter</a> pour une
                      inscription sur liste d'attente.");
}

if ($GLOBALS['remaining-places-afternoon'] == 0)
{
  array_push($infos, "Les inscriptions sont closes pour les catégories <b>Benjamin et Minime</b>.<br />
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
