<?php
  session_start();
  $login = $_SESSION["login"];
  $password = $_SESSION["password"];
  if ($login != "Jacek" && $password != "admin123") {
    $_SESSION["status"] = 401;
    header('Location: login.php');
  } else {
    if ($_GET) {
      echo "<h1>TEST GET</h1>";
      $messageContent = $_GET["message"];
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
      echo "<h1>TEST POST</h1>";
      $messageContent = $_POST["message"];
      $path = "../xml";
      $messageNumber = 1;
      $file = "";
      if ($handle = opendir($path)) {
        while(false !== ($file = readdir($handle))) {
          if ('.' === $file) continue;
          if ('..' === $file) continue;
          if ('.DS_Store' === $file) continue;
          $messageNumber = filter_var($file, FILTER_SANITIZE_NUMBER_INT) + 1;
        }
      }
      $messageFile = "message$messageNumber.xml";
      $xmlFile = fopen("../xml/$messageFile", "w");
      $newXMLMessage = "<?xml version='1.0' encoding='UTF-8'?>
<message>
  <content>
$messageContent
  </content>
</message>";
      fwrite($xmlFile, $newXMLMessage);
      fclose($xmlFile);
      header('Location: admin.php');
    }
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
      <div id="newMessageContent">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <h2>Add new message</h2>
          <textarea cols="45" rows="4" name="message" placeholder="Write your message here..." autofocus></textarea>
          <input type="submit" class="button blueButton" value="Submit">
        </form>
      </div>
    </div>
  </body>
</html>
