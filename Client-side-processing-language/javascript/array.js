   var c = ["Apple","mango","grapes",100,10.50];

function one()
{
	var a = Array("Apple","mango","grapes",100,10.50,99999999999);
	alert(a.length);
	alert(c.length);
}
function two()
{
	var b = Array("Apple","mango","grapes",100,10.50,99999999999);
	alert(b.length);
	alert(c.length);
	
}
function ShowArray()
{
	var data = "<ul>";
	for(var i=0; i<c.length; i++)
	{
		data = data + "<li>" +c[i] +"</li>";
	}	
	data = data + "</ul>";
	//alert(data);
	document.getElementById("msg").innerHTML=data;
	
}
function add1()//to add new element at end of array
{
	var item = document.getElementById("myitem").value;
	c.push(item);// to push inside array but in last
	showarray();
	document.getElementById("myitem").value="";// to clear
}
function add2()//to add new element at begening of array
{
	var item = document.getElementById("myitem").value;
	c.unshift(item);
	showarray();
	document.getElementById("myitem").value="";// to clear
}
function remove1()
{
	c.shift();//to remove from begening
	showarray();
}
function remove2()
{
	c.pop();//to remove from last
	showarray();
}
function searchData()
{
	var item =  document.getElementById("myitem").value;
	var index = c.indexOf(item);//-1 means not found, else found
	if(index == -1)
	{
		alert(item + ": Not Available");
		
	}else
	{
		alert(item + ": is Available on position as :"+index);
	}
	
}