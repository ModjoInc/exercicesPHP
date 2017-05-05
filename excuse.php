<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>Générateur d'excuses</h2>
     <form method="get">
       <label for="nom">Le nom de l'enfant : <input type="text" name="nom"></label><br />
       <label for="instit">Le nom de l'institutrice : <input type="text" name="instit"></label><br />
       <label for="raison">La raison de l'absence : <input type="text" name="raison"></label><br />
       <select multiple name="genre">
         <option value="F">Femme</option>
         <option value="H">Homme</option>
       </select>
       <br/>
       <p><button type="submit">Envoyez!</button>
     </form>
     <?php
       $article = 'il';
       if ($_GET['genre'] = 'F') {
         $article = 'elle';
       }
       else {
         $article = 'il';
       }
       ?>
     <p>Madame <?= $_GET['instit'] ?>,</p>
     <p><?= $_GET['nom'] ?> ne pourra pas être présente à l'école ce jour pour la simple et bonne raison
       qu'<?= $article ?> <?= $_GET['raison'] ?>.</p>
  </body>
</html>
