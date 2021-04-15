<?php
    // step1 connect with db
    $conn= mysqli_connect("localhost", "root", "", "phpmysql");
	// step2 fetch the id which is passed through url using $_GET['cid'];	
	$id= $_REQUEST['cid'];
	
	//write the sql query for delete
	$sql = "delete from contact where id='$id'";
	
	//executing the above query with mysqli_query function_exists
	//which has two parameters 1st connection variables ie $conn and
	//other is your $sql string variable where query is passed
	//in form of string

	$status= mysqli_query($conn,$sql);
	
	//checking the $status variable
	if($status) 
	{
	   header ("Location:contactlist.php");
    }
	else
	{
	   echo "error";
    }
	

?>