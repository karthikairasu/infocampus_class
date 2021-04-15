<?php
  include("header.php");
?>

 <h3 align="center">file read example</h3>
 <?php
  $obj = fopen("myuser.txt", "r");//to store database another way to store ajax json....
  $data = fread($obj, 4000); //read two type method first one
  fclose($obj);
  echo $data;
 ?>
 <hr color="green" size="2">
 
 <?php
   $data2 = file_get_contents("myuser.txt");// read second method
   echo $data2;
  
 ?>
<hr color="green" size="2">

<?php
  include("footer.php");
?>