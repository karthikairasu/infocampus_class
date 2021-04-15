<?php
   $conn = mysqli_connect("localhost","root","","test");

?>
 <html>
     <head>
	     
		 <link rel="stylesheet" href="assets/css/bootstrap.css">
	 </head>
	 <body>
	 <div class="container"><br>
	     <div class="row">
          <div class="col-sm-3"></div>		
          <div class="col-sm-6">
		 <h3>Blog List</h3> 
		 <br><br>
		 
	   
   
   
   <?php
      $sql ="select * from blog"; 
	  $res = mysqli_query($conn,$sql);
	  while($row = mysqli_fetch_object($res))
	  {
	
	    	
		echo "<h4><b>$row->title</b></h4>";
		
		echo "<p>$row->description</p>";
		echo "<a href='#' class='btn btn-danger'>Continue Reading</a>
";
	
		 
		 
	  }
   ?>
<br>
 </div>		
          <div class="col-sm-3"></div>		
		</div>
	 </div>
	 </body>
 </html>