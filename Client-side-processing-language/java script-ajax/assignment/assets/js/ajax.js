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
                document.getElementById("mypage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","contact.html",true);
        xmlhttp.send();
	//ajax end
	
}
function login()

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
                document.getElementById("mypage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","login.html",true);
        xmlhttp.send();
	//ajax end
	
}
function register()

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
                document.getElementById("mypage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","register.html",true);
        xmlhttp.send();
	//ajax end
	
}

function allcontact()

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
                document.getElementById("mypage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","allcontact.html",true);
        xmlhttp.send();
	//ajax end
	
}
function gallary()

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
                document.getElementById("mypage").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","gallary.html",true);
        xmlhttp.send();
	//ajax end
	
}