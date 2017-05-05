<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php
        // Write a function to calculate the factorial of a number (a non-negative integer). The function accepts the number as an argument
        function facto($nombre) {
          $resultat= ($nombre * facto($nombre - 1));
          return $resultat;
        }
        $nombre= 10;
        echo facto($nombre);
       ?>
    </p>
  </body>
</html>
