<?php
  $conn = mysqli_connect("localhost","root","","brand");
   $id = $_REQUEST['id'];
   $sql = "delete from details where id=$id";
mysqli_query($conn,$sql);
header("location:blist.php");   
?>