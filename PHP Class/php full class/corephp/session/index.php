<html>
  <body>
     <center>
	     <?php
		    session_start();
			if( isset($_SESSION['msg'])) // to check available or not
			{
				echo $_SESSION['msg']; // to print
				unset($_SESSION['msg']);	
			}
		 ?>
	 </center>
  <form action="usercheck.php" method="post">
	     <table align="center" cellpadding="10">
		      <caption><h3>Login </h3></caption>
			  
			  
			  <tr>
			       <th bgcolor="orange"> E-mail </th>
			       <td bgcolor="pink"> <input type="text" name="email"> </td>
			  </tr>
			  <tr>
			       <th bgcolor="orange">Password </th>
			       <td bgcolor="pink"> <input type="text" name="pass"> </td>
			  </tr>
			  <tr>
			       <th colspan="2">
						<button type="submit">Login</button>
						<button type="reset">Clear</button>
												<hr color="red" size="1">
						<a href="signup.php">I am new user</a>
				   </th>
			       
			  </tr>
		 </table>
	  </form>
  </body>
</html>