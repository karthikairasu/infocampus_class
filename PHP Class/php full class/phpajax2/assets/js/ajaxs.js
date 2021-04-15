

function two()
{
	  if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xmlhttp.open("GET", "addbrand.html", true);
				  xmlhttp.send(); 
	
}

function three()
{
	 if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xmlhttp.open("GET", "brandlist.php", true);
				  xmlhttp.send(); 
	
	
}

function four()
{
	if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xmlhttp.open("GET", "addcategory.html", true);
				  xmlhttp.send(); 
	
}

function five()
{
	if (window.XMLHttpRequest) {
					// code for modern browsers
					xmlhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("datablock").innerHTML = this.responseText;
					}
				  };
				  xmlhttp.open("GET", "categorylist.php", true);
				  xmlhttp.send(); 
	

}
     function savebrand() 
	 {
		 var n = document.getElementById("fname").value;
		 
		 
		 
		 
		 
		  var url ="savebrands.php?name="+n;
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
	
 function savecategory() 
	 {
		 var n = document.getElementById("cname").value;
		 
		// alert("we r here");
		 
		 
		 
		  var url ="savecategory.php?name="+n;
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


		/*var xhttp;
				  if (window.XMLHttpRequest) {
					// code for modern browsers
					xhttp = new XMLHttpRequest();
					} else {
					// code for IE6, IE5
					xhttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
					  document.getElementById("demo").innerHTML = this.responseText;
					}
				  };
				  xhttp.open("GET", "home.html", true);
				  xhttp.send(); */  