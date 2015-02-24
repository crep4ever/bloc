<?php

require 'globals.php';
require 'paypal.php';
require 'error.php';

// Set error handler
set_error_handler("handleError");

$product = array("name" => "Frais d'inscription",
		 "price"=> $GLOBALS['registration-fee'],
		 "count"=> 1);

$port = 0;
$totalttc = $product['price'];

$paypal = new Paypal();
$response = $paypal->request('GetExpressCheckoutDetails', 
			     array('TOKEN' => $_GET['token']));

if ($response)
  {
    if($response['CHECKOUTSTATUS'] == 'PaymentActionCompleted')
      {
	trigger_error("Ce paiement a déjà été validé. Vous n'avez pas été débité à nouveau.");
      }
  }
else
  {
    trigger_error("Erreur Paypal:" . $paypal->errors);
  }

$params = array('TOKEN' => $_GET['token'],
		'PAYERID'=> $_GET['PayerID'],
		'PAYMENTACTION' => 'Sale',

		'PAYMENTREQUEST_0_AMT' => $totalttc + $port,
		'PAYMENTREQUEST_0_CURRENCYCODE' => 'EUR',
		'PAYMENTREQUEST_0_SHIPPINGAMT' => $port,
		'PAYMENTREQUEST_0_ITEMAMT' => $totalttc);

$params["L_PAYMENTREQUEST_0_NAME0"] = $product['name'];
$params["L_PAYMENTREQUEST_0_DESC0"] = 'Open de Bloc Grenoble 2015';
$params["L_PAYMENTREQUEST_0_AMT0"] = $product['price'];
$params["L_PAYMENTREQUEST_0_QTY0"] = $product['count'];

$response = $paypal->request('DoExpressCheckoutPayment', $params);

if ($response)
  {
    $response['PAYMENTINFO_0_TRANSACTIONID'];

    $lastname = "Hello";
    $firstname = "world";
    $sex = "M";
    $birthday = "2000";
    $category ='cadet';
    $licenceType   = "FFME";
    $licenceNumber = "1234AB12";
    $club          = "CAF";
    $experience    = "5a";
    $comment       = "no comment";
    $mail          = "hellow.world@gmail.com";
    $tel           = "0699999999";
    $conditions = 1;

    require 'database.php';
    $db = new Database();

    $db->query("INSERT INTO bloc_participants(nom, prenom, sexe, naissance, categorie, licence_type, licence_number, club, experience, comment, mail, tel, conditions) VALUES(:nom, :prenom, :sexe, :naissance, :categorie, :licence_type, :licence_number, :club, :experience, :comment, :mail, :tel, :conditions)"); 

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

    $db->execute();
    
    $url = 'success.php';
  }
else
  {
    $url = 'cancel.php';
  }


header( "Location: $url" );
die();
?>
