<!DOCTYPE HTML>

<html lang="fr">

<head>
  <title>Open de bloc 2016</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Open de bloc de Grenoble 2016" />
  <meta name="keywords" content="escalade, open, bloc, compétition, grenoble, drac vercors escalade" />
  <meta name="viewport" content="initial-scale=1"/>
  <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!--
  <script type="text/javascript" src="js/jquery.dropotron.min.js" defer></script>
  <script type="text/javascript" src="js/jquery.slidertron.min.js" defer></script>
  <script type="text/javascript" src="js/jquery.scrollgress.min.js" defer></script>

  <script src="js/skel.min.js"></script>
  <script src="js/skel-layers.min.js"></script>
  <script src="js/init.min.js"></script>
-->
  <script src="js/combined.min.js"></script>

  <noscript>
    <link rel="stylesheet" href="css/skel.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <link rel="stylesheet" href="css/style-xlarge.min.css" />
  </noscript>
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
  <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

  <link rel="stylesheet" href="css/bloc.min.css" />

<?php if (isset($jqueryui) && $jqueryui == true) { ?>
  <!-- Add jquery-ui module -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="http://jqueryui.com/resources/demos/datepicker/datepicker-fr.js"></script>
  <script>
    $(function() {
      $.datepicker.setDefaults($.extend(
        { dateFormat: 'dd/mm/yy',
        defaultDate: '01/01/2008',
        changeYear: true,
        changeMonth: true,
        yearRange: "2001:2008" },
        $.datepicker.regional['fr']
      ));

      $( '#datepicker' ).datepicker({
        // restore input field style when a date is selected
        onSelect: function(dateText, inst) {
          $( this ).css( 'background', 'rgba(144, 144, 144, 0.075)' );
          $( this ).css( 'border-color', '#ccc' );
        }
      });
    });
  </script>
<?php } ?>

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
  <link rel="manifest" href="images/icons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">


  <!-- Open graph -->
  <meta property="og:title" content="Open de bloc Grenoble 2016" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://www.openblocgrenoble.fr" />
  <meta property="og:image" content="http://www.openblocgrenoble.fr/images/open-bloc-2016.jpg" />

<?php if (isset($fancybox) && $fancybox == true) { ?>
  <!-- Add fancyBox module -->
  <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />
  <script type="text/javascript" src="js/jquery.fancybox.min.js" defer></script>
  <script type="text/javascript">
    $(document).ready(function() {

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });
    });
  </script>

<?php } ?>


</head>
<body class="landing">
  <?php include_once("analyticstracking.php") ?>
  <!--[if lt IE 8]>
  <p class="browserupgrade">
    La version de votre navigateur internet est <strong>obsolète</strong>.
    Pensez à le <a href="http://browsehappy.com/">mettre à jour</a> afin d'améliorer votre expérience.
  </p>
  <![endif]-->

  <!-- Header -->
  <header id="header" class="alt skel-layers-fixed">
    <h1>
      <a href="index.php">Open de bloc Grenoble 2016</a>
      <span>&nbsp;&nbsp;par le club&nbsp;&nbsp;</span>
      <a href="http://fontaine-en-montagne.ffcam.fr">Drac Vercors Escalade</a>
    </h1>
    <nav id="nav">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="program.php">Déroulement</a></li>
        <li><a href="registration.php">Inscriptions</a></li>
        <li><a href="benevoles.php">Bénévoles</a></li>
        <li><a href="media.php">Souvenirs</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
