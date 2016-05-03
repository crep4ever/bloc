<?php
require_once 'database.php';

$db->query("SELECT DISTINCT mail FROM bloc_2016_benevoles WHERE FIND_IN_SET(:mission, missions) > 0");

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

<section id="description">

<h2>Description des missions</h2>

<div id="accordion">
  <?php displayEffectif($db, "installation", "Installation de la salle", 15) ?>
  <div>
    <div class="icon fa-clock-o">la veille au soir</div>
    <p>Positionner les chaises, les barrières, les tapis, la sono ...</p>
  </div>

  <?php displayEffectif($db, "buvette", "Buvette", 5) ?>
  <div>
    <div class="icon fa-clock-o">permanence toute la journée, rush entre 11h30 et 13h30</div>
    <p>Tenir le stand buvette, confectionner les sandwiches, les crêpes ...</p>
  </div>

  <?php displayEffectif($db, "pointage", "Pointage des compétiteurs", 5) ?>
  <div>
    <div class="icon fa-clock-o">8h30-9h15 puis 11h-12h</div>
    <div class="icon fa-sticky-note">compatible buvette</div>
    <p>Vérifier les licences, remettre les dossards ...</p>
  </div>

  <?php displayEffectif($db, "juge", "Juges de blocs", 30) ?>
  <div>
    <div class="icon fa-clock-o">9h30-12 et/ou 12h30-15h (+formation préalable)</div>
    <p>Organiser le passage des jeunes dans le bloc dont vous êtes responsable. Observer et inscrire leurs prestations sur les feuilles de route.</p>
  </div>

  <?php displayEffectif($db, "saisie", "Saisie des résultats", 4) ?>
  <div>
    <div class="icon fa-clock-o">12h-13h30 puis 15h-16h30 (+formation préalable)</div>
    <p>Saisir informatiquement les résultats, en binôme. Concentration et rigueur sont de mise !</p>
  </div>

  <?php displayEffectif($db, "reportage", "Reportage photo/video", 3) ?>
  <div>
    <div class="icon fa-clock-o">toute la journée est à couvrir</div>
    <p>Couvrir l'évènement. Les photographes "officiels" pourront avoir accès aux zones propices à la prise de vue.</p>
  </div>

  <?php displayEffectif($db, "rangement", "Rangement de la salle", 15) ?>
  <div>
    <div class="icon fa-clock-o">à partir de 16h30</div>
    <p>... et après on boit un coup ? ;-)</p>
  </div>

  <?php displayEffectif($db, "demontage", "Démontage des voies", 10) ?>
  <div>
    <div class="icon fa-clock-o">La veille (Samedi 4 juin) 7h00-9h00</div>
    <p>Démonter les prises d'EV pour faire place à l'open</p>
  </div>

  <?php displayEffectif($db, "remontage", "Remontage des voies", 10) ?>
  <div>
    <div class="icon fa-clock-o">Le lendemain (Lundi 6 Juin) 8h30-12h00</div>
    <p>Remonter les prises d'EV comme si de rien n'était</p>
  </div>
</div>

</section>
