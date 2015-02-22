<?php

require 'globals.php';
require 'paypal.php';
require 'error.php';

// Set error handler
set_error_handler("handleError");

$lastname = htmlspecialchars($_POST['nom']);
$firstname = htmlspecialchars($_POST['prenom']);
$sex = htmlspecialchars($_POST['sex']);
$birthday = htmlspecialchars($_POST['naissance']);

if ($birthday == '1998' || $birthday == '1999'):
  $category ='cadet';
elseif ($birthday == '2000' || $birthday == '2001'):
$category = 'minime';
elseif ($birthday == '2002' || $birthday == '2003'):
$category = 'benjamin';
elseif ($birthday == '2004' || $birthday == '2005'):
$category = 'poussin';
else:
  $category = 'invalid';
endif;

$licenceType   = htmlspecialchars($_POST['licence-type']);
$licenceNumber = htmlspecialchars($_POST['licence-num']);
$club          = htmlspecialchars($_POST['club']);
$experience    = htmlspecialchars($_POST['niveau']);
$comment       = htmlspecialchars($_POST['message']);
$mail          = htmlspecialchars($_POST['email']);
$tel           = htmlspecialchars($_POST['telephone']);

$conditions = isset($_POST['conditions']);


$product = array(
"name" => "Frais d'inscription",
"price"=> $GLOBALS['registration-fee'],
"count"=> 1
);

$port = 0;
$totalttc = $product['price'];
$paypal = "#";
$paypal = new Paypal();
$params = array('RETURNURL' => 'http://www.patacrep.com/bloc/process.php',
		'CANCELURL' => 'http://www.patacrep.com/bloc/cancel.php',
		'PAYMENTREQUEST_0_AMT' => $totalttc + $port,
		'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
		'PAYMENTREQUEST_0_SHIPPINGAMT' => $port,
		'PAYMENTREQUEST_0_ITEMAMT' => $totalttc);

$params["L_PAYMENTREQUEST_0_NAME0"] = $product['name'];
$params["L_PAYMENTREQUEST_0_DESC0"] = 'Open de Bloc Grenoble 2015';
$params["L_PAYMENTREQUEST_0_AMT0"] = $product['price'];
$params["L_PAYMENTREQUEST_0_QTY0"] = $product['count'];


$response = $paypal->request('SetExpressCheckout', $params);

if ($response)
{
  $paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=' . $response['TOKEN'];
}
else
{
  trigger_error('Erreur Paypal: ' . $paypal->errors);
}

?>


<!DOCTYPE HTML>

<html lang="fr">
  <head>
    <title>Inscription</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/jquery.scrollgress.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/jquery.slidertron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
      <link rel="stylesheet" href="css/skel.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
  </head>
  <body class="landing">

    <!-- Header -->
    <header id="header" class="alt skel-layers-fixed">
      <h1><a href="index.php">Open de bloc 2015<span> Grenoble </span></a></h1>
      <nav id="nav">
  	<ul>
  	  <li><a href="index.php">Présentation</a></li>
  	  <li><a href="program.html">Programme et Règlement</a></li>
  	  <li><a href="registration.php">Inscription</a></li>
  	  <li><a href="results.html">Résultats</a></li>
  	  <li><a href="benevoles.html">Bénévoles</a></li>
  	  <li><a href="media.html">Media</a></li>
  	  <li><a href="contact.html">Contact</a></li>
  	</ul>
      </nav>
    </header>

    <section id="main" class="wrapper style1">


      <div class="container">

  	<!-- Content -->
  	<section id="content">

	  <p>Vous vous appretez à finaliser l'inscription du participant <b><?php echo $firstname ?> <?php echo
													   $lastname ?></b>.</p>

	  <p>Une fois le paiement effectué, une confirmation vous sera envoyée par email à l'adresse <b><?php echo
													      $mail ?></b></p>

	  <p>Merci de bien vérifier les informations saisies avant de procéder au paiement.
	    En cas d'informations incomplètes ou erronées, vous pouvez 
	    <a href="registration.php">retourner au formulaire d'inscription</a> pour les modifier.
	  </p>

	  <table>

	    <tr>
	      <td>Nom</td>
	      <td><?php echo $lastname ?></td>
	    </tr>

	    <tr>
	      <td>Prénom</td>
	      <td><?php echo $firstname ?></td>
	    </tr>

	    <tr>
	      <td>Date de naissance</td>
	      <td><?php echo $birthday ?></td>
	    </tr>

	    <tr>
	      <td>Catégorie</td>
	      <td><?php 
		     echo $category;
		     if ($sex == 'M'):
		     echo " garçon";
		     else:
		     echo " fille";
		     endif;
		     ?></td>
	    </tr>

	  </table>

	  <p>
	    <a href="<?= $paypal; ?>" class="button big">Paiement</a>
	  </p>

	</section>
      </div>
    </section>


  </body>
</html>
