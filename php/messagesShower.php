<?php

$path = "../xml";

if ($handle = opendir($path)) {
  while (false !== ($file = readdir($handle))) {
    if ('.' === $file) continue;
    if ('..' === $file) continue;
    if ('.DS_Store' === $file) continue;
    $xml = simplexml_load_file("../xml/$file") or die("Error: Cannot create object");
    echo "<textarea readonly cols='45' rows='3'   name='message'>";
    echo $xml->content;
    echo '</textarea>';
  }
  closedir($handle);
}
?>
