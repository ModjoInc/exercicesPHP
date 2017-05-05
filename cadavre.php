<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
  <h1>Cadavre exquis en PHP</h1>
  <form method="get">
    <label for="sujet">Sujet</label><input type="text" id="sujet" name="sujet" >
    <br />
    <label for="verbe">Verbe</label><input type="text" id="verbe" name="verbe" >
    <br />
    <label for="comp">Complément</label><input type="text" id="comp" name="comp" >
    <br/>
    <select multiple id="genre" name="genre">
      <option value="F">Femme</option>
      <option value="H">Homme</option>
    <br/>
    <button type="submit">ENVOYER</button>

    <h1>
      echo($_GET['sujet'] . ' ' . $_GET['verbe'] . ' ' . $_GET['comp'] . '.' . "et je suis " . $_GET['genre']);
     ?></h1>
</body>
</html>
