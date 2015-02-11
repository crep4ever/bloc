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
      <h1><a href="index.html">Open de bloc 2015<span> Grenoble </span></a></h1>
      <nav id="nav">
	<ul>
	  <li><a href="#one">Présentation</a></li>
	  <li><a href="program.html">Programme</a></li>
	  <li><a href="rules.html">Règlement</a></li>
	  <li><a href="registration.php">Inscription</a></li>
	  <li><a href="results.html">Résultats</a></li>
	  <li><a href="benevoles.html">Bénévoles</a></li>
	  <li><a href="media.html">Media</a></li>
	  <li><a href="contact.html">Contact</a></li>
	</ul>
      </nav>
    </header>

   <section id="main" class="wrapper style1">

   <?php
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
  $category = 'poussin';
endif;

$licenceType   = htmlspecialchars($_POST['licence-type']);
$licenceNumber = htmlspecialchars($_POST['licence-num']);
$club          = htmlspecialchars($_POST['club']);
$experience    = htmlspecialchars($_POST['niveau']);
$comment       = htmlspecialchars($_POST['message']);
$mail          = htmlspecialchars($_POST['email']);
$tel           = htmlspecialchars($_POST['telephone']);

$conditions = isset($_POST['conditions']);

try
{
  $bdd = new PDO('mysql:host=mysql.server;dbname=name;charset=utf8', 'login', 'password');
  $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
  die('Erreur de connexion à la base de données: ' . $e->getMessage());
}

try
{
  $req = $bdd->prepare('INSERT INTO participants(nom, prenom, sexe, naissance, categorie, licence_type, licence_number, club, experience, comment, mail, tel, conditions) VALUES(:nom, :prenom, :sexe, :naissance, :categorie, :licence_type, :licence_number, :club, :experience, :comment, :mail, :tel, :conditions)');

  $req->execute(array(
    'nom' => $lastname,
    'prenom' => $firstname,
    'sexe' => $sex,
    'naissance' => $birthday,
    'categorie' => $category,
    'licence_type' => $licenceType,
    'licence_number' => $licenceNumber,
    'club' => $club,
    'experience' => $experience,
    'comment' => $comment,
    'mail' => $mail,
    'tel' => $tel,
    'conditions' => $conditions
    ));
}
catch (Exception $e)
{
  die('Erreur pendant l\'enregistrement des informations du formulaire: ' . $e->getMessage());
}

?>

<p>
L'inscription du participant <?php echo $firstname $lastname ?> a été réalisée avec succès.
Une confirmation vous sera envoyée par email à l'adresse <?php echo $mail ?>.
En cas d'information incomplète ou erronée, merci de <a href=mailto:romain.goffe@gmail.com>contacter l'administrateur</a> au plus vite.
<p>
<a href="index.html">Cliquez ici</a> pour revenir au site et à bientot !
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
  echo garçon;
else:
  echo fille;
endif;
  ?></td>
</tr>

</table>


</p>
</section>
</body>
</html>
