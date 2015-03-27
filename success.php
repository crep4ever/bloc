<?php 
session_start();

function sendConfirmation($firstName, $lastName, $category, $sex, $mail)
{
  require 'globals.php';

  $event = $GLOBALS['event-date-str'];

  if ($category == 'poussin' || $category == 'benjamin')
    {
      $hour = strftime('%Hh%M', $GLOBALS['poussin-benjamin-arrival']);
    }
  else if ($category == 'minime' || $category == 'cadet')
    {
      $hour = strftime('%Hh%M', $GLOBALS['minime-cadet-arrival']);
    }

  $subject = "[Open de Bloc] Confirmation d'inscription";

  $site = "www.openblocgrenoble.fr";
  $from = "opendebloc.grenoble@gmail.com";
  $nom = "Open de Bloc";
  $to = $mail;
  $sujet = "[Open de Bloc] Confirmation d'inscription";

  $text = "Bonjour,\r\n\r\n"
    . "Vous avez réalisé l'inscription du participant $firstName $lastName en catégorie $category $sex pour l'Open de bloc de Grenoble 2015.\r\n\r\n"
    . "Vous pouvez consulter le programme et le règlement de la compétition à l'adresse : http://openblocgrenoble.fr/program.php\r\n\r\n"
    . "Nous vous donnons rendez-vous le $event à $hour à Espace Vertical 3 en possession :\r\n"
    . " * de votre licence\r\n"
    . " * d'une pièce d'identité si votre licence ne comporte pas de photo\r\n"
    . " * de l'autorisation parentale écrite pour cette participation, téléchargeable ici : \r\n"
    . "http://openblocgrenoble.fr/images/autorisation_parentale.pdf\r\n\r\n"
    . "Merci et à bientôt !\r\n\r\n"
    . "Le CAF Fontaine";

  $from = $nom." <".$from.">";

  $header  = "Reply-to: ".$from."\n";
  $header .= "From: ".$from."\n";
  $header .= "X-Sender: <".$site.">\n";

  $message = wordwrap($text, 80, "\r\n");

  mail($to, $subject, $message, $header);
}

sendConfirmation($_SESSION['firstname'],
		 $_SESSION['lastname'],
		 $_SESSION['category'],
		 $_SESSION['sex_str'],
		 $_SESSION['mail']);

include("header.php");
?>

<section id="main" class="wrapper style1">


  <div class="container">

    <!-- Content -->
    <section id="content">

      <p>
  
	L'inscription du participant <b><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></b>
dans la catégorie <b><?php echo $_SESSION['category'] . ' ' . $_SESSION['sex_str'] ?></b>
	a été réalisée avec succès.
      </p>

      <p>
	Une confirmation du paiement vous a été envoyée par email à l'adresse <b><?php echo $_SESSION['mail'] ?></b>.
      </p>

      <p>
	Nous vous donnons rendez-vous le <b><?php echo $GLOBALS['event-date-str'] ?></b>
	à <a href="access.php">Espace Vertical 3</a> en possession&nbsp;:
	<ul>
	  <li>de la licence</li>
	  <li>d'une pièce d'identité du participant si sa licence ne comporte pas de photo</li>
          <li>de l'autorisation parentale écrite pour cette participation, 
<a href="images/autorisation_parentale.pdf" target="_blank">téléchargeable ici.</a></li>
	</ul>
      </p>

      <p>
	<a href="index.php" class="button big">Retourner au site</a>
      </p>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
