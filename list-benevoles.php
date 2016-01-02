<?php include("header.php"); ?>

<?php
// Check available places from
// already registered candidates in db

require 'database.php';
$db = new Database();

$db->query("SELECT * FROM bloc_2016_benevoles");
$rows = $db->resultset();
?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Liste des bénévoles inscrits</h2>
  </header>
  <div class="container">

    <!-- Content -->
    <section id="content">

      <!-- Text -->
      <script src="js/sort-table.js"></script>

      <?php
      echo "<table class=\"sortable\">";
      echo "<tr>";
      echo "<th>Nom</th>";
      echo "<th>Prénom</th>";
      echo "<th>Missions</th>";
      echo "</tr>";

      foreach ($rows as $row)
      {
        $lastname  = strtoupper($row['nom']);
        $firstname = ucwords(strtolower($row['prenom']));
        $missions  = $row['missions'];

        echo "<tr>";
        echo "<td>" . $lastname  . "</td>";
        echo "<td>" . $firstname . "</td>";
        echo "<td>" . $missions  . "</td>";
        echo "</tr>";
      }

      echo "</table>";
      ?>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
