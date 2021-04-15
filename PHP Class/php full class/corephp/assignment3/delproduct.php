<?php
  $conn = mysqli_connect("localhost","root","","product");
   $id = $_REQUEST['id'];
   $sql = "delete from pdetails where id=$id";
mysqli_query($conn,$sql);
header("location:plist.php");   
?>