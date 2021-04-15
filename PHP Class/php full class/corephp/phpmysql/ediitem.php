<html>
   <head>
     <title>
	     update
	 </title>
   </head>
   <body>
     <form action="updateitem.php" method="post">
   <table align="center" cellpadding="7">
	      <caption>Edit Item </caption>
		 
		  

<?php
   $username = $_REQUEST['name'];
   $conn = mysqli_connect("localhost","root","","phpmysql");
 $sql = "select itemname from item where username='$username'";
	  
	  $res = mysqli_query($conn,$sql);
	  $myitem = array();
	   while($row = mysqli_fetch_object($res))
	   {
           array_push($myitem,$row->itemname);
	   }
	   
	
?>
 <tr>
		     <th>Name</th>
			 <td><input type="text" name="fname" value="<?php echo $username; ?>" readonly="readonly"></td>
		  </tr>
		  <tr>
		     <th>Select Item</th>
			  <td>
			  <input type="checkbox" name="item[]" value="apple" 
			  <?php if(in_array("apple",$myitem)) echo " checked ";  ?>>Apple
			  
			  <input type="checkbox" name="item[]" value="Orange"
			  <?php if(in_array("Orange",$myitem)) echo " checked ";  ?>>Orange 
			  
			  <input type="checkbox" name="item[]" value="Banana" 
			  <?php if(in_array("Banana",$myitem)) echo " checked ";  ?>>Banana 
			  
			  <input type="checkbox" name="item[]" value="Graphes" 
			  <?php if(in_array("Graphes",$myitem)) echo " checked ";  ?>>Graphes 
			  </td>
		  </tr>
 <tr>
		     <th colspan="2">
			     <button type="submit">Update Items</button>
			 </th>

			 </tr>
	   </table>
	   </form>
   </body>
</html>