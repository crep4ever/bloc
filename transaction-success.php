<?php
session_start();
require 'globals.php';
require 'database.php';

function sendConfirmation($count, $mail)
{

  $event = $GLOBALS['event-date-str'];
  $arrivalMorning  = strftime('%Hh%M', $GLOBALS['arrival-morning']);
  $arrivalAfternoon = strftime('%Hh%M', $GLOBALS['arrival-afternoon']);

  $site = "www.openblocgrenoble.fr";
  $from = "openblocgrenoble@gmail.com";
  $nom = "Open de Bloc";
  $to = $mail;
  $subject = "[Open de Bloc] Confirmation d'inscription";

  $text = "Bonjour,\r\n\r\n"
  . "Vous avez réalisé l'inscription de $count participant(s) pour l'Open de bloc de Grenoble 2016.\r\n\r\n"
  . "Vous pouvez consulter le programme et le règlement de la compétition à l'adresse : www.openblocgrenoble.fr/program.php\r\n\r\n"
  . "Nous vous donnons rendez-vous le $event à Espace Vertical 3 en possession :\r\n"
  . " * de votre licence\r\n"
  . " * d'une pièce d'identité si votre licence ne comporte pas de photo\r\n"
  . " * de l'autorisation parentale écrite pour cette participation, téléchargeable ici : \r\n"
  . "www.openblocgrenoble.fr/data/2016/autorisation_parentale.pdf\r\n\r\n"
  . "Nous vous rappelons que les heures d'arrivée sont :\r\n"
  . " * $arrivalMorning pour les catégories Benjamin et Minime\r\n"
  . " * $arrivalAfternoon pour les catégories Microbe et Poussin\r\n"
  . "Merci et à bientôt !\r\n\r\n"
  . "Drac Vercors Escalade";

  $from = $nom." <".$from.">";

  $header  = "Reply-to: ".$from."\n";
  $header .= "From: ".$from."\n";
  $header .= "X-Sender: <".$site.">\n";
  $header .= 'Bcc: openblocgrenoble@gmail.com' . "\r\n";

  $message = wordwrap($text, 80, "\r\n");

  mail($to, $subject, $message, $header);
}

$db = new Database;
$db->query("SELECT * FROM bloc_2016_grimpeurs WHERE session = :session AND token = :token AND payer_id IS NOT NULL");
$db->bind(":session", session_id());
$db->bind(":token", $_SESSION['token']);
$rows = $db->resultset();

$candidates_count = count($rows);

$candidates_html = "";

if ($candidates_count > 0)
{
  sendConfirmation($candidates_count, $_SESSION['mail']);

  $candidates_html .= "<p>";
  $candidates_html .= "L'inscription des participants suivants a été réalisée avec succès&nbsp;:";
  $candidates_html .= "</p>";

  $candidates_html .= "<table>";
  $candidates_html .= "<tr>";
  $candidates_html .= "<th>Nom</th>";
  $candidates_html .= "<th>Prénom</th>";
  $candidates_html .= "<th>Catégorie</th>";
  $candidates_html .= "</tr>";

  foreach ($rows as $row)
  {
    $sex       = ($row['sexe'] == 'M') ? 'Garçon' : 'Fille';
    $lastname  = strtoupper($row['nom']);
    $firstname = ucwords(strtolower($row['prenom']));
    $category  = ucfirst($row['categorie']) . " " . $sex;

    $candidates_html .= "<tr>";
    $candidates_html .= "<td>" . $lastname  . "</td>";
    $candidates_html .= "<td>" . $firstname . "</td>";
    $candidates_html .= "<td>" . $category  . "</td>";
    $candidates_html .= "</tr>";
  }

  $candidates_html .= "</table>";
}

include("header.php");
?>

<section id="main" class="wrapper style1">


  <div class="container">

    <!-- Content -->
    <section id="content">

      <?php echo $candidates_html ?>

      <p>
        Une confirmation du paiement vous a été envoyée par email
        <?php
        if (!empty($_SESSION['mail']))
        {
          echo ' à l\'adresse <b>' . $_SESSION['mail'] . '</b>';
        }
        ?>.
      </p>

      <p>
        Nous vous donnons rendez-vous le <b><?php echo $GLOBALS['event-date-str'] ?></b>
        à <a href="access.php">Espace Vertical 3</a> en possession&nbsp;:
      </p>

      <ul>
        <li>de votre licence</li>
        <li>d'une pièce d'identité si votre licence ne comporte pas de photo</li>
        <li>de <a href="data/2016/autorisation_parentale.pdf">l'autorisation parentale écrite</a> pour cette participation</li>
      </ul>

      <p>
        <a href="index.php" class="button big">Retourner au site</a>
      </p>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
