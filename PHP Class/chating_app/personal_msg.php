<?php include("header.php"); ?>
<!-----------side nav start--------->
<?php
   session_start();
   if(!isset($_SESSION['mob']))
     
   {
    $_SESSION['msg'] = "Sorry ! Inorder to access Please Login";
      header("Location:login.php");   
   }
   
?>
<script type="text/javascript">
  $(function(){
    $("#msg_ent").click(function(){
      var myid=$("#myid").val();
      var text_msg=$("#text_msg").val();
      var status=true;
      if(text_msg=='')
      {
        $("#text_msg").css('border','2px solid red');
        status=false;
      }
      else{
        $("#text_msg").css('border','');
      }
      if(status==true){
        var mydata={"myid":myid,"tmsg":text_msg};
        $.ajax({
                url:"savemsg.php",
                method:"POST",
                data:mydata,
                success:function(response){
                  alert(response);
                  viewmsg();
                }

        });
      }
    })
  });
  function viewmsg(){
    $.ajax({
            url:"msglist.php",
            method:"GET",
            success:function(response){
              $("#result").html(response);
            }
    });
  }
</script>
<div id="mySidenav" class="sidenav f-ply">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <!--------profile open--------->
      <div class="text-light">
          <div class="pt-1">
          	<?php echo"<img class='rounded-circle border my-3 ml-3'  src='assets/profile/".$_SESSION['imag']."' style='width:70px;height:70px'>";?>
          </div>
          <p class="mb-0 pl-4"><?php echo $_SESSION['name']?></p>
          <h6 class="pt-1 pl-4 text-grey"><?php echo $_SESSION['mob']?></h6>
      </div><!--------profile close--------->
      <!-------- Account Menus open--------->
      <ul class="nav nav-tabs flex-column text-dark side-mu">
          <li class="nav-item">
             <a class="nav-link py-3" href=""><img src="assets/images/group.png" style="width:25px;height:25px">&nbsp;&nbsp; New Group</a>
          </li>
          <li class="nav-item">
             <a class="nav-link py-3" href=""><img src="assets/images/contacts.png" style="width:25px;height:25px">&nbsp;&nbsp; Contacts</a>
          </li>
          <li class="nav-item">
             <a class="nav-link py-3" href=""><img src="assets/images/invite.png" style="width:25px;height:25px">&nbsp;&nbsp; Invite Friends</a>
          </li>
          <li class="nav-item">
             <a class="nav-link py-3" href=""><img src="assets/images/setting.png" style="width:25px;height:25px">&nbsp;&nbsp; Settings</a>
          </li>
          <!-- <li class="nav-item">
             <a class="nav-link py-3" href="contact.html"><img src="assets/images/ic_contactus.png" style="width:30px;height:30px">&nbsp;&nbsp; Contact Us</a>
          </li> -->
          <li class="nav-item">
          <a class="nav-link py-3" href="logout.php" onclick=" return confirm('Are You sure you want to logout?');"><img src="assets/images/logout.png" style="width:25px;height:25px">&nbsp;&nbsp; Logout</a>
          </li>
      </ul>
      <!--------Account Menus close--------->
      <footer class="text-white side-ft"> v1.1</footer>
  </div>
  <!--------Side nav close--------->
  <nav class="navbar fixed-top navbar-light bg-burgundy px-2 py-1">
   <div class="col-3">
       <a class="navbar-brand" href="home.php">
       <i class="fas fa-arrow-left text-light"> <img class='rounded-circle border bg-white'  src='assets/profile/6.png' style='width:35px;height:35px'></i></a>
   </div>
   <div class="col-6">
      <p class="mb-0 text-center text-white py-1 px-2"><span><b><?php echo $_GET['name'];?></b></span></p>
    </div>
    <div class="col-3 text-right"><a class="ml-auto" href="#"><i class="fas fa-search text-white"></i></a>
    </div>  
  </nav>
  <br class="">
  <br class="">
<div class="container-fluid px-1 py-0 mt-3">
    <div class="py-2 mt-1 col-md-6 offset-md-3">
      <div class="d-flex flex-column mb-3" id="result">
       <?php 
            include('dbcon.php');
            $myid=$_SESSION['myid'];
            $frid=$_GET['id'];
            $sql="select * from chat_msg where user_id in ($myid,$frid)";
            $res=mysqli_query($conn,$sql);
            while ($row=mysqli_fetch_object($res)) {
              $timestamp = $row->created_at; 
               $splits =  explode(" ",$timestamp);
               $get_date = $splits[0];
               $get_time = $splits[1];
               echo "<div class='p-2'><span class='bg-light f-cga py-1 px-2 rounded'>$row->text <small style='font-size:10px;vertical-align: sub;'>".$get_time."</small></span>
              </div><br>";
            }
            mysqli_close($conn);
          ?>
          <?php 
           
          ?>
        <br>
      </div>
    </div>
  <div class="row fixed-bottom m-0">
    <div class="col-md"></div>
    <div class="col-10 col-md-5 px-1">
      <input class="form-control" name="text_msg" id="text_msg" placeholder="Type a message" style="height:40px;border-radius: 10px" required>
    </div>
    <input class="d-none" id="myid" value="<?php echo $_SESSION['myid'];?>">
    <input class="d-none" id="frid" value="<?php echo $_GET['id'];?>">
    <input class="d-none" id="frname" value="<?php echo $_GET['name'];?>"> 
    <input class="d-none" id="frmob" value="<?php echo $_GET['mob'];?>">  
    <div class="col-2 col-md-1 px-0 text-center">
      <a class="btn msg_ent text-center" id="msg_ent"><img src="assets/images/arrow.png" style="height: 25px;width: 25px;"></a>
    </div>
    <div class="col-md"></div>
  </div> 
</div>

<?php include("footer.php"); ?>