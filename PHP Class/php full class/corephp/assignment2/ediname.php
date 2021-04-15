<?php
  $conn = mysqli_connect("localhost","root","","brand");
   $id = $_REQUEST['id'];
   $sql = "select *  from details where id=$id";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_object($res);


   
?>

<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
 <body>
<div class="container"><br><br>
		      <div class="row">
			     <div class="col-sm-4"></div>
			     <div class="col-sm-4">
				      <form action="updatebrand.php" method="POST">
				      <input type="hidden" name="brandid" value="<?php echo $id; ?>">

					  <div class="panel panel-danger">
					      <div class="panel-heading">
						      <div class="panel-title text-center">
							     <b>Update Brand</b>
							  </div>
						  </div>
						  <div class="panel-body"><br>
						  
							  <div class="row">
							     <div class="col-sm-3 text-center"><label>Name</label></div>
							     <div class="col-sm-9">
								     <input type="text" class="form-control" name="bname" value="<?php echo $row->name;?>"></>
								 </div>
							  </div><br>	
						  </div>
						  <div class="panel-footer text-center">
						      				      <button type="submit" > Update Brand</button>

						  </div>
					  </div>
					   </form>
				 </div>
			     <div class="col-sm-4"></div>
			  </div>
		  </div>
 </body>

</html>
