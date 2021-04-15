<?php
 include("dbconfig.php");
 $name = $_GET['name'];
 $price = $_GET['price'];
 $qty = $_GET['qty'];
 $desc = $_GET['desc'];
 
 
 $sql = "insert into product(pname,price,qty,description)
                       value('$name','$price','$qty','$desc')";
$res = mysqli_query($conn,$sql);
if($res==true)
{
	echo "sucess";
}else{
	echo "Fail";
}
?>