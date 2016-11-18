<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Constants</title>
  </head>
  <body>
    <?php
      $number = 10;
      echo $number."<br>";
      define("NAME", 'Keir'); //makes this a constant -- thus you can't redefine
      echo NAME;
    ?>
  </body>
</html>
