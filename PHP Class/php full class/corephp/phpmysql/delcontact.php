<?php
  $conn = mysqli_connect("localhost","root","","phpmysql");
   $id = $_REQUEST['id'];
   $sql = "delete from contact where id=$id";
mysqli_query($conn,$sql);
header("location:contactlist.php");   
?>