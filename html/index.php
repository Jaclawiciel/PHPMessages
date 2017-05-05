<?php
  session_start();
  $_SESSION["status"] = 200;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHPMessages</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
  </head>
  <body>
    <div id="content">
      <div id="messagesContent">
        <div id="header">
          <h1>PHPMessages</h1>
        </div>
        <form id="allMessagesForm">
          <h2>All messages</h2>
          <?php
          include '../php/messagesShower.php';
          ?>
        </form>
        <a class="button" href="login.php">Admin Panel</a>
        <?php
        if ($_SERVER['REQUEST_METHOD'] = "get") {
          if (@$_GET['logout'] == true) {
            $_SESSION['login'] = "";
            $_SESSION['password'] = "";
            echo "<h3 class='logOutMessage'>Log out successful!</h3>";
          }
        }
        ?>
      </div>
    </div>
  </body>
</html>
