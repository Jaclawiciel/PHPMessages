<?php
  session_start();
  $login = $_SESSION["login"];
  $password = $_SESSION["password"];

  if ($login != "Jacek" && $password != "admin123") {
    $_SESSION["status"] = 401;
    header('Location: login.php');
  } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = "../xml";
    $messageNumber = 1;
    if ($handle = opendir($path)) {
      while (false !== ($file = readdir($handle))) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;
        if ('.DS_Store' === $file) continue;
        if (isset($_POST[$messageNumber])) {
          unlink("../xml/$file");
        }
        $messageNumber++;
      }
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
      <div id="adminContent">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <h2>All messages</h2>
          <div class="messagesWithDelete">
            <?php include '../php/messagesShowerWithDelete.php'; ?>
          </div>
          <a class="button blueButton" href="NewMessage.php">Add new message</a>
        </form>
        <a class="button" href="index.php?logout=true">Log out</a>
      </div>
    </div>
  </body>
</html>
