<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre><?php
    $famille = array('papa', 'maman', 'Habib', 'Yasmina', 'Rakiya', 'Brahim');
    print_r ($famille);
    echo"<br />";
    $plats= array('Paella', 'Banitsa', 'Miso Soup', 'Ramen');
    print_r($plats);
    echo"<br />";
    $films=array('The Leftovers', 'Shichinin no samurai', 'Sanjuro', 'Kimi no nawa', 'Memories of murder');
    print_r($films);
    echo '<br />' . 'Mon préféré est :' . '<em>' . $films[1] . '</em>';
     ?></pre>

    <pre><?php
       $papa=array (
         'age'=> 74,
         'prenom'=> 'Brahim',
         'nom'=> 'El Maaza',
         'aime_le_foot'=> True,
         'hobbies'=> array(
           'hobby1'=>'BodyBuilding',
           'hobby2'=>'Billard',
           'hobby3'=>'Lecture',
           )
         );
       $moi = array (
         'age'=> 45,
         'prenom'=> 'Habib',
         'nom'=> 'El Maaza Gomez',
         'aime_le_foot'=> True,
         'hobbies'=> array(
           'hobby1'=>'Lecture',
           'hobby2'=>'voyages',
           'hobby3'=>'Jeux vidéos',
           'hobby4'=>'La plage',
         ),
         //'papa'=> $papa,//
       );
       //ajout d'un élément au tableau//
       $moi['hobbies']['hobby5']= 'taxidermie';
       //remplacer//
       $moi['nom']= 'Dieudonné';
       print_r($moi);
       //compter//
       $resultat=count($moi[hobbies]);
       echo "J'ai " . "$resultat" . " hobbies";
       $resultat_papa=count($papa[hobbies]);
       echo "<br />" . "Mon père a " . $resultat_papa . " hobbies";
       $total= $resultat+$resultat_papa;
       echo "<br />" . "Au total, mon père et moi avons " . $total . " hobbies <br />";
       foreach ($moi as $cle => $elements)
            {
                echo $cle . ' contient ' . $elements . '<br />';
            }
       $toi = array(
            'hobbies' => array(
              'hobby1'=>'Lecture',
              'hobby2'=>'voyages',
              'hobby3'=>'shopping',
              'hobby4'=>'La plage',
            )
        );
        //fusion//
        $ame_soeur = array_merge ($moi,$toi);
        print_r($ame_soeur);
        //intersection//
      /*  $ame_soeur = array_intersect ($toi,$moi);
        print_r($ame_soeur);*/

     ?></pre>
  </body>
</html>
