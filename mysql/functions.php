<?php include "db.php"; ?>

<?php
  function showAllData() {
    //make sure connection is global
    global $connection;

    $query = "SELECT * FROM users ";

    //variable to test if it worked...mysqli_query performs query on the database
    $result = mysqli_query($connection, $query);

    //if mysql returns false, it will kill everything and return the error
    if(!$result) {
      die('Query FAILED' . mysqli_error());
    }


    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }

  function updateTable() {
    if(isset($_POST['submit'])) {
      global $connection;

      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      $query = "UPDATE users SET ";
      $query .= "username = '$username', ";
      $query .= "password = '$password' ";
      $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);
      if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
      } else {
        echo "Record Updated";
      }
    }
  }

  function deleteRows() {
    if(isset($_POST['submit'])) {
      global $connection;

      $username = $_POST['username'];
      $password = $_POST['password'];
      $id = $_POST['id'];

      $query = "DELETE from users ";
      $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);
      if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
      } else {
        echo "Record Deleted";
      }
    }
  }

  function createRows() {
    if(isset($_POST['submit'])){
      global $connection;

      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($connection) {
        echo "We are connected";
      } else {
        die("Database connection failed");
      }

      //this is SQL language that we're sending to the database
      $query = "INSERT INTO users(username,password)";

      //concatenates to line above
      $query .= "VALUES ('$username', '$password')";

      //variable to test if it worked...mysqli_query performs query on the database
      $result = mysqli_query($connection, $query);

      //if mysql returns false, it will kill everything and return the error
      if(!$result) {
        die('Query FAILED' . mysqli_error());
      } else {
        echo "Record Created";
      }
    }
  }

  function readRows() {
    //don't need isset() because we aren't posting anything from a form
    global $connection;

    $query = "SELECT * FROM users ";

    //variable to test if it worked...mysqli_query performs query on the database
    $result = mysqli_query($connection, $query);

    //if mysql returns false, it will kill everything and return the error
    if(!$result) {
      die('Query FAILED' . mysqli_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  }
?>
