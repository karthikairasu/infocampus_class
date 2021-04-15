<?php
  include("header.php");
?>

 <h3 align="center">Write into file</h3>
 <center>
 <form action="datawrite.php" method="POST">
   <p>
     <b>Enter the text Below</b> <br>
	 <textarea cols="40" rows="10" name="userdata"></textarea>
   </p>
   
   <p>
      <button type="submit">write now</button>
      <button type="reset">clear now</button>
   </p>
 
 </form>
 </center>
 
<?php
  include("footer.php");
?>