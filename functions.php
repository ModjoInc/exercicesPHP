<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
    <?php
    function premiere_majuscule ($mot){
      echo ucfirst($mot);
    };
     $mot="emile";
     premiere_majuscule($mot);
     echo "<br />";
     echo date('l jS \of F Y h:i:s A');


     function somme(int $a,int $b){
        $result = $a + $b;
        return $result;
     }
     echo "<br />";
     echo 'le résultat est ' . somme(4323213213141942,344321421421532432);
     echo "<br /";
 ?></pre>
 <hr />
<pre><?php
     function cap_size ($chaine) {
       $chaine2 = explode(' ', 'in code we trust');
       foreach ($chaine2 as $valeur) {
         echo strtoupper(substr($valeur, 0,1));
       };
     };
     $chaine='in code we trust';
     echo cap_size($chaine);
     ?>
   </pre>
   <hr />
   <pre>
     <?php
       function replace($chaine) {
         $chaine2=str_replace ( 'ae' , '&aelig;' , $chaine);
         echo $chaine2;
       };
       $chaine= "caecotrophie";
       replace($chaine);
      ?>
   </pre>
   <hr />
   <pre>
     <?php
     function alea($len) {
         $mot = array_merge(range('a', 'z'), range('A', 'Z'));
         shuffle($mot);
         return substr(implode($mot), 0, $len);
       };
        $len1 = rand (1,5);
        $len2 = rand (7,15);
       echo 'Mot aléatoire de 1 à 5 lettres : <strong>' . alea($len1) . '</strong><br />';
       echo 'Mot aléatoire de 7 à 15 lettres : <strong>' . alea($len2) . '</strong><br />';
       echo '<form method="get">
         <div><button type="submit">Rafraichir la page</button></div>
       </form>';
      ?>
   </pre>
   <hr />
   <pre><?php
     function minus($phrase) {
     $phrase2 = mb_strtolower($phrase);
     echo $phrase2;
   };
     $phrase = "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
     echo minus($phrase);
    ?>
   </pre>
   <hr />
   <pre><?php
     function volume($rayon,$hauteur) {
        $volume=$rayon * $rayon * 3.14 * $hauteur * (1/3);
        return $volume;
      }
      $rayon=5;
      $hauteur=2;
      echo 'Le volume d\'un cône de rayon égal à <strong>' . $rayon . '</strong> et de hauteur égale à <strong>' . $hauteur . '</strong> est de <strong>'. volume($rayon,$hauteur) . '</strong> cm<sup>3</sup><br />';
    ?>
   </pre>
   <hr />
   <pre>
     <?php
       function reverse_string($stringToReverse) {
         $reverse = strrev($stringToReverse);
         return $reverse;
       }
       $stringToReverse='in code we trust';
       echo reverse_string($stringToReverse);
      ?>
   </pre>
   <hr />
     <?php
     function buvons($guindaille, $lettre){
       $voyelle = array( "oup", "ais", "un", "ue", "u", "on", "a", "est","an","et", "e");
       $guindaille = str_replace($voyelle, $lettre, $guindaille);
       return $guindaille;
       echo $guindaille;
     };
     $lettre = array('E', 'I', 'O', 'U', 'OU', 'É', 'È', 'OI', 'UI', 'OUI', 'AN', 'IN', 'ON', 'UN', 'OIN');
     $guindaille = "Buvons un coup ma serpette est perdue,<br />Mais le manche, mais le manche,<br />Buvons un coup ma serpette est perdue<br />Mais le manche est revenu.<br />";
     foreach ($lettre as $key) {
      echo '<blockquote>' . buvons($guindaille,$key) . '</blockquote>';
      echo '<br />';
     };
     /*
     $voyelle = array( "oup", "ue", "u", "on","est","ais","an", "un","et", "e");
     $guindaille = str_replace($voyelle, "a", $guindaille);
     echo $guindaille;
     unset($guindaille);
     echo '<br />';
     $guindaille = "Buvons un coup ma serpette est perdue,<br />Mais le manche, mais le manche,<br />Buvons un coup ma serpette est perdue<br />Mais le manche est revenu.<br />";
     $voyelle = array( "oup", "ue", "u", "on","est","ais","an", "un","et", "e");
     $guindaille = str_replace($voyelle, "e", $guindaille);
     echo $guindaille;*/
      ?>
      <hr />
  </body>
</html>
