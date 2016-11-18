<?php
  //don't need isset() because we aren't posting anything from a form
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if ($connection) {
      echo "We are connected";
    } else {
      die("Database connection failed");
    }

    //
    $query = "SELECT * FROM users";

    //variable to test if it worked...mysqli_query performs query on the database
    $result = mysqli_query($connection, $query);

    //if mysql returns false, it will kill everything and return the error
    if(!$result) {
      die('Query FAILED' . mysqli_error());
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="col-xs-6">
        <?php
          //returns associative array from database
          while($row = mysqli_fetch_row($result)) {
        ?>
        <pre>
          <?php
            //prints queried information
            print_r($row);
          ?>
        </pre>
          <?php
          //closes while loop
            }
          ?>
      </div>
    </div>
  </body>
</html>
