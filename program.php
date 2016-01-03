<?php include("header.php"); ?>
<?php require 'globals.php' ?>

<section id="main" class="wrapper style1">
  <header class="major">
    <h2>Déroulement</h2>
    <img src="images/slogan.png" style="border:none; width:50%;" alt="Débutant ou mutant, tu rentreras content !" />
  </header>
  <div class="container">

    <nav class="subnav">
      <ul>
        <li><a href="#program">Format de la compétition</a></li>
        <li><a href="#rules">Règles du jeu</a></li>
      </ul>
    </nav>

    <!-- Content -->
    <section id="content">

      <!--    **************** FILES ******************    -->
      <div id="files">
        <hr />

        <ul class="actions">
          <li><a href="data/program-full.pdf" class="button icon special fa-download">Programme prévisionnel</a></li>
          <li><a href="data/reglement.pdf" class="button icon special fa-download">Règlement officiel</a></li>
          <li><a href="data/autorisation_parentale.pdf" class="button icon special fa-download">Autorisation parentale</a></li>
        </ul>

      </div>

      <!--    **************** PROGRAM ******************    -->

      <div id="program">
        <hr />
        <section class="feature fa-clock-o">
          <h3>Format de la compétition</h3>

            <p>
              Les grimpeurs sont répartis dans un des deux circuits de
              leur catégorie d'âge, <u>en fonction du niveau annoncé à l'inscription</u>.
            </p>
            <ul>
              <li>Poussins et benjamins, filles et garçons : <b class="yellow">circuit jaune</b> ou <b class="blue">circuit bleu</b> (plus difficile).</li>
              <li>Minimes et cadets, filles et garçons : <b class="red">circuit rouge</b> ou <b class="black">circuit noir</b> (plus difficile).</li>
            </ul>

            <p>
              Ces circuits sont pensés pour que chacun puisse s'exprimer pleinement
              dans des blocs qui lui sont abordables.<br />
              Les grimpeurs auront connaissance de leur circuit lors du retrait de
              leur dossard.
            </p>

            <p>
              Le <b class="black">circuit noir</b> donnera lieu à des finales par catégorie d'âge (MF, MG, CF, CG).<br />
              Seuls les compétiteurs issus du <b class="blue">circuit bleu</b> ou du <b class="black">circuit noir</b> pourront prétendre au podium.
            </p>

            <p>
              <a class="fancybox-effects-c" href="images/src/program.svg">
                <img src="images/program.png" alt="Programme prévisionnel" style="border:none; width:90%;" />
              </a>
            </p>

            <table style="width:90%">
              <tr>
                <th style="text-align:center">Heure</th>
                <th style="text-align:center">Poussins / Benjamins</th>
                <th style="text-align:center">Minimes / Cadets</th>
              </tr>
              <tr style="text-align:center">
                <td>8h30 - 9h15</td>
                <td> - </td>
                <td>Pointage et retrait des dossards</td>
              </tr>
              <tr style="text-align:center">
                <td>9h30 - 12h00</td>
                <td>Pointage et retrait des dossards (11h/12h)</td>
                <td>Qualifications : <b class="red">circuit rouge</b> ou <b class="black">circuit noir</b></td>
              </tr>
              <tr style="text-align:center">
                <td>12h30 - 15h00</td>
                <td>Contest : <b class="yellow">circuit jaune</b> ou <b class="blue">circuit bleu</b></td>
                <td> - </td>
              </tr>
              <tr style="text-align:center">
                <td>15h30 - 16h30</td>
                <td>Encourager les plus grands !</td>
                <td>Finales pour les qualifiés issus du <b class="black">circuit noir</b></td>
              </tr>
              <tr style="text-align:center">
                <td>16h30</td>
                <td colspan="2" > Podiums, Remise des prix, <br /> et pour tous : Tirage au sort de la tombola </td>
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
              <li>Format contest : les grimpeurs ont 2h30 pour réussir le maximum de blocs du circuit qui leur a été attribué.</li>
              <li>Chaque circuit comporte entre 12 et 15 blocs, dont quelques surprises ludiques.</li>
              <li>Les grimpeurs disposent de 8 essais maximum par bloc.</li>
              <li>Le classement d'un participant est calculé
                en considérant le nombre de blocs qu'il a réussi, puis le
                nombre d'essais nécessaires.</li>
                <li>En cas d'égalité sur ces deux critères, un bloc de vitesse permet de départager les ex-aequos.</li>
              </ul>

              <h4 id="finals">Finales</h4>
              <ul>
                <li>Seul le <b class="black">circuit noir</b> est qualificatif pour des finales.</li>
                <li>Ainsi une finale sera proposée aux 5 premiers de leur catégorie d'âge (MF, MG, CF, CG).</li>
                <li>La finale se fera sous la forme d’un circuit de 3 blocs à-vue, chaque finaliste disposant de 3 essais maximum par bloc.</li>
                <li>Le classement des finalistes sera établi en fonction du nombre de bloc réussis, du nombre d'essais nécessaires, du nombre de "prise de zone", puis du nombre d'essais pour atteindre ces prises de zone.</li>
              </ul>

              <h4 id="prizes">Remise des prix</h4>
              <ul>
                <li>Les podiums seront annoncés par catégorie d'âge et de sexe.</li>
                <li>Seuls les compétiteurs issus des circuits les plus
                  difficiles (<b class="blue">circuit bleu</b>
                  ou <b class="black">circuit noir</b>) pourront y
                  prétendre.</li>
                  <li>Une récompense sera remise à tous les partipants.</li>
                </ul>

                <ul>
                  <li>Des (beaux) lots seront à gagner par tirage au sort. Tous les compétiteurs auront leur chance.</li>
                  <li>Notez qu'un gagnant qui ne se présenterait pas à l'appel de son nom verra le lot remis en jeu.</li>
                </ul>

                <h4 id="registration">Inscriptions</h4>
                <p>
                  Les inscriptions se déroulent intégralement <a href="registration.php" target="_blank"> via Internet </a> : saisie des informations et règlement de <?php echo $GLOBALS['registration-fee'] ?>€ <i>(non remboursable, sauf cas de force majeure avec présentation de justificatifs) </i>.
                  <br /> Une fois l'inscription terminée, vous recevrez un email de confirmation.
                  <br /> Merci de nous <a href="contact.php" target="_blank">contacter</a> pour tout problème.
                </p>

                <h4 id="parental">Autorisation parentale</h4>
                <p>
                  La personne effectuant l'enregistrement et le paiement pour un
                  participant mineur se porte garante d'avoir en sa possession <a href="images/autorisation_parentale.pdf" target="_blank">l'autorisation parentale écrite</a> relative à cette participation.
                </p>



              </section>
            </div>

            <hr />

          </section>
        </div>
      </section>

      <?php include("footer.php"); ?>
