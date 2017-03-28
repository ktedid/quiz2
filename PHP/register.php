<!doctype html>
<html>
  <head>
    <?php include 'header.php'; ?>
    <link href="../CSS/style.css?v=<?=time();?>" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <?php
      if(!empty($_POST)) {
        setcookie('fname', $_POST['fname'], time() + (86400 * 30), "/");
        setcookie('lname', $_POST['lname'], time() + (86400 * 30), "/");
        setcookie('email', $_POST['email'], time() + (86400 * 30), "/");

        echo "You have successfully registered! Good luck! <br><br>";
        echo "<a href='welcome.php'>Go back</a>";

      }
    ?>
  </body>
</html>
