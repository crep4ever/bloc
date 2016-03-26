<?php
$fancybox = true;
include("header.php");
require 'globals.php'
?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Déroulement</h2>
    <img src="images/slogan.png" style="border:none; width:50%;" alt="Débutant ou mutant, tu rentreras content !" />
    <p>
      Le club Drac Vercors Escalade vous invite à la 4ème édition de l'Open de bloc de Grenoble.<br />
      Une compétition d'escalade ludique ouverte aux Microbes, Poussins, Benjamins et Minimes, licenciés FFCAM, FFME ou UNSS.
    </p>
  </header>
  <div class="container">

    <nav class="subnav">
      <ul>
        <li><a href="#files">Fichiers utiles</a></li>
        <li><a href="#program">Format de la compétition</a></li>
        <li><a href="#rules">Règles du jeu</a></li>
      </ul>
    </nav>

    <!-- Content -->
    <section id="content">

      <!--    **************** FILES ******************    -->
      <div id="files">
        <hr />
        <section class="feature fa-file-pdf-o">
          <h3>Fichiers utiles</h3>
          <ul class="actions">
            <li><a href="data/2016/program-full.pdf" class="button icon special fa-download">Programme prévisionnel</a></li>
            <li><a href="data/2016/reglement.pdf" class="button icon special fa-download">Règlement officiel</a></li>
            <li><a href="data/2016/autorisation_parentale.pdf" class="button icon special fa-download">Autorisation parentale</a></li>
          </ul>
        </section>
      </div>

      <!--    **************** PROGRAM ******************    -->

      <div id="program">
        <hr />
        <section class="feature fa-clock-o">
          <h3>Format de la compétition</h3>

            <p>
              Les grimpeurs s'intéressent au circuit de leur catégorie d'âge.
            </p>
            <ul>
              <li>Microbes (filles et garçons)&nbsp;: <b class="yellow">circuit jaune</b> </li>
              <li>Poussins (filles et garçons)&nbsp;: <b class="blue">circuit bleu</b> </li>
              <li>Benjamins (filles et garçons)&nbsp;: <b class="red">circuit rouge</b> </li>
              <li>Minimes (filles et garçons)&nbsp;: <b class="black">circuit noir</b> </li>
            </ul>

            <p>
              Chaque circuit est composé de 16 blocs, classés par ordre de difficulté croissante.
            </p>
            <p>
              <b>IMPORTANT : Seules les 10 meilleures performances compteront dans le classement.</b>
            </p>

            <p>
              Les circuits Benjamins et Minimes donneront lieu à des finales par catégorie d'âge et de sexe.<br />
            </p>

            <p>
              <a class="fancybox-effects-c" href="images/src/program.svg">
                <img src="images/program.png" alt="Programme prévisionnel" style="border:none; width:90%;" />
              </a>
            </p>

            <table style="width:90%">
              <tr>
                <th style="text-align:center">Heure</th>
                <th style="text-align:center">Microbes / Poussins </th>
                <th style="text-align:center">Benjamins / Minimes</th>
              </tr>
              <tr style="text-align:center">
                <td>8h30 - 9h15</td>
                <td> - </td>
                <td>Pointage et retrait des dossards</td>
              </tr>
              <tr style="text-align:center">
                <td>9h30 - 12h00</td>
                <td>Pointage et retrait des dossards (11h/12h)</td>
                <td>Qualifications : <b class="red">Benjamin(e)s</b> ou <b class="black">Minimes</b></td>
              </tr>
              <tr style="text-align:center">
                <td>12h30 - 15h00</td>
                <td>Contest : <b class="yellow">Microbes</b> ou <b class="blue">Poussin(e)s</b></td>
                <td> - </td>
              </tr>
              <tr style="text-align:center">
                <td>15h30 - 16h30</td>
                <td>Encourager les plus grands !</td>
                <td>Finales <b class="red">Benjamin(e)s</b> et <b class="black">Minimes</b></td>
              </tr>
              <tr style="text-align:center">
                <td>16h30</td>
                <td colspan="2" >Podiums, Remise des prix, <br /> et pour tous&nbsp;: Tirage au sort de la tombola </td>
              </tr>
            </table>

          </section>
        </div>

        <!--    **************** RULES ******************    -->

        <div id="rules">
          <hr />
          <section class="feature fa-file">
            <h3>Règles du jeu</h3>

            <p>Cette compétition s'adresse aux licenciés FFCAM, FFME ou UNSS.</p>
            <h4 id="contest">Contest</h4>

            <ul>
              <li>Chaque circuit comporte 16 blocs triés par difficulté croissante, dont quelques surprises ludiques.</li>
              <li>Format contest&nbsp;: les grimpeurs ont 2h30 pour réussir leur 10 meilleures performances parmi les blocs de leur circuit. </li>
              <li>Les grimpeurs disposent de 8 essais maximum par bloc.</li>
              <li>Le classement d'un participant est calculé
                en considérant le nombre de points rapportés par ses 10 meilleures performances, puis le
                nombre d'essais nécessaires pour les réaliser.</li>
                <li>En cas d'égalité sur ces deux critères, un bloc de vitesse permet de départager les ex-aequos.</li>
              </ul>

              <h4 id="finals">Finales</h4>
              <ul>
                <li>Les circuits <b class="red">Benjamin(e)s</b> et <b class="black">Minimes</b> sont qualificatifs pour des finales.</li>
                <li>Ainsi une finale sera proposée aux 5 premiers de leur catégorie d'âge (BF, BG, MF, MG).</li>
                <li>La finale se fera sous la forme d’un circuit de 3 blocs à-vue, chaque finaliste disposant de 3 minutes par bloc.</li>
                <li>Le classement des finalistes sera établi en fonction du nombre de bloc réussis, du nombre d'essais nécessaires, du nombre de "prises de zone", puis du nombre d'essais pour atteindre ces prises de zone.</li>
              </ul>

              <h4 id="prizes">Remise des prix</h4>
              <ul>
                <li>Les podiums seront annoncés par catégorie d'âge et de sexe.</li>
                  <li>Une récompense sera remise à tous les partipants.</li>
                </ul>

                <ul>
                  <li>Des (beaux) lots seront à gagner par tirage au sort. Tous les compétiteurs auront leur chance.</li>
                  <li>Notez qu'un gagnant qui ne se présenterait pas à l'appel de son nom verra le lot remis en jeu.</li>
                </ul>

                <h4 id="registration">Inscriptions</h4>
                <p>
                  Les inscriptions se déroulent intégralement
                  <a href="registration.php"> via Internet </a>&nbsp;:
                  saisie des informations et règlement de <?php echo $GLOBALS['registration-fee'] ?>€ <i>(non remboursable, sauf cas de force majeure avec présentation de justificatifs) </i>.
                  <br /> Une fois l'inscription terminée, vous recevrez un email de confirmation.
                  <br /> Merci de nous <a href="contact.php">contacter</a> pour tout problème.
                </p>

                <h4 id="parental">Autorisation parentale</h4>
                <p>
                  La personne effectuant l'enregistrement et le paiement pour un
                  participant mineur se porte garante d'avoir en sa possession
                  <a href="data/2016/autorisation_parentale.pdf">l'autorisation parentale écrite</a>
                  relative à cette participation.
                </p>
              </section>
            </div>

            <hr />

          </section>
        </div>
      </section>

      <?php include("footer.php"); ?>
