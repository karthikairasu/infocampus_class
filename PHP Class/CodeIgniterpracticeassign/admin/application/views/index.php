<html>
  <head>
  <title> Home page</title>
  <link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
  <script src="<?php echo BASEURL;?>assets/js/jquery.min.js"></script>  
  <script src="<?php echo BASEURL;?>assets/js/bootstrap.js"></script>  
 </head>
 
 <body>
   <div class="container">
     <div class="row">
	  <div class="col-sm-3"></div>
	  <div class="col-sm-6">
	   <form action="logincheck.php" method="POST">
	   <h4 class="text-center"><?php echo $this->session->flashdata("msg");?></h4>
		  <div class="form-group">
			<label for="email">Email address:</label>
			<input type="email" class="form-control" name="email">
		  </div>
		  <div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" name="password">
		  </div>
		  <div class="form-group form-check">
			<label class="form-check-label">
			  <input class="form-check-input" type="checkbox"> Remember me
			</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	  </div>
	  <div class="col-sm-3"></div>
	 </div>
   </div>
 </body>
</html>