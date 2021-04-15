<?php
  include("header.php");
?>
  <form action="uploadphoto.php" method="post" enctype="multipart/form-data">
      <table align="center" cellpadding="10">
	     <caption><h3>Upload New Photo</h3></caption>
		 <tr>
		      <th>Chose photo</th>
			  <td><input type="file" name="photo"></td>
		 </tr>
		 <tr>
		      <th>About photo</th>
			  <td><textarea name="about"></textarea></td>
		 </tr>
		 <tr>
		     <th colspan="2">
			     <button type="submit"> Upload </button>
			 </th>
		 </tr>
	  </table>
  </form>
<?php
  include("footer.php");
?>