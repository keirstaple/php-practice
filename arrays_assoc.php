<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $number = array('keir', 'john', 'sheila');

      print_r($number);

      echo $number[2] . "<br>";

      $names = array("first_name" => 'Keir', "Last_Name" => 'Diaz');

      // print_r($names);

      echo $names['first_name'] . " ". $names['Last_Name'];
     ?>
  </body>
</html>
