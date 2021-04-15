 <html>
      <head>
	     <title>Register</title>
		 <link rel="stylesheet" href="assets/css/bootstrap.css">
	  </head>
	  <body>
	  <center>
	  <?php
		    session_start();
			if( isset($_SESSION['msg'])) // to check available or not
			{
				echo $_SESSION['msg']; // to print
				unset($_SESSION['msg']);	
			}
		 ?>
	  </center>
	       <div class="container">
               <div class="row">
			     <div class="col-sm-4"></div>
			     <div class="col-sm-4">
					  <form action="check.php" method="post">
						 <div class="panel panel-danger">
							  <div class="panel-heading text-center">
								 <div class="panel-title">Login</div>
							  </div>
							  <div class="panel-body">
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Email :</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="email" class="form-control" name="email" placeholder="Enter your email">
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Password</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="password" class="form-control" name="pass" placeholder="Enter your password">
								  </div>
								 </div>
								
							  </div>
							  <div class="panel-footer">
							      <div class="row">
								      <div class="col-sm-12 text-center">
									     <button type="submit" class="btn btn-primary">Login</button>
									     <button type="reset" class="btn btn-danger">Clear</button>
									  </div>
								  </div>
							  </div>
						 </div>
					 </form>	 
			     <div class="col-sm-4"></div>
			   </div>
			</div>
	 </body>
 </html>