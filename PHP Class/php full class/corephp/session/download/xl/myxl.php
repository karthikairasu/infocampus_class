<?php
include("../../header.php");
?> 

   <form action="uploadxl.php" method="POST" enctype="multipart/form-data">
      <h3 align="center"> Upload Data From Xl</h3>
  
   
   <p align="center">
     <input type="file" name="file">
	 <br><br>
	 <button type="submit">Upload Xl</button>
   </p>
 </form>
<?php
include("../../footer.php");

?>