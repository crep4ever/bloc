<section id="enregistrement">

<h2>Se positionner</h2>

  <form action="benevole-confirm.php" method="post">

    <fieldset>

      <div class="left">
        <label for="lastname">Nom</label>
        <input type="text" name="nom" id="lastname" required>
      </div>

      <div class="left">
        <label for="firstname">Prénom</label>
        <input type="text" name="prenom" id="firstname" required>
      </div>

      <div class="left">
        <label for="email">Mail</label>
        <input type="email" id="email" name="email" placeholder="name@provider.com" required>
      </div>

      <div class="left">
        <label for="tel">Téléphone</label>
        <input type="tel" id="tel" name="telephone" placeholder="06XXXXXXXX" maxlength="10" pattern="[0][0-9]{9}">
      </div>

      <div class="clear">&nbsp;</div>

      <div class="left">
        <label>Missions souhaitées</label>
        <input type="checkbox" name="missions[]" id="installation" value="installation">
        <label for="installation">Installation de la salle</label>

        <input type="checkbox" name="missions[]" id="buvette" value="buvette">
        <label for="buvette">Buvette</label>

        <input type="checkbox" name="missions[]" id="pointage" value="pointage">
        <label for="pointage">Pointage</label>

        <input type="checkbox" name="missions[]" id="juge" value="juge">
        <label for="juge">Juge de bloc</label>

        <input type="checkbox" name="missions[]" id="saisie" value="saisie">
        <label for="saisie">Saisie des résultats</label>

        <input type="checkbox" name="missions[]" id="reportage" value="reportage">
        <label for="reportage">Reportage photo/video</label>

        <input type="checkbox" name="missions[]" id="rangement" value="rangement">
        <label for="rangement">Rangement de la salle</label>
      </div>

      <div class="clear">&nbsp;</div>

      <div class="left">
        <label>Disponibilité</label>
        <input type="radio" name="dispo" id="all" value="all">
        <label for="all">Toute la durée de la mission</label>

        <input type="radio" name="dispo" id="matin" value="matin">
        <label for="matin">Matin</label>

        <input type="radio" name="dispo" id="aprem" value="aprem">
        <label for="aprem">Après-midi</label>
      </div>

      <div class="clear">&nbsp;</div>

      <textarea name="message" id="message" placeholder="Un commentaire ?" rows="4"></textarea>

      <div class="clear">&nbsp;</div>

      <button type="submit" class="button big special" role="button" aria-disabled="false">Valider</button>

    </fieldset>
  </form>

</section>
