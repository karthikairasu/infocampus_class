<?php
    $conn= mysqli_connect("localhost", "root", "", "phpmysql");
		
	$id= $_REQUEST['cid'];
	$sql = "select * from contact where id='$id'";
    $res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_object($res);
	
	/* echo "<pre>";
	print_r($row);
	echo "</pre>"; */
?>

  <html>
   <body>
      <form action="updatecontact.php" method="POST">
	    <table align="center" cellpadding="8">
		  <caption ><h3>Update contact</h3></caption>
		  
		    
		   <tr>
	   <th>fullname </th>
	   <td><input type="text" name="fname" value="<?php echo $row->name?>"></td>
	  </tr>
	  
	  <tr>
	   <th>mobile no </th>
	   <td><input type="text" name="mobile" value="<?php echo $row->mobile?>"></td>
	  </tr>
	  <tr>
	   <th>id</th>
	   <td><input type="text" name="id" value="<?php echo $row->id?>" readonly></td>
	  </tr>
	  
	  <tr>
	   <th>email id</th>
	   <td><input type="email"  name="email" value="<?php echo $row->email?>"></td>
	  </tr>
	  
	  <tr>
	   <th>message </th>
	   <td><textarea type="text"  name="msg"><?php echo $row->message?></textarea></td>
	  </tr>
		  
		   <tr>
		    <th colspan="2">
			    <button type="submit" >Update Contact</button>
			</th>
			
		  </tr>
		  
		</table>
		
	   
	  </form>
   </body>
</html>