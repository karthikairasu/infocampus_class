 <html>
     <head>
	     <title> Enquery form </title>
		 <link rel="stylesheet" href="assets/css/bootstrap.css">
	 </head>
	 <body>
	 
	     <div class="container"><br>
		     <div class="row">
			     <div class="col-sm-3"></div>
			     <div class="col-sm-6">
				  <form action="save.php" method="POST">
				      <div class="panel panel-primary">
					      <div class="panel-heading">
						      <h3 class="text-center"></h3>
						  </div>
					      <div class="panel-body">
						      <div class="row form-group">
							      <div class="col-sm-1"></div>
							      <div class="col-sm-10">
								      <div class="row form-group">
									     <div class="col-sm-12">
										     <input type="text" placeholder="Your Name" name="fname" class="form-control">
										 </div>
									  </div>
									  <div class="row form-group">
									     <div class="col-sm-12">
										     <input type="text" placeholder="Your Contact No." name="mobile" class="form-control">
										 </div>
									  </div>
									  <div class="row form-group">
									     <div class="col-sm-12">
										    <select name="course" class="form-control">
											   <option value="">Select Course Intrested</option>
											   <option value="php">PHP</option>
											   <option value="java">JAVA</option>
											   <option value="python">Pyhon</option>
											</select>
										 </div>
									  </div>
									    <div class="row form-group">
									     <div class="col-sm-12">
										    <select name="location" class="form-control">
											   <option value="">Choose Location</option>
											   <option value="banglore">Banglore</option>
											   <option value="pune">Pune</option>
											   <option value="mumbai">Mumbai</option>
											</select>
										 </div>
									  </div>
									    <div class="row form-group">
									     <div class="col-sm-12">
										    <textarea class="form-control" name="msg" placeholder="Enter Your Message" cols=""></textarea>
										 </div>
									  </div>
								  </div>
							      <div class="col-sm-1"></div>
							  </div>
						  </div>
					      <div class="panel-footer text-center">
                             <div class="row">
							     <div class="col-sm-12 text-center">
								    						       <button type="submit" class="btn btn-danger"> Send Request </button>

								 </div>
							 </div>
						  </div>
					  </div>
					  </form>
				 </div>
			     <div class="col-sm-3"></div>
			 </div>
		 </div><!---end row-->
	 </body>
 </html>