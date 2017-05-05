<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHPMessages</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <script>
      function loginError(status) {
        if (status == 401) {
          var ADElement = document.querySelector("#accessDenied");
          ADElement.classList.remove("hide");
        } else {
        var loginElement = document.querySelector("#loginInput");
        var passwordElement = document.querySelector("#passwordInput");
        var informationElement = document.querySelector("#loginError");
        loginElement.classList.add("negativeValidation");
        passwordElement.classList.add("negativeValidation");
        informationElement.classList.remove("hide");
        }
      }
    </script>
  </head>
  <body>
    <div id="content">
      <div id="header">
        <h1>PHPMessages</h1>
      </div>
      <form id="loginContent" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h2>Admin Panel</h2>
        <h3 id="loginError" class="hide">Wrong login or password...</h3>
        <h3 id="accessDenied" class="hide">Access denied...</h3>
        <input id="loginInput" type="text" name="login" placeholder="Login" autofocus class="credentials">
        <input id="passwordInput" type="password" name="password" placeholder="Password" class="credentials">
        <input type="submit" value="Log In" class="button">
      </form>
    </div>
  </body>
</html>
<?php
    if (@$_SESSION['login'] == "Jacek" && $_SESSION['password'] == "admin123") {
      header('Location: admin.php');
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $login = $_POST["login"];
      $password = $_POST["password"];
      $status = 200;

      $_SESSION["login"] = $login;
      $_SESSION["password"] = $password;
      $_SESSION["status"] = $status;

      if ($login == "Jacek" && $password == "admin123") {
        header('Location: admin.php');
      } else {
        echo "<script>loginError($status);</script>";
      }
    } elseif ($_SESSION["status"] == 401) {
      $status = $_SESSION["status"];
      echo "<script>loginError($status);</script>";
    }
?>
