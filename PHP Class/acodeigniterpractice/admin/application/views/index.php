<html>
	<head>
	<title>Home Page</title>
		<link href="../assets/css/bootstrap.css" rel="stylesheet">
		<script src="../assets/js/jquery.min.js"></script>
		<script src="../assets/js/bootstrap.js"></script>
	<style>
	body{background:url(bg.jpg);}
	</style>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center"><br><br><br><br><br><br><br><br><br>
				<?php
				session_start();
				if(!empty($_SESSION['passsuccess'])){
					echo '<h4 class="alert-success">'.$_SESSION['passsuccess'].'</h4>';
				}
				session_destroy();
				?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<form action="adminlogincheck.php" method="POST">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div class="panel-title">
							Admin Login Panel
							</div>
						</div>
						<div class="panel-body">
							<div class="row form-group">
								<div class="col-sm-3">
									<label>Email/Mobile</label>
								</div>
								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input type="text" class="form-control" placeholder="Enter your email/Mobile" name="email_mobile">
									</div>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-3">
									<label>Password</label>
								</div>
								<div class="col-sm-9">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" class="form-control" placeholder="Enter your password" name="password">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9">
									<a href="forgotpassword.php">Forgot Password?</a>
								</div>
							</div>
							<br>
							<div class="row text-center">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary">Login</button>
									<button type="reset" class="btn btn-danger">Reset</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>