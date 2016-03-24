<?php
session_start();

$lastname = htmlspecialchars($_GET["lastname"]);
$firstname = htmlspecialchars($_GET["firstname"]);
$category = htmlspecialchars($_GET["category"]);
$club = htmlspecialchars($_GET["club"]);
$session = session_id();

require 'database.php';
$db = new Database();

$db->beginTransaction();

$db->query("DELETE FROM bloc_2016_grimpeurs WHERE payer_id IS NULL AND nom=:nom AND prenom=:prenom AND categorie=:categorie AND club=:club AND session=:session");

$db->bind(':nom', $lastname);
$db->bind(':prenom' , $firstname);
$db->bind(':categorie', $category);
$db->bind(':club', $club);
$db->bind(':session', $session);

$db->execute();
$db->endTransaction();

header("Location: registration.php");
exit();
?>
