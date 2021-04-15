<?php
   echo "<h3> Array is collection of similar data types, it help to store multiple values in a
   single variables</h3>";
   
   $a= 100;
   $myarray = array(10,20,100,"Apple", "mango", "orange", 50.50,99999);
   
   echo $a;
   
   echo "<br>";
   
   //how to print structure of an array using php
  var_dump($myarray); //inside single dimensional the array multiple values system confuse.
   
   echo "<hr>";  // single dimensional array to print echo.and multidimensional array to print_r.
   
   echo"<pre>";
   print_r ($myarray); //print_r is structure of array to print in best to order
   echo"</pre>";
   
   //how to add new element inside array
   array_push($myarray,"banana"); //push means add last in the values.
   echo"<pre>";
   print_r ($myarray); 
   echo"</pre>";
   
   
   array_unshift($myarray,"Grapes"); //unshift means add first in the values.
   echo"<pre>";
   print_r ($myarray); 
   echo"</pre>";
   
   //how to remove elements
   array_pop($myarray); // pop means remove last in the values.
   echo"<pre>";
   print_r ($myarray); 
   echo"</pre>";
   
   array_shift($myarray); // shift means remove first in the values.
   echo"<pre>";
   print_r ($myarray); 
   echo"</pre>";
   
   
   //how to merge two or more array together
   $myarray2 = array(10,20,50,1000, "Grapes","papaya", "mango", 2000);
   $myarray3 = array( "Grapes","papaya", "mango");

   $array4 = array_merge($myarray,$myarray2,$myarray3);//must not contain equal number of element 
   
   echo"<pre>";
   print_r ($array4); 
   echo"</pre>";
   
   $array5 = array_combine($myarray,$myarray2);// must contain equal number of element
   
   echo"<pre>";
   print_r ($array5); 
   echo"</pre>";
   
   
   //how to remove duplicate element from array
   $array6 = array_unique($array4);
   echo"<pre>";
   print_r ($array6); 
   echo"</pre>";
   
   // how to sort the array
   sort($array6);
   
   echo"<pre>";
   print_r($array6);
   echo"</pre>";
   
   rsort($array6);
   
   echo"<pre>";
   print_r($array6);
   echo"</pre>";
   
   
?>