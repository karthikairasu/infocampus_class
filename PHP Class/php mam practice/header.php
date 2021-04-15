<html>
	<head>
		<title>Home Page</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<?php 
			session_start();
			if(empty($_SESSION['aid']))
			{
				$_SESSION['msg']="unauthorised access,Please Login again";
				header("Location:index.php");
			}
		
		
		
		?>
	</head>
	<body>
		<nav class="nav navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand">Dashboard</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="addcity">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Add<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="addcity">Add City</a></li>
							<li><a href="">Add City</a></li>
							<li><a href="">Add City</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Welcome <?php echo $_SESSION['name'];?></a></li>
					<li><a href="logout.php">Logout</a><li>
				</ul>
			</div>
		</nav>
		<!--navbar  closes-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<br><br>
				</div>
			</div>
		</div>