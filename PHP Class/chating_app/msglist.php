<?php 
  include('dbcon.php');
  $sql="select * from chat_msg";
  $res=mysqli_query($conn,$sql);
  while ($row=mysqli_fetch_object($res)) {
  	   $timestamp = $row->created_at; 
       $splits =  explode(" ",$timestamp);
       $get_date = $splits[0];
       $get_time = $splits[1];
       echo "<div class='p-2'><span class='bg-light f-cga py-1 px-2 rounded'>$row->text <small style='font-size:10px;vertical-align: sub;'>".$get_time."</small></span>
      </div><br>";
  }
?>