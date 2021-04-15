<?php
  include("header.php");
  $email = $_SESSION['email'];
  $sql="select * from user where email='$email'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_object($res);
?>

 <h3 align="center">View Profile</h3>
 
 <table align="center" cellpadding="10">
   <tr>
     <th>Fullname</th>
	 <td><?php echo $row->name;?></td>
   </tr>
   
   <tr>
     <th>Email</th>
	 <td><?php echo $row->email;?></td>
   </tr>
   
   <tr>
     <th>Password</th>
	 <td><?php echo $row->password;?></td>
   </tr>
   
   <tr>
     <th>Mobile</th>
	 <td><?php echo $row->mobile;?></td>
   </tr>
   
   
 </table>

<?php
  include("footer.php");
?>