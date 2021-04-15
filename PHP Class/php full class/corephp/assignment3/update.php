<?php
   $conn = mysqli_connect("localhost", "root","","product");
   $id = $_POST['productid'];

   $name = $_POST['pname'];
   $b = $_POST['status'];
   $price = $_POST['price'];
   $message = $_POST['message'];
   $photoname = time().$_FILES['photo'] ['name'];
   $tmploc = $_FILES['photo']['tmp_name'];
  
     move_uploaded_file($tmploc, "photos/$photoname"); 

   
   
  $sql = "update pdetails set 
        name = '$name',
		status= '$b',
        price = '$price',
        message = '$message',
        photoname = '$photoname' where id='$id'";
   mysqli_query($conn,$sql);
   header("location:plist.php");
   
?>