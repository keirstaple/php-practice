<?php include "db.php"; ?>

<?php
  function showAllData() {
    //make sure connection is global
    global $connection;
    
    $query = "SELECT * FROM users";

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
?>
