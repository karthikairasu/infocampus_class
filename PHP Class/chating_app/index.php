<?php include("header.php"); ?>

  <div id="particles-js" class="bg-darkblue d-flex align-items-center justify-content-center">
    
    <div class="card col-lg-4 col-10 col-sm-6 position-absolute f-ply bg-translit px-5" id="Div1">
      <h6 class="text-center text-success mb-0"><b>
         <?php
          session_start();
        if( isset($_SESSION['msg'])) // to check available or not
        {
          echo $_SESSION['msg'];// to print
          unset($_SESSION['msg']);// to delete from session
        }
       ?>
       </b></h6>
       <form action="usercheck.php" method="post">
         <h4 class="text-center my-3 border-bottom pb-3">Login</h4>
         <div class="form-group">
          <label>Mobile No:</label>
          <input type="mobile" class="form-control" name="mob" required>
          </div>
          <div class="form-group">
          <label>Password:</label>
          <input type="password" class="form-control" name="pass" required>
          </div>
          <div class="form-group text-center py-2">
            <button class="btn btn-info w-100" type="submit">Submit</button>
          </div>
          <div class="form-group text-center">
            <a href="">Forgot Password?</a>
          </div>
          <div class="form-group text-center">
            <a class="text-danger" href="#" onclick="divVisibility('Div2')"><b>Not a member? Signup</b></a>
          </div>
        </form>
    </div>
    <div class="card col-lg-4 col-10 col-sm-6 position-absolute f-ply bg-translit px-5" id="Div2" style="display: none;">
      <h6 class="text-center text-success mb-0"><b>
         <?php
        if( isset($_SESSION['msg'])) // to check available or not
        {
          echo $_SESSION['msg'];// to print
          unset($_SESSION['msg']);// to delete from session
        }
       ?>
       </b></h6>
       <form action="saveuser.php" method="post" enctype="multipart/form-data">
         <h4 class="text-center my-3 border-bottom pb-3">Signup</h4>
         <div class="form-group">
          <label>Name:</label>
          <input type="text" class="form-control" name="name" required>
          </div>
         <div class="form-group">
          <label>Mobile No:</label>
          <input type="number" class="form-control" name="mob" required>
          </div>
          <div class="form-group">
          <label>Password:</label>
          <input type="password" class="form-control" name="pass" required>
          </div>
          <div class="form-group">
          <label>Select Profile:</label>
          <input type="file" class="form-control" name="imag" required>
          </div>
          <div class="form-group text-center py-2">
            <button class="btn btn-info w-100" type="submit">Submit</button>
          </div>
          <div class="form-group text-center">
            <a class="text-danger" href="#" onclick="divVisibility('Div1')"><b>Already have An Account? Login</b></a>
          </div>
        </form>
    </div>
  </div>

<?php include("footer.php"); ?>