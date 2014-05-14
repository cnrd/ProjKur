<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Nørrebro Fighters</title>
        <style>
            .error{color: #FF5959;}
        </style>
    </head>
    <?php $selfSite = htmlspecialchars($_SERVER["HTTP_HOST"]);
          $createUser = "'" . "http://" . $selfSite . "/src/CreateUser.php" . "'";
          $login = "'" . "http://" . $selfSite . "/src/Login.php" . "'"; ?>

    <body>
      <center>
        This is a really simple index page for all pages in the project...</br>
        <a href= <?php echo $createUser; ?>>Create new user</a></br></br>
        <a href= <?php echo $login; ?>>Login page</a>
      </center>

</html>
