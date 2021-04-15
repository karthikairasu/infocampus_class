<html>
   <head>
     <title> profile </title>
     <link href="<?php echo BASEURL?>assets/css/bootstrap.css" rel="stylesheet">
	 <script src="<?php echo BASEURL?>assets/js/jquery.min.js"></script>
	 <script src="<?php echo BASEURL?>assets/js/bootstrap.js"></script>
   </head>
   
   <body>
      <nav class="navbar navbar-inverse" style="background-color:aquamarine;border-color:aquamarine;">
      <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">PROFILE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="addprofile.php">Add profile</a></li> 
        <li><a href="viewprofile.php">view </a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>