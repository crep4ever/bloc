<?php
require '../database.php';
$db = new Database();

$db->query("SELECT * FROM bloc_2016 WHERE payer_id IS NOT NULL");
$rows = $db->resultset();
?>

<!DOCTYPE HTML>
<html lang="fr">

<head>
  <title>Open de bloc 2016</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Open de bloc de Grenoble 2016" />
  <meta name="keywords" content="escalade, open, bloc, compétition, grenoble, drac vercors escalade" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/bloc.css" />
</head>

<body>


<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Liste des participants inscrits</h2>
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
      echo "<th>Catégorie</th>";
      echo "<th>Club</th>";
      echo "<th>Niveau</th>";
      echo "<th>Commentaire</th>";
      echo "<th>Mail</th>";
      echo "<th>Téléphone</th>";
      echo "</tr>";

      foreach ($rows as $row)
      {
        $sex       = ($row['sexe'] == 'M') ? 'Garçon' : 'Fille';
        $lastname  = strtoupper($row['nom']);
        $firstname = ucwords(strtolower($row['prenom']));
        $category  = ucfirst($row['categorie']) . " " . $sex;
        $club      = strtoupper($row['club']);
        $level     = $row['experience'];
        $mail      = $row['mail'];
        $tel      = $row['tel'];
        $comment      = $row['comment'];

        echo "<tr>";
        echo "<td>" . $lastname  . "</td>";
        echo "<td>" . $firstname . "</td>";
        echo "<td>" . $category  . "</td>";
        echo "<td>" . $club      . "</td>";
        echo "<td>" . $level     . "</td>";
        echo "<td>" . $comment   . "</td>";
        echo "<td>" . $mail   . "</td>";
        echo "<td>" . $tel   . "</td>";
        echo "</tr>";
      }

      echo "</table>";
      ?>

    </section>
  </div>
</section>

</body>

</html>
