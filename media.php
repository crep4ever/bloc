<?php
$fancybox = true;
include("header.php");

function display_gallery($images_directory, $images_basename, $images_count, $images_title)
{
  $html = "<div class=\"row 50% uniform\">";

  for ($i = 1; $i <= $images_count; $i++)
  {
    $html .= "<div class=\"4u 6u(3)\"><span class=\"image fit\">\n";
    $html .= "<a class=\"fancybox\" data-fancybox-group=\"gallery\" href=\"" . $images_directory . "/" . $images_basename . "_" . $i . ".jpg\">\n";
    $html .= "<img src=\"" . $images_directory . "/thumbnails/" . $images_basename . "_" . $i . ".jpg\" alt=\"" . $images_title . "\" />\n";
    $html .= "</a>\n";
    $html .= "</span></div>\n";
  }

  $html .= "</div>\n";
  echo $html;
}

?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Souvenirs</h2>
    <p>Revivez l'ambiance des éditions précédentes.</p>
  </header>
  <div class="container">
    <script type="text/javascript">

    jQuery(document).ready(function() {
      jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');

        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
      $('.fancybox').fancybox({
        margin : 80,
        maxHeight : 800
      });
    });
    </script>

    <nav class="subnav">
      <ul>
        <li><a href="#2016">Édition 2016</a></li>
        <li><a href="#2015">Édition 2015</a></li>
        <li><a href="#2013">Édition 2013</a></li>
      </ul>
    </nav>

    <!-- Content -->
    <section id="content">

      <div id="2016">
        <hr />
        <h3>Open de Bloc 2016</h3>

        <div class="tabs">

          <ul class="tab-links actions">
            <li class="active"><a href="#tab1-2016" class="icon fa-video-camera">Vidéo</a></li>
            <li><a href="#tab2-2016" class="icon fa-camera">Photos</a></li>
            <li><a href="#tab3-2016" class="icon fa-trophy">Résultats</a></li>
          </ul>

          <div class="tab-content">

            <div id="tab1-2016" class="tab active">
              <div class="videocontainer">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/BrDl-c1h5hs?rel=0" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>


            <div id="tab2-2016" class="tab">
              <p>
              <a href="https://drive.google.com/open?id=0B7619jy91UPlWGJkeHdMWURib28">   ----> Les <b> albums photos complets  </b> sont disponibles ici </a>
<br /><i>Remercions particulièrement Nils pour le montage vidéo, </i>
<br /><i>ainsi que Daniel, Grégoire, Sandrine, famille Salomon, Sarah et Yannick pour leurs prises de vue !</i>


              </p>

                <?php
                $directory = "images/2016";
                $basename = "open_bloc_grenoble_2016";
                $count = 27;
                $title = "Open de Bloc Grenoble 2016";
                display_gallery($directory, $basename, $count, $title);
                ?>
            </div>

            <div id="tab3-2016" class="tab">
              <p><b class="yellow">Circuit jaune</b></p>
              <ul>
                <li><a href="data/2016/results_microbes_filles.pdf">Microbes filles</a></li>
                <li><a href="data/2016/results_microbes_garcons.pdf">Microbes garçons</a></li>
              </ul>

              <p><b class="blue">Circuit bleu</b></p>
              <ul>
                <li><a href="data/2016/results_poussins_filles.pdf">Poussins filles</a></li>
                <li><a href="data/2016/results_poussins_garcons.pdf">Poussins garçons</a></li>
              </ul>

              <p><b class="red">Circuit rouge</b></p>
              <ul>
                <li><a href="data/2016/results_benjamins_filles.pdf">Benjamins filles</a></li>
                <li><a href="data/2016/results_benjamins_garcons.pdf">Benjamins garçons</a></li>
              </ul>

              <p><b class="black">Circuit noir</b></p>
              <ul>
                <li><a href="data/2016/results_minimes_filles.pdf">Minimes filles</a></li>
                <li><a href="data/2016/results_minimes_garcons.pdf">Minimes garçons</a></li>
              </ul>

            </div>

          </div>
      </div>

      <div id="2015">
        <hr />
        <h3>Open de Bloc 2015</h3>

        <div class="tabs">

          <ul class="tab-links actions">
            <li class="active"><a href="#tab1" class="icon fa-video-camera">Vidéo</a></li>
            <li><a href="#tab2" class="icon fa-camera">Photos</a></li>
            <li><a href="#tab3" class="icon fa-trophy">Résultats</a></li>
          </ul>

          <div class="tab-content">
            <div id="tab1" class="tab active">
              <div class="videocontainer">
                <iframe width="100%" height="360" src="https://www.youtube.com/embed/hsW-9uYXcBM?rel=0" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>

            <div id="tab2" class="tab">
              <p>
                Vous pouvez consulter et télécharger toutes les photos de
                l'événement sur l'<a href="https://goo.gl/photos/Ur4FD8qx9gXzPG3Q8">album photo</a> dédié.
              </p>
              <div class="box alt">
                <?php
                $directory = "images/2015";
                $basename = "open_bloc_grenoble";
                $count = 24;
                $title = "Open de Bloc Grenoble 2015";
                display_gallery($directory, $basename, $count, $title);
                ?>
              </div>
            </div>

            <div id="tab3" class="tab">
              <ul>
                <li><a href="data/2015/categories_pb.pdf"><b class="black">Catégories Poussins et Benjamins</b></a></li>
                <li><a href="data/2015/categories_mc.pdf"><b class="black">Catégories Minimes et Cadets</b></a></li>
                <li>
                  <a href="data/2015/circuit_jaune.pdf"><b class="yellow">Circuit Jaune</b></a>
                  <a href="data/2015/circuit_bleu.pdf"><b class="blue">Circuit Bleu</b></a>
                </li>
                <li>
                  <a href="data/2015/circuit_rouge.pdf"><b class="red">Circuit Rouge</b></a>
                  <a href="data/2015/circuit_noir.pdf"><b class="black">Circuit Noir</b></a>
                </li>
              </ul>

              <div class="box alt">
                <?php
                $directory = "images/2015";
                $basename = "open_bloc_grenoble_podiums";
                $count = 15;
                $title = "Open de Bloc Grenoble 2015";
                display_gallery($directory, $basename, $count, $title);
                ?>
              </div>
            </div>
          </div>

        </div>
        <div id="2013">

          <hr />
          <h3>Open de Bloc 2013</h3>
          <div class="videocontainer">
            <iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x10tmc5" allowfullscreen></iframe>
            <br />
            <a href="http://www.dailymotion.com/video/x10tmc5_teaser-open-de-bloc-jeune-de-grenoble-2013-hd_sport">
              Teaser Open de Bloc Jeune de Grenoble 2013 HD
            </a>
            <i>par <a href="http://www.dailymotion.com/CMEV">CMEV</a></i>
          </div>
        </div>

      </div>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
