<?php
    $conn = mysqli_connect("localhost","root","","kiran");
	
	$id = $_REQUEST['id'];
	
	$sql = "select * from student where id='$id'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_object($res);
?>
 <html>
     <head>
	     <title>Student</title>
		 <link rel="stylesheet" href="assets/css/bootstrap.css">
	 </head>
	 <body>
	     <div class="container">
		     <div class="row">
			     <div class="col-sm-3"></div>
			     <div class="col-sm-6">
				   <form action="update.php" method="POST">
				      <div class="panel panel-primary">
					     <div class="panel-heading">
						     <div class="panel-title text-center"><h3><b>Student Details</b></h3></div>
						 </div>
						 <div class="panel-body">
						     <div class="row form-group">
							     <div class="col-sm-2 text-center"><label><h4>Name</h4></label></div>
							     <div class="col-sm-10"><input type="text" name="fname" class="form-control"
								   value="<?php echo $row->name;?>"></div>
							 </div>
							  <div class="row form-group">
							     <div class="col-sm-2 text-center"><label><h4>Mobile</h4></label></div>
							     <div class="col-sm-10"><input type="text" name="mobile" class="form-control"value="<?php echo $row->mobile;?>"></div>
							 </div>
							  <div class="row form-group">
							     <div class="col-sm-2 text-center"><label><h4>E-mail</h4></label></div>
							     <div class="col-sm-10"><input type="text" name="email"
								 class="form-control" value="<?php echo $row->email;?>"></div>
							 </div>
							  <div class="row form-group">
							     <div class="col-sm-2 text-center"><label><h4><br>Address</h4></label></div>
							     <div class="col-sm-10"><textarea name="msg" class="form-control"
								 value="<?php echo $row->address;?>"></textarea></div>
							 </div>
							  <div class="row form-group">
							     <div class="col-sm-2 text-center"><label><h4>State</h4></label></div>
							     <div class="col-sm-4">
								      <select name="state" class="form-control" value="<?php echo $row->state;?>">
								         <option value="">Choise State</option>
								         <option value="Karnataka">Karnataka</option>
								         <option value="andra">Andra</option>
								         <option value="tamilnadu">Tamilnadu</option>
								         <option value="maharastra">Maharastra</option>
									  </select>
								 </div>
								 <div class="col-sm-2 text-center"><label><h4>City</h4></label></div>
							     <div class="col-sm-4">
								      <select name="city" class="form-control" value="<?php echo $row->city;?>">
								         <option value="">Choise City</option>
								         <option value="banglore">Banglore</option>
								         <option value="hydrabad">Hydrabad</option>
								         <option value="chnai">Chnai</option>
								         <option value="pune">Pune</option>
									  </select>
								 </div>
							 </div>
							 <div class="col-sm-2"><label><h4>Gender</h4></label></div>
							     <div class="col-sm-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								 <input type="radio"  name="gender" value="male" value="<?php echo $row->gender;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male</div>
								 <div class="col-sm-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								 <input type="radio" name="gender" value="female" value="<?php echo $row->gender;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female
								 </div>
							     
						 </div>
						 <div class="panel-footer" style="text-align:center">
						      <button class="btn btn-danger" type="submit">Save</button>
						      <button class="btn btn-warning" type="button">Clear</button>
						 </div>
					  </div>
					  </form>
				 </div>
			     <div class="col-sm-3"></div>
			 </div>
		 </div>
	 </body>
 </html>