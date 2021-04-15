<html>
	<head>
		<title>
			JqueryAjax tutorial
		</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet"/>
		<style>
			body{
				background-color:skyblue;
			}
		</style>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script>
			$(function(){
				$("#btn").click(function(){
					var name=$("#fname").val();
					var email=$("#email").val();
					var mobile=$("#mobile").val();
					var city=$("#city").val();
					var message=$("#msg").val();
					var status=true;
					
					if(name=="")
					{
						$("#fname").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#fname").css('border','');	
					}
					//----------------------for email--------------//
					if(email=="")
					{
						$("#email").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#email").css('border','');	
					}
					//-------------for Mobile----------------//
					if(mobile=="")
					{
						$("#mobile").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#mobile").css('border','');	
					}
					//------------for City----------------//
					if(city=="")
					{
						$("#city").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#city").css('border','');	
					}
					//----------------for Message---------------//
					if(message=="")
					{
						$("#msg").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#msg").css('border','');	
					}
					if(status==true)
					{
						
						var mydata={"n":name,"e":email,"mob":mobile,"c":city,"msg":message};
						$.ajax({
							url:"savecontact.php",
							method:"POST",
							data:mydata,
							success:function(response){
								alert(response);
								viewcontact();
								
							}
							
						});//ajax method closes
					}//if(status) closes
				//======================//
				})//1st btn closes
			
				$("#btn2").click(function(){
						$.ajax({
							url:"contactlist.php",
							method:"GET",
							success:function(response){
								$("#result").html(response);
							}
							
						});//ajax method closes
				})//btn2event closes
			
			
			
			//============================================================//
			});//main closes
			
			function viewcontact()
			{
				$.ajax({
							url:"contactlist.php",
							method:"GET",
							success:function(response){
								$("#result").html(response);
							}
							
						});//ajax method closes
				
				
			}//viewcontact closes
			function deletecontact(contactId)
			{
				var sts=confirm("Are u sure u want to delete record with id="+contactId);
				if(sts==true)
				{
					var myid={"cid":contactId};
					$.ajax({
							url:"deletecontact.php",
							method:"POST",
							data:myid,
							success:function(response){
								alert(response);
								viewcontact();
							}
						
						
					});//ajax closes
				}//if closes		
			
			}//delete contact closes
			function editcontact(contactId)
			{
				var sts=confirm("Are You sure u want to edit the record whose id="+contactId+"?");
				if(sts==true)
				{
					var myid={"cid":contactId};
					$.ajax({
							url:"editcontact.php",
							method:"POST",
							data:myid,
							success:function(response){
								$("#editresult").html(response);
							}
					});//ajax closes
				}//if closes
			}//editcontact()closes
			function updatecontact()
			{
					var name=$("#efname").val();
					var email=$("#eemail").val();
					var mobile=$("#emobile").val();
					var city=$("#ecity").val();
					var message=$("#emsg").val();
					var cid=$("#cid").val();
					var status=true;
					
					if(name=="")
					{
						$("#efname").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#efname").css('border','');	
					}
					//----------------------for email--------------//
					if(email=="")
					{
						$("#eemail").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#eemail").css('border','');	
					}
					//-------------for Mobile----------------//
					if(mobile=="")
					{
						$("#emobile").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#emobile").css('border','');	
					}
					//------------for City----------------//
					if(city=="")
					{
						$("#ecity").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#ecity").css('border','');	
					}
					//----------------for Message---------------//
					if(message=="")
					{
						$("#emsg").css('border','2px solid red');
						status=false;
					}
					else
					{
						$("#emsg").css('border','');	
					}
					if(status==true)
					{
						
						var mydata={"n":name,"e":email,"mob":mobile,"c":city,"msg":message,"cid":cid};
						$.ajax({
							url:"updatecontact.php",
							method:"POST",
							data:mydata,
							success:function(response){
								$(".modal").hide();
								alert(response);
								viewcontact();
								
							}
							
						});//ajax method closes
						
					}//if(status) closes
				
				
			}
			
		</script>
	</head>
	<body>
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 jumbotron">
					<h3 class="text-center" style="color:white;">Jquery Ajax</h3>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-3">
					
				</div>
				<div class="col-sm-6">
					<div class="row form-group">
						<div class="col-sm-3">
							<label>Name</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="fname" class="form-control" placeholder="Enter Name">
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-sm-3">
							<label>Email</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="email" class="form-control" placeholder="Enter Email">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-3">
							<label>Mobile</label>
						</div>
						<div class="col-sm-9">
							<input type="text" id="mobile" class="form-control" placeholder="Enter Mobile">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-3">
							<label>City</label>
						</div>
						<div class="col-sm-9">
							<select class="form-control" id="city">
								<option value="">Choose City</option>
								<option value="Bangalore">Bangalore</option>
								<option value="chennai">Chennai</option>
								<option value="mumbai">Mumbai</option>
							</select>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-sm-3">
							<label>Message</label>
						</div>
						<div class="col-sm-9">
							<textarea id="msg" class="form-control" placeholder="Enter Message"></textarea>
						</div>
					</div>
					<div class="row form-group">
						
						<div class="col-sm-12 text-center">
							<button type="button" id="btn" class="btn btn-primary">SEND</button>
							<button type="button" id="btn2" class="btn btn-success">View Contact</button>
							<button type="button" id="btn3" class="btn btn-success" onclick="viewcontact()">View Contact through normal function</button>
							
						</div>
					</div>
					
					
				</div>
				<div class="col-sm-3">
					
				</div>
			</div><!----1st row closes---->
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6" >
					<table class="table table-bordered">
						<thead>
							<tr class="bg-danger">
								<th>Name</th>
								<th>Email</th>
								<th>mobile</th>
								<th>city</th>
								<th>Message</th>
								<th colspan="2">Action</th>
							</tr>
						</thead>
						<tbody id="result">
							
						</tbody>
					
					</table>
				</div>
				<div class="col-sm-3">
				</div>
			</div>
			<div class="modal fade" role="modal" id="mymodal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href="#" class="close" data-dismiss="modal" >&times;</a>
						</div>
						<div class="modal-body" id="editresult">
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div><!---modal closes--->
		</div><!----container closes--->
	</body>
	
</html>