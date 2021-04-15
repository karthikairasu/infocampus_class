function obj.setdetails()
{
var a = document.getElementById("name").value;
	   if (a=="")
	   {
	  document.getElementById("name").style.borderColor="red";
	  document.getElementById("nameerror").innerHTML="Enter email id";
	   }
	   else{
	  document.getElementById("name").style.borderColor="";
	  document.getElementById("nameerror").innerHTML="";
	   }
}