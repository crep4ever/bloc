<?php
session_start();
$jqueryui = true;
include("header.php");
?>

<section id="main" class="wrapper style1">

  <header class="major">
    <h2>Saisie d'un participant</h2>
  </header>

  <div class="container">

    <!-- Content -->
    <section id="content">

      <form action="candidate-confirm.php" method="post">

        <fieldset>
          <div class="left">
            <label>Sexe</label>
            <input type="radio" name="sex" id="m" value="M" required>
            <label for="m">G</label>

            <input type="radio" name="sex" id="f" value="F">
            <label for="f">F</label>
          </div>

          <div class="left">
            <label for="lastname">Nom</label>
            <input type="text" name="nom" id="lastname" required>
          </div>

          <div class="left">
            <label for="firstname">Prénom</label>
            <input type="text" name="prenom" id="firstname" required>
          </div>

          <div class="left">
            <label for="datepicker">Date de naissance</label>
            <input type="text" name="naissance" id="datepicker" pattern="\d{1,2}/\d{1,2}/\d{4}" readonly="true" required>
          </div>

          <div class="clear">&nbsp;</div>

          <div class="left">
            <label>Sélectionnez votre fédération</label>
            <input type="radio" name="licence-type" id="ffme" value="FFME" required>
            <label for="ffme">FFME</label>

            <input type="radio" name="licence-type" id="ffcam" value="FFCAM">
            <label for="ffcam">FFCAM</label>

            <input type="radio" name="licence-type" id="unss" value="UNSS">
            <label for="unss">UNSS</label>
          </div>

          <div class="left">
            <label for="licence-num">Numéro de licence</label>
            <input type="text" name="licence-num" id="licence-num" pattern="\d{6}|\d{9}|\d{12}" required>
          </div>

          <div class="left">
            <label for="association">Club</label>
            <input type="text" name="club" id="association" placeholder="Écrivez puis sélectionnez la suggestion" required>
          </div>

          <script>
          $(function() {

            var availableClubs = ["ACS SAVOIE TECHNOLAC", "ASVEL SKI MONTAGNE", "ACCRO-ROC", "ALBERTVILLE ESCALADE",
            "ALPES CLUB", "AMICALE LAIQUE CHAPONOST", "AMICALE LAIQUE D'ANSE", "AMICALE LAIQUE DE JONAGE",
            "AMICALE LAIQUE ECHIROLLES", "ANNECY ESCALADE", "ARAIGNEE BLEU CIEL",
            "ASLGC ESCALADE", "ASPTT CHAMBERY", "ASPTT GRAND LYON MONTAGNE", "ASSOCIATION CLAIXOISE ESCALADE",
            "ASSOCIATION DES FAMILLES DE CRAPONNE", "BELLEDONNE GRIMPE", "BELLES GRIMPES EN BELLEDONNE", "BOBST LYON SPORTS",
            "BREDAROC", "CAF ALBERTVILLE", "CAF ANNECY COMPETITION", "CAF FAVERGES COMP", "CODC ESCALADE",
            "CORVI MONTAGNE", "CPEA VAULX EN VELIN", "CS VAL ISERE", "CSA 27ème B.C.A. Montagne Escalade",
            "CAF BELLEDONNE NORD", "CAF DSA DAUPHINE SKI ALPINISME",
            "DRAC VERCORS ESCALADE", "CAF GRENOBLE ISERE", "CAF GRENOBLE OISANS", "CAF GRESIVAUDAN", "CAF JEUNES EN MONTAGNE GRENOBLE", "CAF LA MURE MATHEYSINE",
            "CAF LA ROCHE BONNEVILLE", "CAF NORD DAUPHINE", "CAF OBIOU", "CAF PAYS D'OISANS", "CAF SAINT GEORGES D ESPERANCHE", "CAF SAINT MARTIN D'HERES",
            "CAF SALLANCHES COMPETITION", "CAF VALLEE DE LA GRESSE", "CAF VIENNE", "CAF VOIRON CHARTREUSE",
            "CROLLES GRESIVAUDAN ESCALADE", "CHAMBERY ESCALADE", "TIRE-CLOUS DU GRAND MANTI", "SARL CULTURE ROC",
            "ESCALADE VOIRON ALPINISME", "LIBRE ECART MARIGNIER", "ROC EVASION", "ESCALADE CLUB LA TRONCHE", "MOUSTE'CLIP", "CANTON GRIMP'", "BRON VERTICAL",
            "AS VILLEFONTAINE", "FRATERN BOURGOIN", "CAF LA ROCHETTE", "ART BLOC", "GRIMP ALTITUDE",
            "CAF EMBRUN", "ESCAPILADE", "CAF FAVERGES", "CARROZ VERTICAL", "CANYON ESCALADE TOURAINE",
            "GROUPE MONTAGNARD PETITES ROCHES", "CAF SALEVE ANNEMASSE", "CLUB EYBENS", "PIED MAIN ESCALADE", "MINERAL SPIRIT", "ESCAPADE", "LES LEZARDS VAGABONDS", "FOURNEL ARGENTIERE", "ASPTT GAP", "VERTIGE", "LA DEGAINE", "MROC", "UNSS", "CHARLAIX'SCALADE", "ROC DEVERS"];

            var accentMap = {
              "è": "e",
              "é": "e",
              "à": "a"
            };

            var normalize = function( term ) {
              var ret = "";
              for ( var i = 0; i < term.length; i++ ) {
                ret += accentMap[ term.charAt(i) ] || term.charAt(i);
              }
              return ret;
            };

            var strip = function ( str ) {
              return str.replace(/[\.:+*?|\\^$(){}\[\]-]/g, '');
            };

            $( "#association" ).autocomplete({
              source: function( request, response ) {
                var input = strip(request.term).split(/[ ,]+/);
                var results = [];
                for (var i = input.length - 1; i >=0 ; i--) {
                  var matcher = new RegExp( $.ui.autocomplete.escapeRegex( input[i] ), "i" );
                  results = results.concat($.grep( availableClubs, function( value ) {
                    value = value.label || value.value || value;
                    return matcher.test( strip(value) ) || matcher.test( normalize( strip(value) ) );
                  }));
                }

                var uniqueResults = [];
                $.each(results, function(i, el){
                  if($.inArray(el, uniqueResults) === -1) uniqueResults.push(el);
                });

                response(uniqueResults);
              }
            });
          });

          </script>

          <div class="clear">&nbsp;</div>

          <div>
            <label>Niveau maximum réalisé en voie</label>

            <input type="radio" name="niveau" id="4c" value="4c">
            <label for="4c">4c</label>

            <input type="radio" name="niveau" id="5a" value="5a">
            <label for="5a">5a</label>

            <input type="radio" name="niveau" id="5b" value="5b">
            <label for="5b">5b</label>

            <input type="radio" name="niveau" id="5c" value="5c">
            <label for="5c">5c</label>

            <input type="radio" name="niveau" id="6a" value="6a">
            <label for="6a">6a</label>

            <input type="radio" name="niveau" id="6b" value="6b">
            <label for="6b">6b</label>

            <input type="radio" name="niveau" id="6c" value="6c">
            <label for="6c">6c</label>

            <input type="radio" name="niveau" id="7a" value="7a">
            <label for="7a">7a</label>

            <input type="radio" name="niveau" id="7b" value="7b">
            <label for="7b">7b</label>

            <input type="radio" name="niveau" id="7c" value="7c">
            <label for="7c">7c</label>

          </div>

          <div>
            <textarea name="message" id="message" placeholder="Dites-nous en plus sur votre expérience (ou éventuellement vos résultats en compétition)" rows="4"></textarea>
          </div>

          <div class="clear">&nbsp;</div>

          <ul class="actions">
            <li><a href="registration.php" class="button big icon" >Retourner au panier</a></li>
            <li><button type="submit" class="button big special" role="button" aria-disabled="false">Valider</button></li>
          </ul>

        </fieldset>
      </form>

    </section>
  </div>
</section>

<?php include("footer.php"); ?>
