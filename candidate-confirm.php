<?php
session_start();
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

    <!-- Content -->
    <section id="content">
      <?php include("candidate-check.php"); ?>
    </section>
  </div>
</section>

<?php include("footer.php"); ?>
