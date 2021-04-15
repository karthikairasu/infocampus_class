<html>
	<head>
		<title>Login</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<h4 class="text-center ">
					<?php 
					session_start();
						if(isset($_SESSION['msg']))
						{
							echo$_SESSION['msg'];
						}
					?>
				</h4>
					<form action="logincheck.php" method="POST">
						<div class="row form-group">
							<div class="input-group">
								<span class="input-group-addon">
								<i class="glyphicon glyphicon-envelope"></i>
								</span>
								<input type="email" name="email" placeholder="Enter Email" class="form-control"/>
							</div>
						</div>
						<div class="row form-group">
							<div class="input-group">
								<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i>
								</span>
								<input type="password" name="pass" placeholder="Enter password" class="form-control"/>
							</div>
						</div>
						<div class="row form-group text-center">
							<button type="submit" class="btn btn-primary">Login
							<span class="glyphicon glyphicon-arrow-right"></span></button>
						</div>
					</form>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>