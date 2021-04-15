<?php
    // Three method to print data
   
    echo "hello test";  //php 5+ all versions
	
	print ("Hello print"); //php4
	
	printf("Hello printf"); //php4

?>
<h1>hello h1 </h1>

<?php
   echo"<h2> Hello H2</h2>";
   
   echo'<h2> Hello H2 2222222</h2>';
   
   $a = 100;
   $b = "100HELLO500";
   $c = 100.50;
   
   echo $a + $b + $c;
   echo "<hr>";
   
   echo $a ."-----". $b ."-------". $c;
   
   echo "<hr>";
   echo "$a $b $c"; //double cots pass variable
   
    echo "<hr>";
	
    echo '$a $b $c'; //single cots don't pass variable
?>
<style>
  .odd{ background:red; height:100px; width:100px; float:left; margin:20px;}
  
  .even{ background:blue; height:100px; width:100px; float:left; margin:20px;}
</style>

<?php

    echo"<div class='odd'> </div>";//starting with double cots between single cots
	echo"<div class='even'> </div>";
	echo'<div class="odd"> </div>';   //starting with single cots between double cots
	echo"<div class='even'> </div>";
	echo"<div class='odd'> </div>";

?>