<?php
  include("header.php");
  $sql ="select * from myphoto order by id desc";
  $res = mysqli_query($conn,$sql);
?>

    <style>
	  .myimage{
		  width:250px;
		  height:300px;
		  margin:15px;
		  border-radius:20px;
		  float:left;
		  background:pink;
	  }
	  img {
		  height:200px;
		  width:98%;
		  margin:1%;
		  border-radius:20px 20px 0px 0px;
	  }
    </style>
	
	<?php
	   while($row = mysqli_fetch_object($res))
		   
		   {
			   echo "<div class='myimage'>
			                 <img src='userphoto/$row->photoname'>
			                 <p align='center'> $row->about </p>
							 <p align='center'> 
                             <a href='deletephoto.php?pid=$row->id&name=$row->photoname'>Delete</a>
							 </p>
			         </div>";
		   }
	?>

<?php
  include("footer.php");
?>