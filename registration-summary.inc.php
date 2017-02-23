<?php
require_once 'globals.php';

// Check available places from already registered candidates in db
$db->query("SELECT * FROM bloc_2017_grimpeurs WHERE (categorie = :cat1 OR categorie = :cat2) AND payer_id IS NOT NULL");

$db->bind(':cat1', 'microbe');
$db->bind(':cat2', 'poussin');
$db->resultset();
$GLOBALS['remaining-places-morning'] = max(0, $GLOBALS['available-places'] - $db->rowCount());

$db->bind(':cat1', 'benjamin');
$db->bind(':cat2', 'minime');
$db->resultset();
$GLOBALS['remaining-places-afternoon'] = max(0, $GLOBALS['available-places'] - $db->rowCount());
?>

<section id="sidebar">

  <section>
    <h3>Inscriptions en ligne</h3>
    <ul>
      <li>Ouverture : <?php echo $GLOBALS['registration-open-date-str'] ?></li>
      <li>Fermeture : <?php echo $GLOBALS['registration-close-date-str'] ?></li>
    </ul>
    <p>Voir la <a href="list-candidates.php">liste des participants inscrits</a>.</p>
    <hr />

    <h3>Places restantes disponibles</h3>

    <p>Les inscriptions sont limitées à <?php echo
    $GLOBALS['available-places']; ?> participants par
    demi-journée.</p>
    <footer>
      <table style="font-size: 90%">
        <tr>
          <th>Catégorie</th>
          <th>Places restantes</th>
        </tr>
        <tr>
          <td>Microbes / Poussins (F&amp;G)</td>
          <td><?php echo $GLOBALS['remaining-places-morning'] ?></td>
        </tr>
        <tr>
          <td>Benjamins / Minimes (F&amp;G)</td>
          <td><?php echo $GLOBALS['remaining-places-afternoon'] ?></td>
        </tr>
      </table>
    </footer>
  </section>

  <hr />

</section>
