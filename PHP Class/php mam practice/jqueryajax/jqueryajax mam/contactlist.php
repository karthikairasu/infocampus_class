<?php 
	include("dbconfig.php");
	$sql="select * from contact";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_object($res))
	{
		echo"<tr>";
			echo"<td>$row->name</td>";
			echo"<td>$row->email</td>";
			echo"<td>$row->mobile</td>";
			echo"<td>$row->city</td>";	
			echo"<td>$row->message</td>";
			echo"<td><a href='#' onclick='deletecontact($row->id)'><span class='glyphicon glyphicon-trash'></span></a></td>";
			echo"<td><a href='#' onclick='editcontact($row->id)' data-toggle='modal' data-target='#mymodal'><span class='glyphicon glyphicon-pencil'></span></a></td>";
		echo"</tr>";
		
	}	

?>