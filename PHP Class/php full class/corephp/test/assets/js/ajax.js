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
				  xML.open("GET", "register.php", true);
				  xML.send();
  }


 
     function savelist() 
	 {
		 var n = document.getElementById("name").value;
          		
		var url ="savelist.php?name="+n;
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
					  two();
					}
				  };
				  xmlhttp.open("GET",url,true);
				  xmlhttp.send(); 		
		}  
