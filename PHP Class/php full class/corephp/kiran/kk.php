<html>
  <head>
     <link rel="stylesheet" href="assets/css/bootstrap.css">
	 <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
   <script>
      function oncheck()
	  {
	    var a = document.getElementById("pass").value;
	    var b = document.getElementById("cpass").value;
		
		if(a!==b)
		{
		  document.getElementById("error").innerHTML="password not matched";
		  document.getElementById("error").style.Color="red";
		}
	  }
   </script>
  </head>
  <body>
     <div class="container">
	     <div class="row">
		      <div class="col-sm-1"></div>
			  <form action="user.php" method="post">
		      <div class="col-sm-5">
			      <button type="button" class="btn btn-primary" data-target="#kiran" data-toggle="collapse">Sign Up</button>
                     <div id="kiran" class="collapse">
					      <div class="panel panel-info">
						     <div class="panel-heading text-center">
							     <h3>Register</h3>
							 </div>
							 <div class="panel-body">
							     <div class="row form-group">
								     <div class="col-sm-3"><label>Name</label></div>
								     <div class="col-sm-9">
									     <input type="text" class="form-control" name="fname" required>
									 </div>
								 </div>
								 <div class="row form-group">
								     <div class="col-sm-3"><label>Mobile</label></div>
								     <div class="col-sm-9">
									     <input type="text" class="form-control" name="mobile" required>
									 </div>
								 </div>
								 <div class="row form-group">
								     <div class="col-sm-3"><label>E-mail</label></div>
								     <div class="col-sm-9">
									     <input type="text" class="form-control" name="email" required>
									 </div>
								 </div>
								 <div class="row form-group">
								     <div class="col-sm-3"><label>Password</label></div>
								     <div class="col-sm-9">
									     <input type="password" name="passs" class="form-control" id="pass" required>
									 </div>
								 </div>
								 <div class="row form-group">
								     <div class="col-sm-3"><label>Confirm Password</label></div>
								     <div class="col-sm-9 text-center">
									     <input type="password" class="form-control" name="cpasss" onblur="oncheck()" id="cpass" required>
											<i id="error" style="color:red"></i>
									</div>
								 </div>
								 <div class="row form-group">
								     <div class="col-sm-3">&nbsp;&nbsp;<label>Address</label></div>
								     <div class="col-sm-9">
									     <textarea class="form-control" name="msg" required></textarea>
									 </div>
								 </div>
							 </div>
							 <div class="panel-footer text-center">
							     <button type="submit" class="btn btn-danger" >Send</button>
							     <button type="reset" class="btn btn-sucess" >Clear</button>
							 </div>
						  </div>
					 </div>
				  </div>
				  </form>
		      <div class="col-sm-3">
			  			      <button type="button" class="btn btn-danger">Login</button>

			  </div>
		      <div class="col-sm-3"></div>
		 </div>
	 </div>
  </body>
</html>