<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <pre>
      <?php
        $web_development= array (
          'frontend'=> array (),
          'backend'=> array (),
        );
        $web_development ['frontend'][] = 'xhtml';
        $web_development ['backend'][] ='Ruby on Rails';
        $web_development ['frontend'][] = 'CSS';
        $web_development ['frontend'][] = 'FLASH';
        $web_development ['frontend'][] = 'JAVASCRIPT';
        $web_development ['frontend'][0] = 'html';
        $web_development ['frontend'][2] = '';
        print_r($web_development);

       ?>

    </pre>

  </body>
</html>
