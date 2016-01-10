<?php
session_start();
include("header.php");
?>

<section id="main" class="wrapper style1">

  <header class="major">
    <h2>Inscription</h2>
  </header>

  <div class="container">

    <!-- Content -->
    <section id="content">

      <!-- CANDIDATES SUMMARY -->

      <form action="transaction-confirm.php" method="post">

        <fieldset>

          <h2>Contact</h2>

          <div class="left">
            <label for="email">Mail</label>
            <input type="email" id="email" name="email" placeholder="name@provider.com" required>
          </div>

          <div class="left">
            <label for="tel">Téléphone</label>
            <input type="tel" id="tel" name="telephone" placeholder="06XXXXXXXX" maxlength="10" pattern="[0][0-9]{9}" required>
          </div>

          <div class="clear">&nbsp;</div>

          <input type="checkbox" name="conditions" id="conditions" value="" required>
          <label for="conditions">En cochant cette case, vous acceptez les <a href="program.php" target="_blank">conditions d'inscription et le règlement de la compétition</a>.</label>
          <br>

          <ul class="actions">
            <li><a href="registration.php" class="button big icon" >Retourner au panier</a></li>
            <li><button type="submit" class="button big special" role="button" aria-disabled="false">Continuer</button></li>
          </ul>

        </fieldset>

      </form>

    </section>
  </div>
</section>
