<html>
   <body>
   <center>
     <?php
	    session_start();
		if( isset($_SESSION['msg'])) // to check available or not
		{
			echo $_SESSION['msg'];// to print
			unset($_SESSION['msg']);// to delete from session
		}
	 ?>
   </center>
    <form action="usercheck.php" method="POST">
	   <table align="center" cellpadding="10">
	   <caption><h3>Login</h3></caption>
	  
	  <tr>
	      <th bgcolor="orange">email</th>
	      <th bgcolor="pink"><input type="email" name="email"></th>
	   </tr>
	   
	   <tr>
	      <th bgcolor="orange">password</th>
	      <th bgcolor="pink"><input type="password" name="pass"></th>
	   </tr>
	   
	   
	   <tr>
	      <th colspan="2">
		     <button type="submit">Register</button>
		     <button type="reset">Clear</button>
			 <hr color="red" size="1">
			 <a href="signup.php">I am new user</a>
	      </th>
	   </tr>
	   </table>
	</form>
   
</html>