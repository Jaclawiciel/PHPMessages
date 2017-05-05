<?php
/*
          $messageNumber = 1;
          $messageFile = "message$messageNumber.xml";
          while (simplexml_load_file("../xml/$messageFile")) {
            $xml = simplexml_load_file("../xml/$messageFile") or die("Error: Cannot create object");
            echo "<textarea readonly cols='45' rows='3' name='message'>";
            echo $xml->content;
            echo '</textarea>';
            $messageNumber++;
            $messageFile = "message$messageNumber.xml";
          }
*/

$messageNumber = 1;
$messageFile = "message$messageNumber.xml";
while (file_exists('../xml/'.$messageFile)) {
  $xml = simplexml_load_file("../xml/$messageFile") or die("Error: Cannot create object");
  echo "<textarea readonly cols='45' rows='3' name='message'>";
  echo $xml->content;
  echo '</textarea>';
  $messageNumber++;
  $messageFile = "message$messageNumber.xml";
}
          ?>
