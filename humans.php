<html>
  <head><title>Exercices PHP</title></head>
  <body>
    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
    <pre><?php
    echo "<p>La devise de Becode est : </p>";
    $citation="In Code We Trust!";
    echo "<br/>";
    echo("<blockquote>" . "$citation" . "</blockquote>");
    echo "<br/>";
    $temperature=14;
    if( $temperature >= 15 ) {
  $vetement_du_jour = "T-shirt";
 } else {
   $vetement_du_jour = "Pull-over";
 }
    echo("Aujourd'hui il fait" . "<strong> " . "$temperature" . "</strong> degrés" . " , il est préférable de porter un <em>" . "$vetement_du_jour" . '</em>');
     echo '<br />';
     $prenom="Eric";
     echo 'Mon prénom est ' . $prenom;
     echo '<br />';
     $age=30;
     echo $age;
     echo '<br />';
     $faim= FALSE;
     $couleur_yeux="marrons";
     $famille = array(rakiya,yasmina, habib, pap,maman);

    ?></pre>

  </body>
</html>
