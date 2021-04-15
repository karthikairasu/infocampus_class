<?php
  
  $a = $_POST['pname'];
  $b = $_POST['status'];
  
  $c = $_POST['msg'];
  $d = $_POST['price'];
  $photoname = time().$_FILES['photo']['name'];
  $tmploc = $_FILES['photo']['tmp_name'];
  
     move_uploaded_file($tmploc, "photos/$photoname"); 

   $conn = mysqli_connect("localhost","root","","product");
  
    $sql = "insert into pdetails(name,status,message,price,photoname) 
	                       values('$a','$b','$c','$d','$photoname')";
            
   
     $status = mysqli_query($conn, $sql);
   

		if($status==true)
		{
			header("location:plist.php");
		}else{
			echo "sorry";
		}
?>
