<?php
  include "db.php";

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
        <form action="login_create.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <select name="id" id="">
              <option value="">1</option>
            </select>
          </div>

          <input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
        </form>
      </div>
    </div>
  </body>
</html>
