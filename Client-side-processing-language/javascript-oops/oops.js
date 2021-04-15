 
 //class is collection of  member variables and member methods

class User
{   
     constructor()
	 {
		 this.name="ABC"; // this keyword is used with const to declare variables
		 this.mobile="7676554677";
		 this.age="23 years";
		 this.gender="male";
	 }
	get details()
	{
		var data = "";
		
		data = data + "<p>Customer Name :"+ this.name+"</p>";
		data = data + "<p>Mobile No :"+ this.mobile+"</p>";
		data = data + "<p>Age :"+ this.age+"</p>";
		data = data + "<p>Gender :"+ this.gender+"</p>";
		return data;
	
	}
	get setdetails()
	{
		  this.name = prompt("Enter Your Name");
		  this.mobile = prompt("Enter Your Mobile no");
		  this.age = prompt("Enter Your age");
		  this.gender = prompt("Enter Your Gender");
		  alert("Your details Save Today successfully !");
		
	}
}//User class end here

class Customer extends User //customer will inherit all feature of user
{
	constructor()
	{
		super();  // all the parent variable access through super keyword
		this.productName="Lux";
		this.price ="20";
		this.pdate ="22-03-2018";
	}
	
	get setdetails()
	{
		// parent class
		  this.name = document.getElementById("uname").value;
		  this.mobile = document.getElementById("mobile").value;
		  this.age = document.getElementById("age").value;
		  this.gender = document.getElementById("gender").value;
		  
		  // child class
		  this.productName = document.getElementById("pname").value;
		  this.price = document.getElementById("price").value;
		  this.pdate = document.getElementById("pdate").value;
		  
		  alert("Your details Save Today successfully !");
		
	}
	get item()
	{
		var data = "<table bgcolor='red' cellpadding='7'>";
		data = data + "<caption> Item Details </caption>";
		
		data = data + "<tr><th> product Name</th><td>" +this.productName+"</td></tr>";
		data = data + "<tr><th> product price</th><td>" +this.price+"</td></tr>";
		data = data + "<tr><th> product Name</th><td>" +this.pdate+"</td></tr>";
		data = data + "</table>";
		return data;
	}
	get viewdata()
	{
		document.getElementById("msg").innerHTML=this.details + this.item;
	}
}

const obj = new Customer()
 
 
 
 
