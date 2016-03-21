<?php
session_start();

require 'globals.php';

require 'database.php';
$db = new Database();

include("header.php");

/* Process candidate form results and store them in $_SESSION */

$_SESSION['lastname']  = strtoupper(trim(htmlspecialchars($_POST['nom'])));
$_SESSION['firstname'] = ucwords(trim(htmlspecialchars($_POST['prenom'])));
$_SESSION['sex']       = htmlspecialchars($_POST['sex']);
$_SESSION['birthday']  = htmlspecialchars($_POST['naissance']);

$birthday = explode("/", $_SESSION['birthday']);
$day   = $birthday[0];
$month = $birthday[1];
$year  = $birthday[2];
$_SESSION['birthday_str']  = $year . '-' . $month . '-' . $day;

$_SESSION['category'] = 'invalid';
if ($year == '2001' || $year == '2002')
{
  $_SESSION['category'] ='minime';
}
else if ($year == '2003' || $year == '2004')
{
  $_SESSION['category'] = 'benjamin';
}
else if ($year == '2005' || $year == '2006')
{
  $_SESSION['category'] = 'poussin';
}
else if ($year == '2007' || $year == '2008')
{
  $_SESSION['category'] = 'microbe';
}

$_SESSION['sex_str']       = ($_SESSION['sex'] == 'M') ? 'garçon' : 'fille';
$_SESSION['licenceType']   = htmlspecialchars($_POST['licence-type']);
$_SESSION['licenceNumber'] = trim(htmlspecialchars($_POST['licence-num']));
$_SESSION['club']          = strtoupper(trim(htmlspecialchars($_POST['club'])));
$_SESSION['experience']    = htmlspecialchars($_POST['niveau']);
$_SESSION['comment']       = trim(htmlspecialchars($_POST['message']));
$_SESSION['session']       = session_id();

?>

<section id="main" class="wrapper style1">
  <div class="container">
    <section id="content">
      <?php include("candidate-check.inc.php"); ?>
    </section>
  </div>
</section>

<?php include("footer.php"); ?>
