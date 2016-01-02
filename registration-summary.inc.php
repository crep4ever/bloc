<?php
require_once 'globals.php';
?>

<section id="sidebar">

  <section>
    <h3>Inscriptions en ligne</h3>
    <ul>
      <li>Ouverture : <?php echo $GLOBALS['registration-open-date-str'] ?></li>
      <li>Fermeture : <?php echo $GLOBALS['registration-close-date-str'] ?></li>
    </ul>
    <p>Voir la <a href="list-candidates.php" target="_blank">liste des participants inscrits</a>.</p>
    <hr />

    <h3>Places restantes disponibles</h3>

    <p>Les inscriptions sont limitées à <?php echo
    $GLOBALS['available-places']; ?> participants par
    demi-journée.</p>
    <footer>
      <table class="actions">
        <tr>
          <th>Catégorie</th>
          <th>Places restantes</th>
        </tr>
        <tr>
          <td>Poussins / Benjamins (F&amp;G)</td>
          <td><?php echo $GLOBALS['remaining-places-poussin-benjamin'] ?></td>
        </tr>
        <tr>
          <td>Minimes / Cadets (F&amp;G)</td>
          <td><?php echo $GLOBALS['remaining-places-minime-cadet'] ?></td>
        </tr>
      </table>
    </footer>
  </section>

  <hr />

</section>
