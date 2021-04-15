$(function(){
	
	$("#btn1").click(function()
	{
		var sts=true;  //to check form status its filled or not
		var fname = $("#fname").val().trim();
		if(fname=="")
		{
			sts = false;
			$("#fname").css({"border":"1px solid red"});
			$("#nameerror").text("Please Enter Your Name !");
		}
		else
		{
			$("#fname").css({"border":""});
			$("#nameerror").text("");
		}//name validation end
		
		var mobile = $("#mobile").val().trim();
		if((mobile=="")||(mobile.length<10)||(isNaN(mobile)))
		{
			sts = false;
			$("#mobile").css({"border":"1px solid red"});
			$("#mobileerror").text("Please Enter Your Mobile No !");
		}
		else
		{
			$("#mobile").css({"border":""});
			$("#mobileerror").text("");
		}
		
		var email = $("#email").val().trim();
		
		if(email=="")
		{
			sts = false;
			$("#email").css({"border":"1px solid red"});
			$("#emailerror").text("Please Enter Your Email !");
		}
		else
		{
			$("#email").css({"border":""});
			$("#emailerror").text("");
		}
		
		var password = $("#password").val().trim();
		if(password=="")
		{
			sts = false;
			$("#password").css({"border":"1px solid red"});
			$("#passworderror").text("Please Enter password !");
		}
		else
		{
			$("#password").css({"border":""});
			$("#passworderror").text("");
		}
		
		var gender=$(".gender:checked").length;
		if(gender==0)
		{
			$("#gendererror").html("<br>Please Select Your gender");
		}
		else
		{
			$("#gendererror").html(""); 
		}
		
		
		
		 var city = $("#city").val().trim();
		if(city=="")
		{
			sts = false;
			$("#city").css({"border":"1px solid red"});
			$("#cityerror").text("Please Enter Your City !");
		}
		else
		{
			$("#city").css({"border":""});
			$("#cityerror").text("");
		}
		
		
		
		 var address = $("#address").val().trim();
		if((address=="") || (address.length<30))
		{
			sts = false;
			$("#address").css({"border":"1px solid red"});
			$("#addresserror").text("Invalid Address !");
		}
		else
		{
			$("#address").css({"border":""});
			$("#addresserror").text("");
		}
		
		
		
				var file = $("#file").val().trim();
				var fileArray = file.split(".");//converting to array
				var ext = fileArray[fileArray.length-1];
				
				
				if((file =="") || (ext != "jpg"))
				{
					
					$("#file").css({"border":"1px solid red"});
					$("#fileerror").text("Plaese select valid file!");
				}
				else
				{
					$("#file").css({"border":""});
					$("#fileerror").text("");
				}
		
		
		var  tnc = $("#tnc:checked").length;
		if(tnc==0)
		{
			sts = false;
			$("#tncerror").html("please select checkbox");
		}
		else
		{
			$("#tncerror").html("");
		}
		
		if(sts==true)
		{
			$("#form1").submit();
		}
	});
});



















