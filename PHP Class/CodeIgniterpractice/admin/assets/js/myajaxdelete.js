function deletecontact(contactId)
{
	var status=confirm("Are u sure u want to delete contact with id="+contactId);
	if(status==true)
	{
		mydata={"cid":contactId};
		$.ajax({
			url:"deletecontactajax.php",
			method:"POST",
			data:mydata,
			success:function(response){
				alert(response);
			}
		});//ajax close
	}//if closes
}	
