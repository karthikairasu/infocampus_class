function about()

{
	//ajax start
	   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pagedata").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","about.html",true);
        xmlhttp.send();
	//ajax end
	
}
function contact()

{
	//ajax start
	   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pagedata").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","contact.html",true);
        xmlhttp.send();
	//ajax end
	
}
function signup()

{
	//ajax start
	   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pagedata").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","signup.html",true);
        xmlhttp.send();
	//ajax end
	
}
function userlist()

{
	//ajax start
	   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               var user = JSON.parse(this.responseText);
			   //loop start
			   var data = "<table class='table table-bordered'>";
		data = data + "<caption class='text-center'>JSON User List</caption>";
		for(var i=0; i<user.length; i++)
		{
			data = data +"<tr>";
			
			data = data +"<td>" + user[i].name + "</td>";
			data = data +"<td>" + user[i].city + "</td>";
			data = data +"<td>" + user[i].age + "</td>";
		
			data = data +"</tr>";
		}	
        data = data +"</table>";
        document.getElementById("pagedata").innerHTML=data;		
			   //loop end
            }
        };
        xmlhttp.open("GET","user.json",true);
        xmlhttp.send();
	//ajax end
	
}
function contactlist()

{
	//ajax start
	   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               var contact = JSON.parse(this.responseText);
			   //loop start
			   var data = "<table class='table table-bordered'>";
		data = data + "<caption class='text-center'>contact List</caption>";
		for(var i=0; i<contact.length; i++)
		{
			data = data +"<tr>";
			
			data = data +"<td>" + contact[i].name + "</td>";
			data = data +"<td>" + contact[i].mobile + "</td>";
			data = data +"<td><img src='"+contact[i].image + "'class='img-responsive' height='100%' width='100%'></td>";
		
			data = data +"</tr>";
		}	
        data = data +"</table>";
        document.getElementById("pagedata").innerHTML=data;		
			   //loop end
            }
        };
        xmlhttp.open("GET","contact.json",true);
        xmlhttp.send();
	//ajax end
	
}
function gallary()

{
	var myimage = [
	               {"name":"ABC", "photo":"1.jpe", "mobile":"9867543265"},
				   {"name":"AAA", "photo":"2.jpe", "mobile":"9874989090"},
				   {"name":"BBB", "photo":"3.jpe", "mobile":"9867548962"},
				   {"name":"CCC", "photo":"4.jpg", "mobile":"9867543265"},
				   {"name":"ABC", "photo":"5.jpe", "mobile":"9867545845"},
				   {"name":"ABC", "photo":"6.jpe", "mobile":"9867543265"},
				   {"name":"VVV", "photo":"7.jpe", "mobile":"9868811862"},
				   {"name":"ABC", "photo":"8.jpeg", "mobile":"9867543265"}
				   ]
				   var data = "<br><div class='row'>";
				   
				   for(var i=0; i<myimage.length; i++)
				   {
					   
					   data = data +"<div class='col-sm-3'>";
					   
					   data = data +"<div class='panel panel-primary'>";
					   data = data +"<div class='panel-heading'>"+myimage[i].name + "</div>";
					   data = data +"<div class='panel-body'><img src='"+myimage[i].photo + "'class='img-responsive'></div>";
					   data = data +"<div class='panel-footer'>"+myimage[i].mobile + "</div>";


					   data = data + "</div></div>";
				   }
				   
				   
				   data = data +"</div>";
				   document.getElementById("pagedata").innerHTML=data;	
	
}

function modalview()

{
	var myimage = [
	               {"name":"ABC", "photo":"1.jpe", "mobile":"9867543265"},
				   {"name":"AAA", "photo":"2.jpe", "mobile":"9874989090"},
				   {"name":"BBB", "photo":"3.jpe", "mobile":"9867548962"},
				   {"name":"CCC", "photo":"4.jpg", "mobile":"9867543265"},
				   {"name":"ABC", "photo":"5.jpe", "mobile":"9867545845"},
				   {"name":"ABC", "photo":"6.jpe", "mobile":"9867543265"},
				   {"name":"VVV", "photo":"7.jpe", "mobile":"9868811862"},
				   {"name":"ABC", "photo":"8.jpeg", "mobile":"9867543265"}
				   ]
				   var data = "<br><div class='row'>";
				   
				   for(var i=0; i<myimage.length; i++)
				   {
					   
					   data = data +"<div class='col-sm-3'>";
					   
					   data = data +"<div class='panel panel-primary'>";
					   data = data +"<div class='panel-heading'>"+myimage[i].name + "</div>";
					   data = data +"<div class='panel-body'><img src='"+myimage[i].photo + "'class='img-responsive'></div>";
					   data = data +"<div class='panel-footer'>"+myimage[i].mobile + "</div>";


					   data = data + "</div></div>";
				   }
				   
				   
				   data = data +"</div>";
				   
				   setTimeout(function ()
				   {
					   document.getElementById("msg2").innerHTML=data;	
					   
				   },3000);			   
				   //document.getElementById("msg2").innerHTML=data;	
	
}
//validation section
function contactcheck()
{
var a = document.getElementById("fname").value;
if(a=="")
{
	
	document.getElementById("fname").style.borderColor="red";
	document.getElementById("fullnameerror").innerHTML="Enter full name";
}else
{
	document.getElementById("fname").style.borderColor="";
	document.getElementById("fullnameerror").innerHTML="";
	
}


var a = document.getElementById("mobile").value;
	   if (a=="")
	   {
	  document.getElementById("mobile").style.borderColor="red";
	  document.getElementById("mobilenoerror").innerHTML="Enter mobile number";
	   }
	   else{
	  document.getElementById("mobile").style.borderColor="";
	  document.getElementById("mobilenoerror").innerHTML="";
	   }
	   
var a = document.getElementById("email").value;
	   if (a=="")
	   {
	  document.getElementById("email").style.borderColor="red";
	  document.getElementById("emailerror").innerHTML="Enter email id";
	   }
	   else{
	  document.getElementById("email").style.borderColor="";
	  document.getElementById("emailerror").innerHTML="";
	   }
	   
var a = document.getElementById("city").value;
	   if (a=="")
	   {
	  document.getElementById("city").style.borderColor="red";
	  document.getElementById("cityerror").innerHTML="Enter your city";
	   }
	   else{
	  document.getElementById("city").style.borderColor="";
	  document.getElementById("cityerror").innerHTML="";
	   }
 var a = document.getElementById("message").value;
	   if (a=="")
	   {
	  document.getElementById("message").style.borderColor="red";
	  document.getElementById("messageerror").innerHTML="Enter your message";
	   }
	   else{
	  document.getElementById("message").style.borderColor="";
	  document.getElementById("messageerror").innerHTML="";
	   }	      
	
}

//validation section
function signupcheck()
{
var a = document.getElementById("fname").value;
if(a=="")
{
	
	document.getElementById("fname").style.borderColor="red";
	document.getElementById("fullnameerror").innerHTML="Enter full name";
}else
{
	document.getElementById("fname").style.borderColor="";
	document.getElementById("fullnameerror").innerHTML="";
	
}


var a = document.getElementById("mobile").value;
	   if (a=="")
	   {
	  document.getElementById("mobile").style.borderColor="red";
	  document.getElementById("mobilenoerror").innerHTML="Enter mobile number";
	   }
	   else{
	  document.getElementById("mobile").style.borderColor="";
	  document.getElementById("mobilenoerror").innerHTML="";
	   }
	   
var a = document.getElementById("email").value;
	   if (a=="")
	   {
	  document.getElementById("email").style.borderColor="red";
	  document.getElementById("emailerror").innerHTML="Enter email id";
	   }
	   else{
	  document.getElementById("email").style.borderColor="";
	  document.getElementById("emailerror").innerHTML="";
	   }
	   
var a = document.getElementById("city").value;
	   if (a=="")
	   {
	  document.getElementById("city").style.borderColor="red";
	  document.getElementById("cityerror").innerHTML="Enter your city";
	   }
	   else{
	  document.getElementById("city").style.borderColor="";
	  document.getElementById("cityerror").innerHTML="";
	   }
	   

	   
var a = document.getElementById("password").value;
	   if (a=="")
	   {
	  document.getElementById("password").style.borderColor="red";
	  document.getElementById("passworderror").innerHTML="Enter your message";
	   }
	   else{
	  document.getElementById("password").style.borderColor="";
	  document.getElementById("passworderror").innerHTML="";
	   }
	   
var a = document.getElementById("confirm password").value;
	   if (a=="")
	   {
	  document.getElementById("confirm password").style.borderColor="red";
	  document.getElementById("confirmpassworderror").innerHTML="Enter your message";
	   }
	   else{
	  document.getElementById("confirm password").style.borderColor="";
	  document.getElementById("confirmpassworderror").innerHTML="";
	   }
	   
var a = document.getElementById("address").value;
	   if (a=="")
	   {
	  document.getElementById("address").style.borderColor="red";
	  document.getElementById("addresserror").innerHTML="Enter your message";
	   }
	   else{
	  document.getElementById("address").style.borderColor="";
	  document.getElementById("addresserror").innerHTML="";
	   }
	   
	
}



  