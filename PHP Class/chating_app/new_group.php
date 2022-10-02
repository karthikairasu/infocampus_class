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
<div id="mySidenav" class="sidenav f-ply">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <!--------profile open--------->
      <div class="text-light">
          <div class="pt-1">
          	<img class="rounded-circle my-3 ml-3" src="assets/images/pro.jpg" style="width:70px;height:70px">
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
  <nav class="navbar fixed-top navbar-light bg-burgundy">
   <div class="col-3">
       <a class="navbar-brand" href="#">
       <i class="fas fa-arrow-left text-light p-1 border border-light"></i></a>
   </div>
   <div class="col-6">
      <p class="mb-0 text-center text-white py-1 px-2"><span><b>New Group</b></span></p>
    </div>
    <div class="col-3 text-right"><a class="ml-auto" href="#"><i class="fas fa-search text-white"></i></a>
    </div>  
  </nav>
  <br class="">
  <br class="">
<div class="container-fluid px-1 py-0 mt-3">
  <div class="card py-2 mt-1 sd col-md-6 offset-md-3">
    <div class="row m-0">
      <div class="col-2 px-1 d-flex align-items-center justify-content-center">
        <img src="assets/images/pro.jpg" class="rounded-circle img-fluid" style="width:50px;height: 50px">
      </div>
      <div class="col-10 p-0 px-1">
        <p class="mb-0"><b>Daily Updates</b></p>
        <p class="text-muted mb-1 text-truncate">you:photo</p>
      </div>
    </div>
  </div>
  <div class="card py-2 mt-1 sd col-md-6 offset-md-3">
    <div class="row m-0">
      <div class="col-2 px-1 d-flex align-items-center justify-content-center">
        <img src="assets/images/pro.jpg" class="rounded-circle img-fluid" style="width:50px;height: 50px">
      </div>
      <div class="col-10 p-0 px-1">
        <p class="mb-0"><b>Daily Updates</b></p>
        <p class="text-muted mb-1 text-truncate">you:photo</p>
      </div>
    </div>
  </div>
  <div class="card py-3 mt-1 sd col-md-6 offset-md-3">
    <div class="row m-0">
      <div class="col-2 px-1 d-flex align-items-center justify-content-center">
        <img src="assets/images/pro.jpg" class="rounded-circle img-fluid" style="width:50px;height: 50px">
      </div>
      <div class="col-10 p-0 px-1">
        <p class="mb-0"><b>Daily Updates</b></p>
        <p class="text-muted mb-1 text-truncate">you:photo</p>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>