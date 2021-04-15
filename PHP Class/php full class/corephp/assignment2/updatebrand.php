<?php
   $conn = mysqli_connect("localhost", "root","","brand");
   $id = $_POST['brandid'];

   $name = $_POST['bname'];
   
   
  $sql = "update details set 
        name = '$name' where id='$id'";
   mysqli_query($conn,$sql);
   header("location:blist.php");
   
?>