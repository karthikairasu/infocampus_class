<?php
	include("../../header.php");

?>
	<form action="uploadxl.php" method="POST" enctype="multipart/fprm-data">
		
		<h3 align="center"> Upload Data from XL </h3>
		<p align="center">
			<input type="file" name="file">
			<br>
			<br>
			<button type="submit">Upload XL</button>
		</p>
	</form>

<?php
	include("../../footer.php");

?>



