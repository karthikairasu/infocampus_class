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
	   <div class="col-sm-3"></div>
	   <form action="logincheck.php" method="POST">
	   <div class="col-sm-6">
	    <h3 class="text-center">CANDIDATE LOGIN</h3>
		<hr>
	    
		  
		
		  <div class="row form-group">
		  
           <div class="col-sm-12"><input type="email" name="email" class="form-control" placeholder="Email"></div>		  
		</div>
		
		  <div class="row form-group">
		  
           <div class="col-sm-12"><input type="password" name="password" class="form-control" placeholder="Password "></div>		  
		</div>
		
		
		<div class="row text-center">
		  
		  <button type="submit"  class="btn btn-info">Register</button>
		  <button type="reset" class="btn btn-info">Clear</button>
		
		<hr>
		<a href="forgetpassword.php">Forget password</a>
		</div>
		
	   </div>
	   </form>
	   <div class="col-sm-3"></div>
	     
	   </div>
	   
	  </div>
   </body>
</html> 