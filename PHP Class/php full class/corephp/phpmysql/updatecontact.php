<?php
   $conn = mysqli_connect("localhost", "root","","phpmysql");
   $id = $_POST['contactid'];

   $name = $_POST['fname'];
   $mobile = $_POST['mobile'];
   $msg = $_POST['message'];
   
   
  $sql = "update contact set 
        name = '$name',
        mobile = '$mobile',
        message = '$msg' where id='$id'";
   mysqli_query($conn,$sql);
   header("location:contactlist.php");
   
?>