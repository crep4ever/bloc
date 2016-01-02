<?php
require_once 'database.php';

$db->query("SELECT * FROM bloc_2016_benevoles WHERE FIND_IN_SET(:mission, missions) > 0");

function displayEffectif($database, $mission, $title, $total)
{
  $database->bind(':mission', $mission);
  $count = count($database->resultset());
  $html = "<h3>" . $title . "<span class=\"effectif\">" . "Effectif : " . $count . " / " . $total . "</span></h3>";
  echo $html;
}
?>

<script>
$(function() {
  $( "#accordion" ).accordion({
    collapsible: true,
    active: false,
    heightStyle: "content"
  });
});
</script>

<section>

<h2>Description des missions</h2>

<div id="accordion">
  <?php displayEffectif($db, "installation", "Installation de la salle", 15) ?>
  <div>
    <div class="icon fa-clock-o">&nbsp;la veille au soir&nbsp;</div>
    <p>Positionner les chaises, les barrières, les tapis, la sono ...</p>
  </div>

  <?php displayEffectif($db, "buvette", "Buvette", 5) ?>
  <div>
    <div class="icon fa-clock-o">&nbsp;permanence toute la journée, rush entre 11h30 et 13h30&nbsp;</div>
    <p>Tenir le stand buvette, confectionner les sandwiches, les crêpes ...</p>
  </div>

  <?php displayEffectif($db, "pointage", "Pointage des compétiteurs", 5) ?>
  <div>
    <div class="icon fa-clock-o">&nbsp;8h30-9h15 puis 11h-12h&nbsp;</div>
    <div class="icon fa-sticky-note">&nbsp;compatible buvette&nbsp;</div>
    <p>Vérifier les licences, remettre les dossards ...</p>
  </div>

  <?php displayEffectif($db, "juge", "Juges de blocs", 30) ?>
  <div>
    <div class="icon fa-clock-o">&nbsp;9h30-12 et/ou 12h30-15h (+formation préalable)&nbsp;</div>
    <p>Organiser le passage des jeunes dans le bloc dont vous êtes responsable. Observer et inscrire leurs prestations sur les feuilles de route.</p>
  </div>

  <?php displayEffectif($db, "saisie", "Saisie des résultats", 4) ?>
  <div>
    <div class="icon fa-clock-o">&nbsp;12h-13h30 puis 15h-16h30 (+formation préalable)&nbsp;</div>
    <p>Saisir informatiquement les résultats, en binôme. Concentration et rigueur sont de mise !</p>
  </div>

  <?php displayEffectif($db, "reportage", "Reportage photo/video", 3) ?>
  <div>
    <div class="icon fa-clock-o">&nbsp;toute la journée est à couvrir&nbsp;</div>
    <p>Couvrir l'évènement. Les photographes "officiels" pourront avoir accès aux zones propices à la prise de vue.</p>
  </div>

  <?php displayEffectif($db, "rangement", "Rangement de la salle", 15) ?>
  <div>
    <div class="icon fa-clock-o">&nbsp;À partir de 16h30&nbsp;</div>
    <p>... et après on boit un coup ? ;-)</p>
  </div>
</div>

</section>
