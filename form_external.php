<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Forms</title>
  </head>
  <body>
    <form action="form_process.php" method="post">
      <input type="text" name="username" placeholder="Enter Username">
      <input type="password" name="password" placeholder="Enter Password">
      <!--need to use the name keyword, whic is what gets sent to $_POST-->
      <input type="submit" name="submit">
    </form>
  </body>
</html>
