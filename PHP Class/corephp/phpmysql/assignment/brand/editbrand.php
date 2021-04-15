<?php
  $conn = mysqli_connect("localhost", "root", "", "brand");
  
  $id= $_REQUEST['cid'];
  
  $sql = "select * from brands where id='$id'";
  
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_object($res);
  
?>
<html>
   <body>
      <form action="updatebrand.php" method="POST">
	    <table align="center" cellpadding="8">
		  <caption ><h3>Brand </h3></caption>
		  
		    <tr>
		     <input type="hidden" name="id" value="<?php echo $row->id?>">
		  </tr>
		  
		  <tr>
		    <th>brand NAME</th>
			<td><input type="text" name="brandname" value="<?php echo $row->brandname?>" ></td>
		  </tr>
		  
		  <th colspan="2">
		   <button type="submit">Save</button>
		  </th>
		  
		</table>
		
	   
	  </form>
   </body>
</html>