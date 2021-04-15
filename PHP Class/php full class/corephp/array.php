<?php
    echo "<h3>Array is a collection of similar data types, it help to store multiple values in a single variable</h3>";
	
	$a = 100;
	$myarray = array(10, 20, 100, "apple", "mango", "orange", 50.50, 99999);
   
      echo $a;
	  
	  echo "<br>";
	  
	  // hoe to print a structure of an array using php
	  var_dump($myarray);  // array declaration in var_dump
	  
	  echo "<hr>";
	  
	  echo "<pre>";
	  print_r($myarray); // array declaration in print_r
	  echo "</pre>";
	
       // hoe to add new element inside the array
	     
	 array_push($myarray, "banana");  
	  	  echo "<pre>";
	  print_r($myarray);
	  echo "</pre>";
	
	array_unshift($myarray, "graphes");  
	  	  echo "<pre>";
	  print_r($myarray);
	  echo "</pre>";
	
       // how to remove element 
	   
	   array_pop($myarray);  
	  	  echo "<pre>";
	  print_r($myarray);
	  echo "</pre>";
		  array_shift($myarray);  
	  	  echo "<pre>";
	  print_r($myarray);
	  echo "</pre>";

	  
	  // how to merge two or more array together
	  
	  $myarray2 = array(10, 20, 50, 1000, "graphes", "papya", "mango", 2000);
	  $myarray3 = array("graphes", "papya", "mango");
	  
	  $array4 = array_merge($myarray,$myarray2,$myarray3);
	  
	  echo "<pre>";
	  print_r($array4);
	  echo "</pre>";
	  
	  echo "<hr>";
	  
	  $array5 = array_combine($myarray,$myarray2);
	  
	  echo "<pre>";
	  print_r($array5);
	  echo "</pre>";
	
	   // difference bettween combine & merge => 

      // hoe to remove duplicate elemennt from  the array
      $array6 = array_unique($array4);
      
	  echo "<pre>";
	  print_r($array6);
	  echo "</pre>";
	
	  // how to sort the array
	  
	  sort($array6);
	  
	   echo "<pre>";
	  print_r($array6);
	  echo "</pre>";
	
	  // how to sort decending array
	  
	  rsort($array6);9
	  
	  echo "<pre>";
	  print_r($array6);
	  echo "</pre>";
	 ?>
	
	
	