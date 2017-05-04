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
        <form>
          <h2>All messages</h2>
          <textarea readonly cols="45" rows="4" name="message">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor erat in massa posuere, eu porta mi lobortis. Proin ac velit quis justo ultrices malesuada id quis mi.
          </textarea>
          <textarea readonly cols="45" rows="4" name="message">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor erat in massa posuere, eu porta mi lobortis. Proin ac velit quis justo ultrices malesuada id quis mi.
          </textarea>
          <textarea readonly cols="45" rows="4" name="message">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor erat in massa posuere, eu porta mi lobortis. Proin ac velit quis justo ultrices malesuada id quis mi.
          </textarea>
        </form>
        <a class="button" href="login.php">Admin Panel</a>
      </div>
    </div>
  </body>
</html>
<?php
  session_start();
  $_SESSION["status"] = 200;
?>
