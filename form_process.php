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
