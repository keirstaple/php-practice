<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Passing Parameters to Functions</title>
  </head>
  <body>
    <?php
      function greeting($message) {
        echo $message;
      }
      greeting("Hi Customer how are you?" . '<br>');

      function calculate($number1, $number2) {
        $sum = $number1 + $number2;
        echo $sum;
      }

      calculate(12, 24);
    ?>
  </body>
</html>
