<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scope</title>
  </head>
  <body>
    <?php
      $x = "outside"; //global

      function convert(){
        global $x;
        $x = "inside"; //local
      }

      echo $x;
      echo "<br>";
      convert();
      echo $x;

    ?>
  </body>
</html>
