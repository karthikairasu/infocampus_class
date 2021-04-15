function validatecontact(){
	var name=$("#fname").val();
	var email=$("#email").val();
	var mobile=$("#mobile").val();
	var message=$("#message").val();
	var status=true;
	//---------------------for name------------------------------//
	if(name=="")
	{
		$("#fname").css("border","2px solid red");
		status=false;
	}
	else{
		$("#fname").css("border","");
	}
	//---------------------for email------------------------------//
	if(email=="")
	{
		$("#email").css("border","2px solid red");
		status=false;
	}
	else{
		$("#email").css("border","");
	}
	//---------------------for mobile------------------------------//
	if(mobile=="")
	{
		$("#mobile").css("border","2px solid red");
		status=false;
	}
	else{
		$("#mobile").css("border","");
	}
	//---------------------for message------------------------------//
	if(message=="")
	{
		$("#message").css("border","2px solid red");
		status=false;
	}
	else{
		$("#message").css("border","");
	}
	//-----------------------------------------------------------------//
	if(status==true)
	{
		var mydata={"n":name,"e":email,"mob":mobile,"mesg":message};
		$.ajax({
			url:"savecontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}
		});//ajax close
	}//if close
}//validatesavecontactcloses


