<?php
//super global
//$_POST is associative array
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $minimum = 5;
  $maximum = 10;
  $name = array("Edwin", "Student", "Peter", "Samid", "Mohad");

  if (strlen($username) < $minimum) {
    echo "<h3 class='error'>Username has to be longer than 5 characters</h3>";
  }
  if (strlen($username) > $maximum) {
    echo "<h3 class='error'>Username can't be longer than 10 characters</h3>";
  }

  if(!in_array($username, $name)){
    echo "<h3 class='error'>Sorry, login failed</h3>";
  } else {
    echo "<h3 class'welcome'>Welcome!</h3>";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forms</title>
  </head>
  <body>
    <form action="form.php" method="post">
      <input type="text" name="username" placeholder="Enter Username">
      <input type="password" name="password" placeholder="Enter Password">
      <!--need to use the name keyword, whic is what gets sent to $_POST-->
      <input type="submit" name="submit">
    </form>
  </body>
</html>
