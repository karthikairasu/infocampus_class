<div class="row">
   <div class="col-sm-12 text-center">
      <h2> User Dashboard</h2>
	  <p>
	     sdf sdf sdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfv sdf sdf sdf 
	     sdf sdf sdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfv sdf sdf sdf 
	     sdf sdf sdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfv sdf sdf sdf 
	     sdf sdf sdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfv sdf sdf sdf 
	     sdf sdf sdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfv sdf sdf sdf 
	     sdf sdf sdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfv sdf sdf sdf 
	     sdf sdf sdf sdfsdfsdfsdfsdfsdfsdf sdfsdfsdfv sdf sdf sdf 

		 </p>
   </div>
</div>
<?php
  include("dbconfig.php");
  
  $sql = "select * from contact";
  $res = mysqli_query($conn,$sql);
  $totalUser = mysqli_num_rows($res);
  
  $sql = "select * from product";
  $res = mysqli_query($conn, $sql);
  $totalproduct = mysqli_num_rows($res);
?>
<div class="row text-center">
   <div class="col-sm-6">
      <h1> 
	     Total Contact <br>
		 (<?php echo $totalUser; ?>)
	  </h1>
   </div>
<div class="col-sm-6">
      <h1> 
	     Total products <br>
		 (<?php echo $totalproduct; ?>)
	  </h1>
   </div></div>