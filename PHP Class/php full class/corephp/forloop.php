<h2> For Loop Example</h2>
   <style>
	   .odd{background:red; height:100px; width:100px; float:left; margin:20px;} 
	   .even{background:blue; height:100px; width:100px; float:left; margin:20px;} 
	</style>
	
    <?php
	  for($i=1; $i<=10; $i++)
	  {
        if($i%2==0)
		{
			echo "<div class='even'>Even No $i</div>";
	  }else{
			echo "<div class='odd'>odd No $i</div>";
		  
	  }
      }
	  echo "<div style='clear:both;'></div>";
	  
	  for($i=10; $i>=1; $i--)
	  {
        if($i%2==0)
		{
			echo "<div class='even'>Even No $i</div>";
	  }else{
			echo "<div class='odd'>odd No $i</div>";
		  
	  }
      }
   
	  ?>
	  <div style="clear:both";></div>
	  <h4>Do while Example</h4>
	  
	  <?php
	     $i=100;
		 do{
			 if($i%2==0)
			 {
				 echo "<div class='even'> Even No $i</div>";
			 }else if($i%2!=0)
			 {
				 echo "<div class='odd'> Even No $i</div>";
			 }
			  $i++;
			  }
                  while($i<=20);		 
	  ?>
	  <div style="clear:both";></div>
	  <h4>while Loop Example</h4>
	  <?php
	     $i=10;
	      while($i<=20)
		  {
			if($i%2==0) 
			{
		echo "<div class='even'> Even No $i</div>";
			}else{
				 echo "<div class='odd'> Even No $i</div>";
			 }
			  $i++;
		  }
	  ?>