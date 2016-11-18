<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>For Each Loop</title>
  </head>
  <body>
    <?php

      $numbers = array(345, 346, 56, 677, 8875, 456);
      foreach($numbers as $number){
        echo $number . "<br>";
      }
    ?>
  </body>
</html>
