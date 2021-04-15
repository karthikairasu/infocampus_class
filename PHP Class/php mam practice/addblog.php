<?php 
	include("header.php");


?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 well">
				<form method="post" action="saveblog.php" enctype="multipart/form-data">
					<div class="row form-group">
						<div class="col-sm-4"><label>Title</label></div>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="title"
							placeholder="Enter Title">
						</div>
					
					</div>
					<div class="row form-group">
						<div class="col-sm-4"><label>Description</label></div>
						<div class="col-sm-8">
							<textarea class="form-control" name="description"></textarea>
						</div>
					
					</div>
					<div class="row form-group">
						<div class="col-sm-4"><label>Upload Image</label></div>
						<div class="col-sm-8">
							<input type="file" name="Photo" />
						</div>
					
					</div>
					<div class="row form-group">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary">Save</button>
							<button type="reset" class="btn btn-danger">Clear</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
<?php 

include("footer.php");
?>
