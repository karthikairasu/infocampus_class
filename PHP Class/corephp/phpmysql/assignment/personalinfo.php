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
	    <h3 class="text-center">PERSONAL INFORMATION</h3>
		<hr>
	    <div class="row form-group">
		  <div class="col-sm-4">
		  <label>First Name:</label>
		  </div>
           <div class="col-sm-8"><input type="text" name="fname" class="form-control" placeholder="enter firstname">
		   </div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Last Name:</label></div>
           <div class="col-sm-8"><input type="text" name="lname" class="form-control" placeholder="enter lastname"></div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Mobile No:</label></div>
           <div class="col-sm-8"><input type="text" name="mobile" class="form-control" placeholder="enter mobileno"></div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Email:</label></div>
           <div class="col-sm-8"><input type="email" name="email" class="form-control" placeholder="enter email"></div>		  
		</div>
		
		  <div class="row form-group">
		  <div class="col-sm-4"><label>Password:</label></div>
           <div class="col-sm-8"><input type="password" name="password" class="form-control" placeholder="enter password max 8 character"></div>		  
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>Gender:</label></div>
           <div class="col-sm-8">
		   <input type="radio" name="gender" value="male" >Male
		   <input type="radio" name="gender" value="female" >FeMale
		   </div>		  
		</div>
		
		<div class="row form-group">
		  <div class="col-sm-4"><label>Married status:</label></div>
           <div class="col-sm-8">
		   <input type="radio" name="married" value="married" >Married
		   <input type="radio" name="married" value="Un-married" >Un-Married
		   </div>		  
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
		  
		  <button type="submit"  class="btn btn-info">update</button>
		  
		</div>
		
	   </div>
	   </form>
	   <div class="col-sm-2"></div>
	     
	   </div>
	   
	  </div>
   </body>
</html> 