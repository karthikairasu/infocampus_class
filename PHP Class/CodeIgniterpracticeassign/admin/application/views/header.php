<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo BASEURL;?>assets/css/bootstrap4.css">
  <script src="<?php echo BASEURL;?>assets/js/jquery4.min.js"></script>
  <script src="<?php echo BASEURL;?>assets/js/bootstrap4.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="<?php echo BASEURL;?>assets/images/birds.png" alt="logo" style="width:50px;">
  </a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav navbar-expand-md bg-dark navbar-dark">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contactlist.php">Contactlist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="addcontact.php">Addcontact</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
  </div>
</nav>

<div class="container-fluid">
 
  

