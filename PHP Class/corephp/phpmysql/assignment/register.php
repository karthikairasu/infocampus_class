<html> 
    <head>
	   <link href="assets/css/bootstrap.css" rel="stylesheet">
	   
    </head>
   <body>
          <center>
     <?php
	    session_start();
		if( isset($_SESSION['msg'])) // to check available or not
		{
			echo $_SESSION['msg'];// to print
			unset($_SESSION['msg']);// to delete from session
		}
	 ?>
   </center>
      <div class="container">
	   <div class="row">
	   <div class="col-sm-2"></div>
	   <form action="registercheck.php" method="POST">
	   <div class="col-sm-8">
	    <h3 class="text-center">REGISTER AS CANDIDATE</h3>
		<hr>
	    <div class="row form-group">
		  <div class="col-sm-4">
		  <label>First Name:</label>
		  </div>
           <div class="col-sm-8"><input type="text" name="fname" class="form-control" >
		   </div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Last Name:</label></div>
           <div class="col-sm-8"><input type="text" name="lname" class="form-control" ></div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Mobile No:</label></div>
           <div class="col-sm-8"><input type="text" name="mobile" class="form-control" ></div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Email:</label></div>
           <div class="col-sm-8"><input type="email" name="email" class="form-control" ></div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Password:</label></div>
           <div class="col-sm-8"><input type="password" name="password" class="form-control" ></div>		  
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>Confirm Password:</label></div>
           <div class="col-sm-8"><input type="password" name="cpassword" class="form-control" placeholder="enter confirm password max 8 character"></div>		  
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>Date Of Birth:</label></div>
           <div class="col-sm-8">
		     <div class="row">
			   <div class="col-sm-4 form-group">
			   
		    <select name="dob_day" class="form-control">
			   <option value="">Day</option>
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
			   <option value="13">13</option>
			   <option value="14">14</option>
			   <option value="15">15</option>
			   <option value="16">16</option>
			   <option value="17">17</option>
			   <option value="18">18</option>
			   <option value="19">19</option>
			   <option value="20">20</option>
			 
		    </select >
			</div>
			<div class="col-sm-4 form-group" >
			  
			<select name="dob_month" class="form-control">
			   <option value="">Month</option>
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
		    </select >
			</div>
			 <div class="col-sm-4  form-group">
			<select name="dob_year" class="form-control">
			   <option value="">Year</option>
			   <option value="2011">2011</option>
			   <option value="2">2012</option>
			   <option value="3">2013</option>
			   <option value="4">2014</option>
			   <option value="5">2015</option>
			   <option value="6">2016</option>
			   <option value="7">2017</option>
			   <option value="8">2018</option>
		    </select >
			</div>
			</div>
			</div>	 
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>Full Address:</label></div>
           <div class="col-sm-8"><textarea type="address" name="address" class="form-control" placeholder="enter address"></textarea></div>		  
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>Pincode:</label></div>
           <div class="col-sm-8"><input type="pincode" name="pincode" class="form-control" placeholder="enter pincode"></div>		  
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>State:</label></div>
           <div class="col-sm-8"> 
		     <select class="form-control" name="state">
			  <option value="">Choose State</option>
			  <option value="tamilnadu">tamilnadu</option>
			  <option value="karnataka">karnataka</option>
			  <option value="tamilnadu">tamilnadu</option>
			 </select>
		   </div>		  
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>District:</label></div>
           <div class="col-sm-8">
		     <select class="form-control" name="district">
			  <option value="">Choose district</option>
			  <option value="chennai">chennai</option>
			  <option value="bangalore">bangalore</option>
			  <option value="madurai">madurai</option>
			 </select>
		   </div>		  
		</div>
		
		
		<div class="row text-center">
		  <button type="submit"  class="btn btn-info">Register</button>
		  <button type="reset" class="btn btn-info">Clear</button>
		  
		</div>
		
		<hr>
		<center>
		<a href="login.php">I Have Already account</a>
		</center>
		
		
	   </div>
	   </form>
	   <div class="col-sm-2"></div>
	     
	   </div>
	   
	  </div>
   </body>
</html> 