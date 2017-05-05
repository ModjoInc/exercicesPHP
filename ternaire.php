<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="GET">
      <p>Homme ou femme?</p>
      <label for "genre">F<input type="radio" name="genre" value="F">
      </label>
      <label for "genre">H<input type="radio" name="genre" value="H">
      </label>
      <div><button type="submit">Envoyer</button></div>
    </form>

    </form>
    <?php
      $bonjour="";
      $genre=$_GET["genre"];
      echo $bonjour = ($genre=="F") ? "Bonjour Madame" :  "Bonjour Monsieur";
     ?>
  </body>
</html>
