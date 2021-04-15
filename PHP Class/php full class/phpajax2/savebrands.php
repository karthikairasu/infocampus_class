<?php 
include("dbconfiguree.php");
$name = $_GET['name'];

$sql="insert into brand(name)
       values('$name')";
$res = mysqli_query($conn, $sql);
if($res==true)
{
	echo "sucess";
}
else
{
	echo "fail";
}

?>