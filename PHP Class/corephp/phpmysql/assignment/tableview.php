<html> 
    <head>
	   <link href="assets/css/bootstrap.css" rel="stylesheet">
	   <link href="assets/css/font-awesome.css" rel="stylesheet">
	   
    </head>
   <body>
      
      <div class="container">
	   <div class="row">
	   <div class="col-sm-2"></div>
	   <form action="registercheck.php" method="POST">
	   <div class="col-sm-8">
	    <table class="table table-bordered">
		  <thead>
		    <tr>
			   <th> sl no</th>
			   <th> Name</th>
			   <th> Email</th>
			   <th> Mobile </th>
			   <th> gender</th>
			   <th> action</th>
		    </tr>
		  </thead>
		  <tbody>
		     <?php
			   $conn = mysqli_connect("localhost", "root", "", "assignment");
			   $sql = "select * from candidate";
			   $res = mysqli_query($conn,$sql);
			   while($row = mysqli_fetch_assoc($res))
			   {
				   echo"<tr>";
				   echo "<td>". $row['id']."</td>";
				   echo "<td>". $row['firstname']."</td>";
				   echo "<td>". $row['email']."</td>";
				   echo "<td>". $row['mobile']."</td>";
				   echo "<td>". $row['gender']."</td>";
				   echo "<td>". "<i class='glyphicon glyphicon-trash'></i>"
				              ."<i class='glyphicon glyphicon-edit'></i>" ."</td>";
				   
				   echo"</tr>";
			   }
			 
			 ?>
			 
			 
		  </tbody>
		</table>
		
	   </div>
	   </form>
	   <div class="col-sm-2"></div>
	     
	   </div>
	   
	  </div>
   </body>
</html> 