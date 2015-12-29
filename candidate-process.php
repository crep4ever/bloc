<?php
session_start();
//require 'error-handler.php';
//set_error_handler("handleError");

var_dump($_SESSION);

require 'database.php';
$db = new Database();

$db->beginTransaction();

$db->query("INSERT INTO bloc_2016(nom, prenom, sexe, naissance, categorie, licence_type, licence_number, club, experience, comment, session) VALUES(:nom, :prenom, :sexe, :naissance, :categorie, :licence_type, :licence_number, :club, :experience, :comment, :session)");

$db->bind('nom', $_SESSION['lastname']);
$db->bind('prenom' , $_SESSION['firstname']);
$db->bind('sexe', $_SESSION['sex']);
$db->bind('naissance', $_SESSION['birthday_str']);
$db->bind('categorie', $_SESSION['category']);
$db->bind('licence_type', $_SESSION['licenceType']);
$db->bind('licence_number', $_SESSION['licenceNumber']);
$db->bind('club', $_SESSION['club']);
$db->bind('experience', $_SESSION['experience']);
$db->bind('comment', $_SESSION['comment']);
$db->bind('session', $_SESSION['session']);

$db->execute();
$db->endTransaction();

header("Location: registration.php");
exit();
?>
