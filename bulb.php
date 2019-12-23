<?php

if($_GET['action'] == 'call_this') {
    $myfile = fopen("test.txt", "w") or die("Unable to open file!");
    $txt = "0001";
    fwrite($myfile, $txt);
    fclose($myfile);
  }
?>
