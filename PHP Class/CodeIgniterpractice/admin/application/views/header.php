<html>
 <head>
   <title>codeigniterpractice</title>
   <link href="<?php echo BASEURL;?>assets/css/bootstrap.css" rel="stylesheet">
   <script src="<?php echo BASEURL;?>assets/js/jquery.min.js"></script>
   <script src="<?php echo BASEURL;?>assets/js/bootstrap.js"></script>
   <script src="<?php echo BASEURL;?>assets/js/myajax.js"></script>
   <script src="<?php echo BASEURL;?>assets/js/myajaxdelete.js"></script>
   <script src="<?php echo BASEURL;?>assets/js/myajaxedit.js"></script>
   <script src="<?php echo BASEURL;?>assets/js/myajaxupdate.js"></script>
   
   <style>
   .list-group-item{
	   background-color:#8a8a0f;
   }
   </style>
 </head>
 
 <body>
   <nav class="navbar navbar-inverse" style="height:12%;background-color:#663359;border-radius:0px;">
    <div class="container-fluid">
	 <div class="navbar-header">
	   <span class="navbar-brand"><a href="#"><marquee direction="left">Admin Panel</marquee></a></span>
	 </div>
	 
	 <ul class="nav navbar-nav navbar-right">
	     <li><a>Welcome!:<?php echo $this->session->userdata("name");?><a><li>
	     <li><a href="logout.php">Signout<a><li>
	 
	 </ul>
	  
	</div>
	</nav>
	
	
	 
	<div class="col-sm-2 well" style="height:100%; margin:-20px;background-color:#8a8a0f;">
	<h3> DashBoard</h3>
	<ul class="list-group nav">
	   <li class="list-group-item"><a href="home.php">Home</a></li>
	   <li class="list-group-item"><a href="viewcontact.php">Contactlist</a></li>
	   <li class="list-group-item"><a href="signup.php">Signuplist</a></li>
	   <li class="list-group-item"><a href="about.php">About</a></li>
	   <li class="list-group-item"><a href="logout.php">logout</a></li>
	   <li class="list-group-item"><a href="addcontactajax.php">Add contact thourgh ajax</a></li>
	   <li class="list-group-item"><a href="contactlist2.php"> contact list2 thourgh ajax</a></li>
	  </ul>
	</div>
	<div class="col-sm-10" style="margin-left: 30px;">