<!doctype html>
<html>
  <body>
    <section id="top">
      <?php
        include 'header.php';
      ?>
    </section>

    <section id="register">
      <?php
        echo "Register below for your chance to win $10,000!<br><br>";
        if(!isset($_COOKIE['fname'])) {
          echo "<form method='post' action='PHP/register.php'>";
          echo "First name: <input type='text' name='fname'>";
          echo "<br>";
          echo "Last name: <input type='text' name='lname'>";
          echo "<br>";
          echo "Email: <input type='text' name='email'>";
          echo "<br>";
          echo "<input type='submit'>";
          echo "<br>";
          echo "<input type='hidden' name='submitted' value='true'>";
        } else {
          echo "Hi, " . $_COOKIE['fname'] . " you recently signed up with the email address: " . $_COOKIE['email'] . ", thank you!";
        }
      ?>
    </section>
  </body>
</html>
