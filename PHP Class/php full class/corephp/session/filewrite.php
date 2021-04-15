<?php
  include("header.php");
?>
  <h3 align="center"> 	File Write</h3>
  <center>
<form action="datawrite.php" method="post">
      <p>
	      <br>Enter the text below </b> <br>
		  
		  <textarea cols="40" rows="10" name="userdata"></textarea>
	  </p>
	  <p>
	     <button type="submit">Write Now</button>
	     <button type="reset">clear Now</button>
	  </p>
</form></center>
  <?php
  include("footer.php");
?>