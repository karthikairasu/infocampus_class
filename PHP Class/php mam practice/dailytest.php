<?php 
 include ('header.php');
 if(isset($_POST['text']) && isset($_POST['find']) && isset($_POST['replace'])){
	 $text	=	$_POST['text'];
	 $find	=	$_POST['find'];
	 $replace	=	$_POST['replace'];
	 
	  $res=str_ireplace($find,$replace,$text);
			echo $res;
			echo preg_match('/is/',$text);
 }
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 well">
				<form method="post" action="dailytest.php">
					
					<div class="row form-group">
						<div class="col-sm-4">
							<label>TEXT</label>
						</div>
						<div class="col-sm-8">
							<textarea class="form-control" name="text" rows="6"><?php echo $res ?></textarea>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4">
							<label>Find</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control"name="find">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-4">
							<label>Replace</label>
						</div>
						<div class="col-sm-8">
							<input type="text" class="form-control"name="replace">
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<button type="submit"class="btn btn-primary">Find & Replace</button>
							<button type="reset"class="btn btn-danger">Reset</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
 <?php 
 include ('footer.php');
?>