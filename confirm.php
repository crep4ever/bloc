<?php

require 'globals.php';
require 'paypal.php';
//require 'error.php';

// Set error handler
//set_error_handler("handleError");

$lastname = htmlspecialchars($_POST['nom']);
$firstname = htmlspecialchars($_POST['prenom']);
$sex = htmlspecialchars($_POST['sex']);
$birthday = htmlspecialchars($_POST['naissance']);
$year = explode("/", $birthday)[2];

if ($year == '1998' || $year == '1999'):
  $category ='cadet';
elseif ($year == '2000' || $year == '2001'):
$category = 'minime';
elseif ($year == '2002' || $year == '2003'):
$category = 'benjamin';
elseif ($year == '2004' || $year == '2005'):
$category = 'poussin';
else:
  $category = 'invalid';
endif;

if ($sex == 'M'):
  $sex_str = 'garçon';
else:
  $sex_str = 'fille';
endif;

$licenceType   = htmlspecialchars($_POST['licence-type']);
$licenceNumber = htmlspecialchars($_POST['licence-num']);
$club          = htmlspecialchars($_POST['club']);
$experience    = htmlspecialchars($_POST['niveau']);
$comment       = htmlspecialchars($_POST['message']);
$mail          = htmlspecialchars($_POST['email']);
$tel           = htmlspecialchars($_POST['telephone']);

$conditions = isset($_POST['conditions']);


$product = array("name" => "Frais d'inscription",
		 "price"=> $GLOBALS['registration-fee'],
		 "count"=> 1);

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

if (!$response)
  {
    trigger_error($paypal->errors);
  }
else
  {
    require 'database.php';
    $db = new Database();

    $db->beginTransaction();

    $db->query("INSERT INTO bloc_participants(nom, prenom, sexe, naissance, categorie, licence_type, licence_number, club, experience, comment, mail, tel, conditions, token) VALUES(:nom, :prenom, :sexe, :naissance, :categorie, :licence_type, :licence_number, :club, :experience, :comment, :mail, :tel, :conditions, :token)"); 

    $db->bind('nom', $lastname);
    $db->bind('prenom' , $firstname);
    $db->bind('sexe', $sex);
    $db->bind('naissance', $birthday);
    $db->bind('categorie', $category);
    $db->bind('licence_type', $licenceType);
    $db->bind('licence_number', $licenceNumber);
    $db->bind('club', $club);
    $db->bind('experience', $experience);
    $db->bind('comment', $comment);
    $db->bind('mail', $mail);
    $db->bind('tel', $tel);
    $db->bind('conditions', $conditions);
    $db->bind('token', $response['TOKEN']);

    $db->execute();

    $db->endTransaction();

    $paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=' . $response['TOKEN'];
  }

?>


<?php include("header.php"); ?>

<section id="main" class="wrapper style1">

  <div class="container">

    <!-- Content -->
    <section id="content">

      <p>
	Vous vous appretez à finaliser l'inscription du participant 
	<b><?php echo $firstname ?> <?php echo $lastname ?></b>.
      </p>

      <p>
	Une fois le paiement effectué, une confirmation vous sera
	envoyée par email à l'adresse
	<b><?php echo $mail?></b>
      </p>

      <p>
	Merci de bien vérifier les informations saisies avant de
	procéder au paiement.  En cas d'informations incomplètes ou
	erronées, vous pouvez <a href="registration.php">retourner au formulaire d'inscription</a>
	pour les modifier.
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
	  <td><?php echo $category . ' ' . $sex_str ?></td>
	</tr>

	<tr>
	  <td>Licence</td>
	  <td><?php echo $licenceType . ' ' . $licenceNumber ?></td>
	</tr>

	<tr>
	  <td>Club</td>
	  <td><?php echo $club ?></td>
	</tr>

	<tr>
	  <td>Niveau</td>
	  <td><?php echo $experience ?></td>
	</tr>

	<tr>
	  <td>Commentaire</td>
	  <td><?php echo $comment ?></td>
	</tr>

	<tr>
	  <td>Mail</td>
	  <td><?php echo $mail ?></td>
	</tr>

	<tr>
	  <td>Téléphone</td>
	  <td><?php echo $tel ?></td>
	</tr>

      </table>

      <p>
	<a href="<?= $paypal; ?>" class="button big">Paiement</a>
      </p>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
