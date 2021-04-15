<html>
   <head>
    <title>homepage</title>
	<link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
	<script src="<?php echo BASEURL;?>assets/js/jquery.min.js" ></script>
	<script src="<?php echo BASEURL;?>assets/js/bootstrap.js" ></script>
	<style>
	#mywell{
		
		background-color:skyblue
	}
	</style>
   </head>
   
   <body>
      <div class="container-fluid">
	    <div class="row">
		 <div class="col-sm-12 well" id="mywell">
		 
		 </div>
		</div>
		</div>
	    
		<div class="container">
	    <div class="row">
		  <div class="col-sm-4">
		     <div class="panel panel-primary">
			    <div class="panel-heading">
				    <div class="panel-title">
					  <span class="glyphicon glyphicon-cog"></span>&nbsp;Settings
				      </div>
				</div>
				<div class="panel-body">
				  <ul class="list-group">
				    <li class="list-group-item"><a href="#" data-toggle="collapse" data-target="#add"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add Records &nbsp;<span class="caret"></span></a></li>
					
					  <ul class="collapse" id="add">
					  
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/addcity">City</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/addstate">State</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/addcustomer">Customer</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/addproduct">Product</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/addcategory">Category</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/addbrand">Brand</a></li>
					  </ul>
					
				    <li class="list-group-item"><a href="#" data-toggle="collapse" data-target="#view"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View Records &nbsp;<span class="caret"></span></a></li>
					
					<ul class="collapse" id="view">
					  
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/viewcity">City</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/viewstate">State</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/viewcustomer">Customer</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/viewproduct">Product</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/viewcategory">Category</a></li>
					    <li class="list-group-item"> <a href="<?php echo BASEURL;?>index.php/bootstrap/viewbrand">Brand</a></li>
					  </ul>
					
				    <li class="list-group-item"><a href="#">Sign Up</a></li>
				    <li class="list-group-item"><a href="#">SignUp List</a></li>
				  </ul>
				</div>
				<div class="panel-footer">
				</div>
			 </div><!----panel primary close---->
		  </div><!-----col-sm-4 close---->