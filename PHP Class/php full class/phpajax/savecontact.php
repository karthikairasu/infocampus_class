<?php
 include("dbconfig.php");
 $name = $_GET['name'];
 $mobile = $_GET['mobile'];
 $msg = $_GET['msg'];
 
 $sql = "insert into contact(name,mobile,message)
                       value('$name','$mobile','$msg')";
$res = mysqli_query($conn,$sql);
if($res==true)
{
	echo "sucess";
}else{
	echo "Fail";
}
?>