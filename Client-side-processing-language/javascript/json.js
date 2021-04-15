

var item = [

           {"name": "Apple", "price":"200","color":"red"},
		   {"name": "mango", "price":"80","color":"pink"},
		   {"name": "banana", "price":"25","color":"yellow"},
		   {"name": "orange", "price":"60","color":"orange"},
		   {"name": "papaya", "price":"40","color":"green"},
		   
           ];
		   
var jsonitem = '[{"name": "Apple", "price":"200","color":"red"},{"name": "banana", "price":"25","color":"yellow"},{"name": "orange", "price":"60","color":"orange"},{"name": "papaya", "price":"40","color":"green"}]';
		   
		   
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
		    
			function showdata2()
		   {
			  // alert(jsonitem.length);
			   var myitem = JSON.parse(jsonitem); //converting  from json to array
			   
			   //alert(myitem.length);
			   
			   var data = "";
			   for(var i=0; i<myitem.length; i++)
			   {
				   var n = myitem[i].name;
				   var p = myitem[i].price;
				   var c = myitem[i].color;
				   
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
			
		   function abc (index)
		   {
		var data="<table width='100%' bgColor=' "+item[index].color+"'> <caption> Item Details </caption>";
        data = data + "<tr> <th>Item Name </th> <td>"+item[index].name+"</td></tr>";	
		
		data = data + "<tr> <th>Item Price </th> <td>"+item[index].price+"</td></tr>";	
		
		data = data + "<tr> <th>Item Color </th> <td>"+item[index].color+"</td></tr>";
		
		data =data +"</table>";
		
		document.getElementById("ms2").innerHTML=data;
		   }