<html>
<head>
<title>homepage</title>
<link href="<?php echo BASEURL;?>dist/css/bootstrap.css" rel="stylesheet">
<style>
#mywell{
	background-color:skyblue
}
</style>
<script src="<?php echo BASEURL;?>dist/js/jquery.min.js"></script>
<script src="<?php echo BASEURL;?>dist/js/bootstrap.js"></script> 
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 well" id="mywell">
</div>
</div>
</div><!--1container fluid closess-->
<div class="container">
	<div class="row">
	<div class="col-sm-4">
		<div class="panel panel-primary">
		<div class="panel-heading">
		<div class="panel-title">
		<span class="glyphicon glyphicon-cog"></span>&nbsp;settings
		</div>
		</div>
		<div class="panel-body">
		<ul class="list-group">
		<li class="list-group-item"><a href="#" data-toggle="collapse" data-target="#add"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add records &nbsp;&nbsp;<span class="caret"></span></a></li>
		<ul class="collapse" id="add">
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/addcity">City</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/addstate">State</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/addcustomer">Customer</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/addproduct">Product</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/addcategory">Category</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/addbrand">Brand</a></li>
		</ul>
		
		<li class="list-group-item"><a href="#" data-toggle="collapse" data-target="#view"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View records &nbsp;&nbsp;<span class="caret"></span></a></li>
		<ul class="collapse" id="view">
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/viewcity">City</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/viewstate">State</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/viewcustomer">Customer</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/viewproduct">Product</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/viewcategory">Category</a></li>
		<li class="list-group-item"><a href="<?php echo BASEURL;?>index.php/main/viewbrand">Brand</a></li>
		</ul>
		
		<li class="list-group-item"><a href="#">Sign Up</a></li>
		
		
		
		<li class="list-group-item"><a href="#">Signup list</a></li>
		</ul>
		</div>
		<div class="panel-footer">
		</div>
		</div>
		</div>