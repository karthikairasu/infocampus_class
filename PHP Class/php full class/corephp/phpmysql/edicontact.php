<?php
  $conn = mysqli_connect("localhost","root","","phpmysql");
   $id = $_REQUEST['id'];
   $sql = "select *  from contact where id=$id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_object($res);

//echo "<pre>";
//print_r($row);
//echo "</pre>";
   
?>

<html>
 <body>
     <form action="updatecontact.php" method="post">  
	     <table align="center" cellpadding="8">
	          <caption><h3>Update Contact </h3></caption>
<input type="hidden" name="contactid" value="<?php echo $id; ?>">
				<tr>
				   <th>Full Name</th>
				   <td><input type="text" name="fname" value="<?php echo $row->name;?>"></td>
				</tr>
				<tr>
				   <th>Mobile No</th>
				   <td><input type="text" name="mobile" value="<?php echo $row->mobile;?>"></td>
				</tr>
				<tr>
				   <th>Message</th>
				   <td><textarea name="message" rows="5" cols="30" value="<?php echo $row->message;?>"></textarea></td>
				</tr>
				<tr>
				   <th colspan="2">
				      <button type="submit" > Update Contact</button>
				   </th>
				</tr>
	      </table>
	 </form>
 </body>

</html>