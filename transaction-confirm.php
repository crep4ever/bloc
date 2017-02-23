<?php
session_start();

/* Process contact form results and store them in $_SESSION */

$defaultValues = array(
    'email' => '',
    'telephone' => '',
    'conditions' => '',
);
$formValues = array_merge($defaultValues, $_POST);

$_SESSION['mail']          = trim(htmlspecialchars($formValues['email']));
$_SESSION['tel']           = trim(htmlspecialchars($formValues['telephone']));
$_SESSION['conditions'] = isset($formValues['conditions']);

require 'database.php';
$db = new Database();

// Get list of this session's registered candidates
$db->query("SELECT * FROM bloc_2017_grimpeurs WHERE session = :session AND payer_id IS NULL");
$db->bind(":session", session_id());
$nbCandidates = count($db->resultset());

require 'globals.php';
require 'paypal.php';

$product = array("name" => "Frais d'inscription",
"price"=> $GLOBALS['registration-fee'],
"count"=> $nbCandidates);

$port = 0;
$totalttc = $product['price'] * $product['count'];
$return = $GLOBALS['root-dir'] . '/transaction-process.php';
$cancel = $GLOBALS['root-dir'] . '/transaction-cancel.php';
$paypal = "#";
$paypal = new Paypal();
$params = array('RETURNURL' => $return,
'CANCELURL' => $cancel,
'PAYMENTREQUEST_0_AMT' => $totalttc + $port,
'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
'PAYMENTREQUEST_0_SHIPPINGAMT' => $port,
'PAYMENTREQUEST_0_ITEMAMT' => $totalttc,
'SOLUTIONTYPE' => 'Sole');

$params["L_PAYMENTREQUEST_0_NAME0"] = $product['name'];
$params["L_PAYMENTREQUEST_0_DESC0"] = 'Open de Bloc Grenoble 2016';
$params["L_PAYMENTREQUEST_0_AMT0"] = $product['price'];
$params["L_PAYMENTREQUEST_0_QTY0"] = $product['count'];

$response = $paypal->request('SetExpressCheckout', $params);

require 'error-handler.php';
set_error_handler("handleError");

if (!$response)
{
  $_SESSION['error'] = $paypal->errors;
  trigger_error("Impossible d'établir une connexion avec le service de paiement en ligne <a href=\"www.paypal.fr\">Paypal</a>.");
}
else
{
  $db->beginTransaction();

  $db->query("UPDATE bloc_2017_grimpeurs SET mail=:mail, tel=:tel, conditions=:conditions, token=:token WHERE session=:session AND payer_id IS NULL");

  $db->bind(':mail', $_SESSION['mail']);
  $db->bind(':tel', $_SESSION['tel']);
  $db->bind(':conditions', $_SESSION['conditions']);
  $db->bind(':token', $response['TOKEN']);
  $db->bind(':session', session_id());

  $db->execute();
  $db->endTransaction();

  $paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=' . $response['TOKEN'];
  $_SESSION['paypal'] = $paypal;
}

?>

<?php if ($response) { ?>

  <?php include("header.php"); ?>

  <section id="main" class="wrapper style1">

    <div class="container">

      <!-- Content -->
      <section id="content">
        <?php include("transaction-check.php"); ?>
      </section>
    </div>
  </section>

  <?php include("footer.php"); ?>

<?php } ?>
