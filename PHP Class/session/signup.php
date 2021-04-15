<html>
   <body>
   
   
    <form action="saveuser.php" method="POST" enctype="multipart/form-data">
	   <table align="center" cellpadding="10">
	   <caption><h3> Sign Up</h3></caption>
	   <tr>
	      <th bgcolor="orange">Full Name</th>
	      <th bgcolor="pink"><input type="text" name="name"></th>
	   </tr>
	   
	   <tr>
	      <th bgcolor="orange">Mobile No</th>
	      <th bgcolor="pink"><input type="text" name="mobile"></th>
	   </tr>
	  
	  <tr>
	      <th bgcolor="orange">email</th>
	      <th bgcolor="pink"><input type="email" name="email"></th>
	   </tr>
	   
	   <tr>
	      <th bgcolor="orange">password</th>
	      <th bgcolor="pink"><input type="password" name="pass"></th>
	   </tr>
	   <tr>
	      <th bgcolor="orange">userimage</th>
	      <th bgcolor="pink"><input type="file" name="image"></th>
	   </tr>
	   
	   <tr>
	      <th colspan="2">
		     <button type="submit">Register</button>
		     <button type="reset">Clear</button>
			 <hr color="red" size="1">
			 <a href="index.php">I have account</a>
	      </th>
	   </tr>
	   </table>
	</form>
  </body> 
</html>