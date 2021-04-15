<?php
  
  
  $a  = $_POST['fname'];
  $b  = $_POST['mobile'];
  $c  = $_POST['email'];
  $d  = $_POST['msg'];
  
  /* echo $name;
  echo"<br>";
  
  echo $mob;
  echo"<br>";
  
   echo $email;
  echo"<br>";
  
  echo $message;
  echo"<br>"; */
  
  //$conn = mysqli_connect("servername", "uname", "password", "dbname");
  
  $conn = mysqli_connect("localhost", "root", "", "phpmysql");
  
  $sql =  "insert into contact (name, mobile, email,message)
                       values ('$a' , '$b', '$c' ,'$d')";
					   
  $status = mysqli_query($conn, $sql); //to execute query

  if($status==true)
  {
	  
	  header("Location:contactlist.php");//to redirect
  }	  
  else{
	  header("Location:contact.html");
  }

?>