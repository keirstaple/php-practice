<?php
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $username;
    echo "<br>";

    echo $password;
    echo "<br>";

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
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
          </div>

          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </body>
</html>
