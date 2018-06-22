<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/diamandFavicon.png">
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 750px)">
    <link rel="stylesheet" href="css/index.css" media="screen and (min-width: 751px)">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <title>Diamand's Car Nettoyant</title>
  </head>

  <body>
    <div class="conteneur">
      <h1 class="logo"><a href="index.php"><img src="img/diamandLogo.jpg" alt="logo"/></a></h1>
      <nav>
        <ul class="menu">
          <li><a href="diamandExterieur.php">Extérieur</a></li>
          <li><a href="diamandInterieur.php">Intérieur</a></li>
          <li><a href="diamandRenovation.php">Rénovation</a></li>
          <li><a href="diamandLustrage.php">Lustrage</a></li>
          <li><a href="diamandContact.php">Contact</a></li>
        </ul>
      </nav>

      <div class="menuDesktop">
      	<div class="marge">
      		<h2>Contact</h2>

          <form action="formulaire.php" method="post">
            <div>
              <label for="nom">Nom :</label>
              <input type="text" name="Nom">
            </div>
            <div>
              <label for="courriel">Courriel :</label>
              <input type="email" name="Courriel">
            </div>
            <div>
              <label for="message">Message :</label>
              <textarea name="Message"></textarea>
            </div>
            <div class="button">
              <button type="submit">Envoyer votre message</button>
            </div>
          </form>

      	</div>
      </div>

      <div class="menuMobile">
      	<div class="marge">
      		<h2>Contact</h2>

          <form action="formulaire.php" method="post">
            <div>
              <label for="nom">Nom:</label>
              <input type="text" name="Nom">
            </div>
            <div>
              <label for="courriel">Courriel:</label>
              <input type="email" name="Courriel">
            </div>
            <div>
              <label for="message">Message:</label>
              <textarea name="Message"></textarea>
            </div>
            <div class="button">
              <button type="submit">Envoyer votre message</button>
            </div>
          </form>

      	</div>
      </div>

      <footer>ZAE les 24 à Muncq-Nieurlet (62890)<br />Tél: 06 37 37 37 76</footer>

    </div>
  </body>
</html>
