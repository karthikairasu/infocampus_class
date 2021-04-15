function one()
{
			
				  if (window.XMLHttpRequest) {
					// code for modern browsers
					xML = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					XML = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xML.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xML.open("GET", "dashboard.php", true);
				  xML.send();
  }
function two()
{
 if (window.XMLHttpRequest) {
					// code for modern browsers
					xML = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					XML = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xML.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xML.open("GET", "contact.php", true);
				  xML.send();
				  }
function three()
{
	if (window.XMLHttpRequest) {
					// code for modern browsers
					xML = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					XML = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xML.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xML.open("GET", "contactlist.php", true);
				  xML.send();
}
function four()
{
if (window.XMLHttpRequest) {
					// code for modern browsers
					xML = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					XML = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xML.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xML.open("GET", "newproduct.php", true);
				  xML.send();
				  }
function five()
{
if (window.XMLHttpRequest) {
					// code for modern browsers
					xML = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					XML = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xML.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xML.open("GET", "productlist.php", true);
				  xML.send();
}

     function savecontact() 
	 {
		 var n = document.getElementById("fname").value;
		 var m = document.getElementById("mobile").value;
		 var msg = document.getElementById("message").value;
		 
		 
		 
		 
		  var url ="savecontact.php?name="+n+"&mobile="+m+"&msg="+msg;
		  //alert(url);
		  	if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) 
					{
					  //document.getElementById("datablock").innerHTML = this.responseText;
					  alert(this.responseText);
					  three();
					}
				  };
				  xmlhttp.open("GET",url,true);
				  xmlhttp.send(); 
	 }  
	 function saveproduct() 
	 {
		 var n = document.getElementById("fname").value;
		 var price = document.getElementById("price").value;
		 var qty = document.getElementById("qty").value;
		 var desc = document.getElementById("description").value;
		 
		 
		 
		 
		  var url ="saveproduct.php?name="+n+"&price="+price+"&qty="+qty+"&desc="+desc;
		  //alert(url);
		  	if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) 
					{
					  //document.getElementById("datablock").innerHTML = this.responseText;
					  alert(this.responseText);
					  five();
					}
				  };
				  xmlhttp.open("GET",url,true);
				  xmlhttp.send(); 
	 }  
	 
function deletecontact(conid)
{
	var url ="deletecontact.php?cid="+conid;
		  //alert(url);
		  	if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) 
					{
					  //document.getElementById("datablock").innerHTML = this.responseText;
					  alert(this.responseText);
					  three();
					}
				  };
				  xmlhttp.open("GET",url,true);
				  xmlhttp.send(); 
}
function deleteproduct(pid)
{
	
		var url ="deleteproduct.php?cid="+pid;

		  //alert(url);
		  	if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) 
					{
					  //document.getElementById("datablock").innerHTML = this.responseText;
					  alert(this.responseText);
				       five();
					}
				  };
				  xmlhttp.open("GET",url,true);
				  xmlhttp.send(); 
}