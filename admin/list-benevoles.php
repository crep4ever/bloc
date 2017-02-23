<?php
require '../database.php';
$db = new Database();

$db->query("SELECT * FROM bloc_2017_benevoles");
$rows = $db->resultset();
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
  <title>Open de bloc 2016</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Open de bloc de Grenoble 2016" />
  <meta name="keywords" content="escalade, open, bloc, compétition, grenoble, drac vercors escalade" />
  <link rel="stylesheet" href="../css/style.min.css" />
  <link rel="stylesheet" href="../css/bloc.min.css" />
</head>

<body>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Liste des bénévoles inscrits</h2>
  </header>
  <div class="container">

    <!-- Content -->
    <section id="content">

      <!-- Text -->
      <script src="../js/sort-table.js"></script>

      <?php
      echo "<table class=\"sortable\">";
      echo "<tr>";
      echo "<th>Nom</th>";
      echo "<th>Prénom</th>";
      echo "<th>Missions</th>";
      echo "<th>Disponibilité</th>";
      echo "<th>Mail</th>";
      echo "<th>Téléphone</th>";
      echo "<th>Commentaire</th>";
      echo "</tr>";

      foreach ($rows as $row)
      {
        $lastname  = strtoupper($row['nom']);
        $firstname = ucwords(strtolower($row['prenom']));
        $missions  = $row['missions'];
        $dispo  = $row['dispo'];
        $mail  = $row['mail'];
        $phone  = $row['tel'];
        $comment  = $row['comment'];

        echo "<tr>";
        echo "<td>" . $lastname  . "</td>";
        echo "<td>" . $firstname . "</td>";
        echo "<td>" . $missions  . "</td>";
        echo "<td>" . $dispo     . "</td>";
        echo "<td>" . $mail      . "</td>";
        echo "<td>" . $phone      . "</td>";
        echo "<td>" . $comment   . "</td>";
        echo "</tr>";
      }

      echo "</table>";
      ?>

    </section>
  </div>
</section>

</body>

</html>
