<?php
  session_start();

  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    header('Location: gra.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Zaloguj się do gry!</h1>
    <form method="post" action="login.php">
      <label for="login">
        <input type="text" name="login" />
      </label>
      <br />
      <br />
      <label for="pass">
        <input type="password" name="pass" />
      </label>
      <br />
      <br />
      <input type="submit" value="ZALOGUJ" />
    </form>
    <?php
    if(isset($_SESSION['error'])){
      echo $_SESSION['error'];
    }
    ?>
  </body>
</html>
