<?php include("header.php"); ?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Souvenirs</h2>
    <p>Revivez l'ambiance des éditions précédentes</p>
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
        <li><a href="#2015">Édition 2015</a></li>
        <li><a href="#2013">Édition 2013</a></li>
      </ul>
    </nav>

    <!-- Content -->
    <section id="content">

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
                <div class="row 50% uniform">

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_1.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_1.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_2.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_2.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_3.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_3.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_4.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_4.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_5.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_5.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_6.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_6.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_7.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_7.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_8.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_8.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_9.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_9.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_10.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_10.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_11.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_11.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_12.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_12.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_13.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_13.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_14.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_14.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_15.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_15.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_16.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_16.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_17.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_17.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_18.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_18.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_19.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_19.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_20.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_20.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_21.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_21.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_22.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_22.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_23.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_23.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_24.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_24.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                </div>
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
                <div class="row 50% uniform">

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_1.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_1.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_2.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_2.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_3.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_3.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_4.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_4.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_5.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_5.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_6.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_6.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_7.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_7.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_8.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_8.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_9.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_9.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_10.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_10.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_11.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_11.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_12.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_12.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_13.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_13.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_14.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_14.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                  <div class="4u 6u(3)"><span class="image fit">
                    <a class="fancybox" data-fancybox-group="gallery" href="images/2015/open_bloc_grenoble_podiums_15.jpg">
                      <img src="images/2015/thumbnails/open_bloc_grenoble_podiums_15.jpg" alt="Open de Bloc Grenoble 2015" />
                    </a>
                  </span></div>

                </div>
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
            <a href="http://www.dailymotion.com/video/x10tmc5_teaser-open-de-bloc-jeune-de-grenoble-2013-hd_sport" target="_blank">
              Teaser Open de Bloc Jeune de Grenoble 2013 HD
            </a>
            <i>par <a href="http://www.dailymotion.com/CMEV" target="_blank">CMEV</a></i>
          </div>
        </div>

      </div>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
