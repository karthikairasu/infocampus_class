<?php
  $newdata = $_POST['userdata'];
  $newdata = "<p>$newdata (File Updated on : ". date('Y-m-d H:i:s ') .")</p>";
  $obj = fopen("myuser.txt", "a+");
  fwrite($obj,$newdata);
  fclose($obj);
  header("location:fileread.php");
?>