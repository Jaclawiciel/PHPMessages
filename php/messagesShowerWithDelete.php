<?php

$path = "../xml";
$messageNumber = 1;
if ($handle = opendir($path)) {
  while (false !== ($file = readdir($handle))) {
    if ('.' === $file) continue;
    if ('..' === $file) continue;
    if ('.DS_Store' === $file) continue;
    $xml = simplexml_load_file("../xml/$file") or die("Error: Cannot create object");

    echo '<div class="messageWithDelete">';
    echo "<textarea readonly name='message'>";
    echo $xml->content;
    echo '</textarea>';
    echo "<input type='submit' name='$messageNumber' value='Delete'  class='button deleteButton'>";
    echo '</div>';
    $messageNumber++;
  }
  closedir($handle);
}
?>
