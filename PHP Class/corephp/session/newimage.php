<?php
  include("header.php");
?>

 <form action="uploadphoto.php" method="POST" enctype="multipart/form-data">
 
 <table align="center" cellpadding="10">
    <caption><h3>Upload New Photo </h3></caption>
	<tr>
	  <th>Choose Photo</th>
	  <td><input type="file" name="photo"></td>
	 </tr>
	 
	 <tr>
	  <th>About Photo</th>
	  <td><textarea  name="about"></textarea></td>
	 </tr>

     <tr>
         <th colspan="2">
         <button type="submit">Upload</button>
          </th>		 
 </table>
 
 </form>
 

<?php
  include("footer.php");
?>