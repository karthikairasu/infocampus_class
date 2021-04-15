function editcontact(contactId)
{
	var status=confirm("Are u sure u want to edit contact with id="+contactId);
	if(status==true)
	{
		mydata={"cid":contactId};
		$.ajax({
			url:"editcontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				$("#result").html(response);
			}
		});//ajax close
	}//if closes
} 
