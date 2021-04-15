function validateupdatecontact()
{
	var name=$("#efname").val();
	var email=$("#eemail").val();
	var mobile=$("#emobile").val();
	var message=$("#emessage").val();
	var id=$("#eid").val();
	var status=true;
	//---------------------for name------------------------------//
	if(name=="")
	{
		$("#efname").css("border","2px solid red");
		status=false;
	}
	else{
		$("#efname").css("border","");
	}
	//---------------------for email------------------------------//
	if(email=="")
	{
		$("#eemail").css("border","2px solid red");
		status=false;
	}
	else{
		$("#eemail").css("border","");
	}
	//---------------------for mobile------------------------------//
	if(mobile=="")
	{
		$("#emobile").css("border","2px solid red");
		status=false;
	}
	else{
		$("#emobile").css("border","");
	}
	//---------------------for message------------------------------//
	if(message=="")
	{
		$("#emessage").css("border","2px solid red");
		status=false;
	}
	else{
		$("#emessage").css("border","");
	}
	//-----------------------------------------------------------------//
	if(status==true)
	{
		
		var mydata={"n":name,"e":email,"mob":mobile,"mesg":message,"eid":id};
		$.ajax({
			url:"updatecontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}
		});//ajax close
	}//if close
}