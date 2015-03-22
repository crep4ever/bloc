<?php 
session_start();

function sendConfirmation($firstName, $lastName, $mail)
{
  require 'globals.php';

  $event = $GLOBALS['event-date-str'];
  $subject = "[Open de Bloc] Confirmation d'inscription";
  $body = "Bonjour,\r\n\r\n"
    . "Vous avez réalisé l'inscription du participant $firstName $lastName pour l'open de bloc de Grenoble 2015.\r\n\r\n"
    . "Rendez-vous $event à Espace Vertical 3 en possession :\r\n"
    . " - d'une pièce d'identité du participant\r\n"
    . " - de sa licence\r\n"
    . " - de l'autorisation parentale écrite de participation à la compétition\r\n\r\n"
    . "Merci et à bientôt !\r\n\r\n"
    . "Le CAF Fontaine";

  $body = wordwrap($body, 80, "\r\n");

  $headers = 'From: Open de bloc Grenoble <opendebloc.grenoble@gmail.com>\r\n'
    . 'Reply-To: opendebloc.grenoble@gmail.com\r\n';

  mail($mail, $subject, $body, $headers);
}

sendConfirmation($_SESSION['firstname'],
		 $_SESSION['lastname'],
		 $_SESSION['mail']);

include("header.php");
?>

<section id="main" class="wrapper style1">


  <div class="container">

    <!-- Content -->
    <section id="content">

      <p>
	L'inscription du participant <b><?php echo $_SESSION['firstname'] ?> <?php echo $_SESSION['lastname'] ?></b>
	a été réalisée avec succès.
      </p>

      <p>
	Une confirmation du paiement vous a été envoyée par email à l'adresse <b><?php echo $_SESSION['mail'] ?></b>.
      </p>

      <p>
	Nous vous donnons rendez-vous le <b><?php echo $GLOBALS['event-date-str'] ?></b>
	à <a href="access.php">Espace Vertical 3</a>. N'oubliez pas
	de vous munir :
	<ul>
	  <li>D'une pièce d'identité valide</li>
	  <li>De l'autorisation parentale écrite</li>
	</ul>
      </p>

      <p>
	<a href="index.php" class="button big">Retourner au site</a>
      </p>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
