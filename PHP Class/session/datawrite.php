<?php
  $newdata = $_POST['userdata']; // tocatch
  
  $newdata = "<p>$newdata (File Updated On : ". date('Y-m-d H:i:s') .")</p>";
   
  $obj = fopen("myuser.txt", "a+"); //a-->mean add +-->mean create and add
  fwrite($obj, $newdata);// to write data opened file
  fclose($obj);
  header("Location:fileread.php");// redirect to fileread
  ?>