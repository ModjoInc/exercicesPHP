<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
        $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
        foreach ($pronoms_personnels as $key) {
          echo $key;
          if ($key == 'Je' OR $key == 'Il/Elle') {
            echo ' code <br />';
          }
          elseif ($key == 'Tu') {
            echo ' codes <br />';
          }
          elseif ($key == 'Nous') {
            echo ' codons <br />';
          }
          elseif ($key == 'Vous') {
            echo ' codez <br />';
          }
          elseif ($key == 'Elles/Ils') {
            echo ' codent <br />';
          }
          };
       ?>
    </p>
    <p><?php
    /*$nombre_de_lignes = 1;
      while ($nombre_de_lignes <= 120)
      {
        echo $nombre_de_lignes . '<br />';
        $nombre_de_lignes++;
      };*/
     /*for ($i=1; $i <= 120; $i++) {
       echo $i . '<br />';
     }*/
     ?>
   </p>
   <p><?php
     $pays = array('BE' => 'Belgique','fr' =>  'France','es' =>  'Espagne','uk' =>  'UK','us' =>  'USA','ma' =>  'Maroc','it' =>  'Italie','bg' =>  'Bulgarie','ru' =>  'Russie','pe' =>  'Pérou','me' =>  'Mexique');
     echo '<form><select name="pays">';
     foreach ($pays as $key => $valeur) {
       echo  '<option value="' . $valeur . '">' . $key . '</option>';
     }
     echo '</select></form>';
    ?>
  </body>
</html>
