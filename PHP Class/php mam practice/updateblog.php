<?php 
include("dbconfig.php");
$title=$_POST['title'];
$description=$_POST['description'];
$preimg=$_POST['previousimg'];
$img=$_FILES['Photo']['name'];
$id=$_POST['id'];
if(empty($img))
{
	$img=$preimg;
}
//echo $img;
move_uploaded_file($_FILES['Photo']['tmp_name'],"assets/uploadedimg/".$img);
$sql="update blogs set title='$title',
						description='$description',
						image='$img' where bid='$id'";

$res=mysqli_query($conn,$sql);
if($res)
{
	header("Location:bloglist.php");
}
else{
		mysqli_error();
}


?>