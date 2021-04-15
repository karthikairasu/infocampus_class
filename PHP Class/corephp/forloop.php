<h2>For loop Example</h2>
<style>
  .odd{ background:red; height:100px; width:100px; float:left; margin:20px;}
  
  .even{ background:blue; height:100px; width:100px; float:left; margin:20px;}
</style>
  <?php 
     for($i=1; $i<=10; $i++)
	 {
		// echo $i."<br>";
		if($i%2==0)
		{
			echo "<div class='even'>Even No $i</div >";
			
		}else{
			echo "<div class='odd'>odd No $i</div >";
		}
	 }	

   echo"<div style='clear:both;'></div>";	 
   
    for($i=10; $i>=1; $i--)
	 {
		// echo $i."<br>";
		if($i%2==0)
		{
			echo "<div class='even'>Even No $i</div >";
			
		}else{
			echo "<div class='odd'>odd No $i</div >";
		}
	 }
  ?>
  <div style='clear:both;'></div>
  <h4>Do while example</h4>
  
  <?php
      $i=100; //$i=1;
	  do{
		  if($i%2==0)
		  {
			 echo "<div class='even'>Even No $i</div >"; 
		  }
		  else{
			 echo "<div class='odd'>odd No $i</div >"; 
		  }
		  $i++;
	  }
	  while($i<=20);
  ?>
    <div style='clear:both;'></div>
  <h4> while loop example</h4>
  <?php
      $i=10;    //100 is not come box while loop only do while come
	  while($i<=20)
	  {
		  if($i%2==0)
		  {
			 echo "<div class='even'>Even No $i</div >"; 
		  }
		  else{
			 echo "<div class='odd'>odd No $i</div >"; 
		  }
		  $i++;
	  }
	  
  ?>