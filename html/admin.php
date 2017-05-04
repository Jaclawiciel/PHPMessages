<?php
  session_start();
  $login = $_SESSION["login"];
  $password = $_SESSION["password"];

  if ($login != "Jacek" && $password != "admin123") {
    $_SESSION["status"] = 401;
    header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHPMessages</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
  </head>
  <body>
    <div id="content">
      <div id="header">
        <h1>PHPMessages</h1>
      </div>
      <div id="adminContent">
        <form>
          <h2>All messages</h2>
          <div class="messagesWithDelete">
            <div class="messageWithDelete">
              <textarea readonly cols="20" rows="4" name="message">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor erat in massa posuere, eu porta mi lobortis. Proin ac velit quis justo ultrices malesuada id quis mi.
              </textarea>
              <button class="button deleteButton">Delete</button>
            </div>
            <div class="messageWithDelete">
              <textarea readonly cols="20" rows="4" name="message">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor erat in massa posuere, eu porta mi lobortis. Proin ac velit quis justo ultrices malesuada id quis mi.
              </textarea>
              <button class="button deleteButton">Delete</button>
            </div>
            <div class="messageWithDelete">
              <textarea readonly cols="20" rows="4" name="message">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor erat in massa posuere, eu porta mi lobortis. Proin ac velit quis justo ultrices malesuada id quis mi.
              </textarea>
              <button class="button deleteButton">Delete</button>
            </div>
          </div>
          <a class="button blueButton" href="NewMessage.php">Add new message</a>
        </form>
        <a class="button" href="index.php">Log out</a>
      </div>
    </div>
  </body>
</html>
