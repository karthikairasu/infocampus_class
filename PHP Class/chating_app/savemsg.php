<?php
   session_start();
   include('dbcon.php');
   $user_id=$_POST['myid'];
   $text=$_POST['tmsg'];
   date_default_timezone_set("Asia/Calcutta");
   $time=date('Y-m-d h:iA');
 
   $sql="insert into chat_msg(user_id,text,created_at) values('$user_id','$text','$time')";
   //echo $sql;die;
   $status=mysqli_query($conn,$sql);
   if($status){
     echo "message stored successfully";
   }else{
   	mysqli_error();
   }
   mysqli_close($conn);
?>