<?php
session_start();

require 'globals.php';

$_SESSION['lastname']  = htmlspecialchars($_POST['nom']);
$_SESSION['firstname'] = htmlspecialchars($_POST['prenom']);
$_SESSION['sex']       = htmlspecialchars($_POST['sex']);
$_SESSION['birthday']  = htmlspecialchars($_POST['naissance']);
$year = explode("/", $_SESSION['birthday'])[2];

$_SESSION['category'] = 'invalid';
if ($year == '1998' || $year == '1999')
  {
    $_SESSION['category'] ='cadet';
  }
else if ($year == '2000' || $year == '2001')
  {
    $_SESSION['category'] = 'minime';
  }
else if ($year == '2002' || $year == '2003')
  {
    $_SESSION['category'] = 'benjamin';
  }
else if ($year == '2004' || $year == '2005')
  {
    $_SESSION['category'] = 'poussin';
  }

if ($_SESSION['sex'] == 'M')
  {
    $_SESSION['sex_str'] = 'garçon';
  }
else
  {
    $_SESSION['sex_str'] = 'fille';
  }

$_SESSION['licenceType']   = htmlspecialchars($_POST['licence-type']);
$_SESSION['licenceNumber'] = htmlspecialchars($_POST['licence-num']);
$_SESSION['club']          = htmlspecialchars($_POST['club']);
$_SESSION['experience']    = htmlspecialchars($_POST['niveau']);
$_SESSION['comment']       = htmlspecialchars($_POST['message']);
$_SESSION['mail']          = htmlspecialchars($_POST['email']);
$_SESSION['tel']           = htmlspecialchars($_POST['telephone']);

$_SESSION['conditions'] = isset($_POST['conditions']);

require 'paypal.php';

$product = array("name" => "Frais d'inscription",
		 "price"=> $GLOBALS['registration-fee'],
		 "count"=> 1);

$port = 0;
$totalttc = $product['price'];
$return = $GLOBALS['root-dir'] . '/process.php';
$cancel = $GLOBALS['root-dir'] . '/cancel.php';
$paypal = "#";
$paypal = new Paypal();
$params = array('RETURNURL' => $return,
		'CANCELURL' => $cancel,
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

    $db->bind('nom', $_SESSION['lastname']);
    $db->bind('prenom' , $_SESSION['firstname']);
    $db->bind('sexe', $_SESSION['sex']);
    $db->bind('naissance', $_SESSION['birthday']);
    $db->bind('categorie', $_SESSION['category']);
    $db->bind('licence_type', $_SESSION['licenceType']);
    $db->bind('licence_number', $_SESSION['licenceNumber']);
    $db->bind('club', $_SESSION['club']);
    $db->bind('experience', $_SESSION['experience']);
    $db->bind('comment', $_SESSION['comment']);
    $db->bind('mail', $_SESSION['mail']);
    $db->bind('tel', $_SESSION['tel']);
    $db->bind('conditions', $_SESSION['conditions']);
    $db->bind('token', $response['TOKEN']);

    $db->execute();
    $db->endTransaction();

    $paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=' . $response['TOKEN'];
    $_SESSION['paypal'] = $paypal;
  }

?>


<?php include("header.php"); ?>

<section id="main" class="wrapper style1">

  <div class="container">

    <!-- Content -->
    <section id="content">
      <?php include("confirm-check.php"); ?>
    </section>
  </div>
</section>

<?php include("footer.php"); ?>
