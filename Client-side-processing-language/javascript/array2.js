

var item = [

           {"name": "Apple", "price":"200","color":"red"},
		   {"name": "mango", "price":"80","color":"pink"},
		   {"name": "banana", "price":"25","color":"yellow"},
		   {"name": "orange", "price":"60","color":"green"},
		   {"name": "papaya", "price":"40","color":"maroon"},
		   
           ];
		   
		   function showdata()
		   {
			   var data = "";
			   for(var i=0; i<item.length; i++)
			   {
				   var n = item[i].name;
				   var p = item[i].price;
				   var c = item[i].color;
				   
				   data = data + "<tr>";
				   data = data + "<td><a href='#' onclick='abc("+i+")'>"+ n +"</td>";
				   data = data + "<td>"+ p +"</td>";
				   data = data + "<td>"+ c +"</td>";
				   data = data + "</tr>";
			   }
			   var table = "<table width='100%'>  <tr> <th> Item Name</th> <th>price</th> <th>color</th> </tr>";
			   
			   var finaldata = table + data + "</table>";
			   document.getElementById("msg").innerHTML=finaldata;
		   }
		   function addnew()
		   {
			      
		   
			   var name = document.getElementById("name").value;
			   var price = document.getElementById("price").value;
			   var color = document.getElementById("color").value;
			   
			   var newArray = {"name":name, "price":price, "color":color};
			   
			   item.push(newArray);
			   
			   showdata();
			  
                var name = document.getElementById("name").value;
			   var price = document.getElementById("price").value;
			   var color = document.getElementById("color").value;			  
		   
		   }
		   function abc (index)
		   {
		var data="<table width='100%' bgColor=' "+item[index].color+"'> <caption> Item Details </caption>";
        data = data + "<tr> <th>Item Name </th> <td>"+item[index].name+"</td></tr>";		
		data = data + "<tr> <th>Item Price </th> <td>"+item[index].price+"</td></tr>";	
		data = data + "<tr> <th>Item Color </th> <td>"+item[index].color+"</td></tr>";
		data =data +"</table>";
		document.getElementById("ms2").innerHTML=data;
		   }