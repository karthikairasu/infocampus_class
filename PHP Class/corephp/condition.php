<?php

    echo "<h2> PHP Condition Example</h2>";
	echo "<h4>if else if example</h4>";
	$a=100;
	$b=200;
	$c=50;
	
	if( $a> $b )
	{
	echo "Between $a and $b the higher value is :".$a;	
	}else
	{
	echo "Between $a and $b the higher value is :".$b;		
	}	

?>
<hr color="red">
<h4>if else if example</h4>
<?php
   if(($a>$b) &&($a>$c))
   {
	  echo "Between $a ,$b ,$c the higher value is :".$a;	
   } 
   else if(($b>$a) &&($b>$c))
   {
	   echo "Between $a ,$b ,$c the higher value is :".$b;	
   }
   else
   {
	   echo "Between $a ,$b ,$c the higher value is :".$c;	
   }
?>
<hr color="red">
<h4>Nested if example</h4>
<?php
   if($a>$b)
   {
	  if($a%2==0)
	  {
		echo "Between $a ,$b ,$a the higher value is :".$a;	  
	  }	
	  else{
		echo "Between $a ,$b ,$a the higher value is :".$a;  
	  }  
   }
   else{
	   $d = $b * $b;
	   echo "Between $a ,$b ,$b the higher value is :".$d;
   }
?>
<hr color="red">
<h4>Switch Case example</h4>

<?php
   $url = "login.php"; //given case (home,signup,contact.php) to checking to case
   switch($url)
   {
	   case"home.php";
	   echo "<h3> It will load home page</h3>";
	   break;
	   
	    case"login.php";
	   echo "<h3> It will load login page</h3>";
	   break;
	   
	    case"signup.php";
	   echo "<h3> It will load signup page</h3>";
	   break;
	   
	    case"contact.php";
	   echo "<h3> It will load contact page</h3>";
	   break;
	   
	   default :
	    echo"<h3>it will load error page</h3>";
   }
?>

