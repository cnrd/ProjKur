<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
      <title>Nørrebro Fighters</title>
      <style>
        .error{color: #FF5959;}
      </style>
  </head>

  <?php
  include("config.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["user"] && $_POST["pwd"]){
      $user = $_POST["user"];
      $pwd = $_POST["pwd"];

      try {
          $dbh = new PDO($dbServer, $dbLogin, $dbPass);
      }
      catch (PDOException $e) {
          print "Error!: " . $e->getMessage() . "<br/>";
      die();
      }
      $userString = "SELECT password FROM LogInDatabase WHERE LogInEmail=?";
      $getUser = $dbh->prepare($userString);
      $getUser->execute(array($user));
      $userpwd = $getUser->fetchAll();
      $dbpwd = $userpwd[0][0];

      if($pwd == $dbpwd){
        echo "You have been logged in";
      }
    }
  }
  ?>

  <body>
    <center>
      <H1><font color="#798E89">Login</font></H1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="user" value="Brugernavn">
        <input type="password" name="pwd">
        <input type="submit" value="Submit">
      </form>
    </center>
  </body>
</html>
