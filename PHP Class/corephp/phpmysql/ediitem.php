<html>
   <body>
     <form method="POST" action="updateitem.php">
	 <table align="center" cellpadding="7">
	 <caption><h4>Edit Item</h4></caption>
	 
			<?php
			   $username = $_REQUEST['name'];
			   $conn = mysqli_connect("localhost", "root", "", "phpmysql");
			   $sql = "select itemname from item where username= '$username'";
			   $res = mysqli_query($conn, $sql);
			   $myitem = array();
			   while($row = mysqli_fetch_object($res))
			   {
				  /*  echo $row->itemname;
				   echo ","; */
				   array_push($myitem,$row->itemname); //if you given $row only multidimension array single dimension array to ->itemname
				   
			   }
			   /* echo "<pre>";
			   print_r ($myitem);
			   echo "</pre>"; */ //showing the item
			?>
			<tr>
	   <th>Username </th>
	   <td><input type="text"  name="fname" value="<?php echo $username;?>" readonly="readonly"></td>
	  </tr>
	  
	  <tr>
	   <th>Select item </th>
	   <td>
	   <input type="checkbox" name="item[]" value="apple" 
	   <?php if(in_array("apple",$myitem)) echo "checked"; ?>> apple
	   
	   <input type="checkbox" name="item[]" value="orange"
	   <?php if(in_array("orange",$myitem)) echo "checked"; ?>>orange
	   
	   <input type="checkbox" name="item[]" value="mango"
	   <?php if(in_array("mango",$myitem)) echo "checked"; ?>>mango
	   
	   <input type="checkbox" name="item[]" value="banana"
	   <?php if(in_array("banana",$myitem)) echo "checked"; ?>>banana
	   </td>
	  </tr>
	  
	<tr>
	  <th colspan="2">
	  <button type="submit">Update Items</button>
	  
	  </th>
	  </tr>
	 </table>
   </body>

</html>		