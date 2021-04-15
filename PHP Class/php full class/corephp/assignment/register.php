 <html>
      <head>
	     <title>Register</title>
		 <link rel="stylesheet" href="assets/css/bootstrap.css">
	  </head>
	  <body>
	       <div class="container">
               <div class="row">
			     <div class="col-sm-2"></div>
			     <div class="col-sm-8">
					  <form action="data.php" method="post">
						 <div class="panel panel-info">
							  <div class="panel-heading text-center">
								 <div class="panel-title">Register</div>
							  </div>
							  <div class="panel-body">
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>First Name :</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="text" class="form-control" name="fname" placeholder="Enter your name">
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Last Name :</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="text" class="form-control" name="lname" placeholder="Enter your last name">
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Mobile No :</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile number">
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Email Id :</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="email" class="form-control" name="email" placeholder="Enter your e-mail">
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Password :</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="password" class="form-control" name="pass" placeholder="Enter your password">
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Confirm Password:</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="password" class="form-control" name="cpass" placeholder="Confirm password">
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Date of Birth :</h4>
								  </div>
								  <div class="col-sm-9">
								      <div class="row">
									      <div class="col-sm-4">
										  <select name="dob_day" class="form-control">
									      <option value="">Date</option>
									      <option value="1">1</option>
									      <option value="2">2</option>
									      <option value="3">3</option>
									      <option value="4">4</option>
									      <option value="5">5</option>
									      <option value="6">6</option>
									      <option value="7">7</option>
									      <option value="8">8</option>
									      <option value="9">9</option>
									      <option value="10">10</option>
									      <option value="11">11</option>
									      <option value="12">12</option>
									 </select>
										  </div>
									      <div class="col-sm-4">
										     <select name="dob_month" class="form-control">
									      <option value="">Month</option>
									      <option value="jan">January</option>
									      <option value="feb">February</option>
									      <option value="mar">March</option>
									      <option value="april">April</option>
									      <option value="may">May</option>
									      <option value="jun">Jun</option>
									      <option value="july">July</option>
									      <option value="augst">Augst</option>
									      <option value="september">September</option>
									      <option value="October">October</option>
									      <option value="november">November</option>
									      <option value="december">December</option>
									 </select>
										  </div>
									      <div class="col-sm-4">
										   <select name="dob_year" class="form-control">
									      <option value="">Year</option>
									      <option value="1997">1997</option>
									      <option value="1998">1998</option>
									      <option value="1998">1999</option>
									      <option value="2000">2000</option>
									  
									 </select>
										  </div>
									  </div>
								     
									 
									
								  
								  </div>
								 </div>
								  <div class="row form-group">
								  <div class="col-sm-3">&nbsp;&nbsp;&nbsp;
								      <h4>Full Address :</h4>
								  </div>
								  <div class="col-sm-9">
								     <textarea class="form-control" name="address"></textarea>
								  </div>
								 </div>
								  <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>Pincode :</h4>
								  </div>
								  <div class="col-sm-9">
								     <input type="text" class="form-control" name="pin" placeholder="Enter pincode">
								  </div>
								 </div>
								  <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>State :</h4>
								  </div>
								  <div class="col-sm-9">
								     <select name="state" class="form-control">
									      <option value="">State</option>
									      <option value="karnataka">Karnataka</option>
									      <option value="andra">Andrpradesh</option>
									      <option value="tamilnadu">TamilNadu</option>
									      <option value="Maharastra">Maharastra</option>
									  
									 </select>
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-3">
								      <h4>City :</h4>
								  </div>
								  <div class="col-sm-9">
								     <select name="city" class="form-control">
									      <option value="">City</option>
									      <option value="banglore">Banglore</option>
									      <option value="hydrabad">Hydrabad</option>
									      <option value="chnai">Chnai</option>
									      <option value="pune">Pune</option>
									      
									  
									 </select>
								  </div>
								 </div>
								 <div class="row form-group">
								  <div class="col-sm-12 text-center" style="color:skyblue">
								      <input type="checkbox" name="agree"> Agree On Terms Condation
								  </div>
								 
								 </div>
							  </div>
							  <div class="panel-footer">
							      <div class="row">
								      <div class="col-sm-12 text-center">
									     <button type="submit" class="btn btn-info">Register</button>
									     <button type="reset" class="btn btn-info">Clear</button>
									  </div>
								  </div>
							  </div>
						 </div>
					 </form>	 
			     <div class="col-sm-2"></div>
			   </div>
			</div>
	 </body>
 </html>