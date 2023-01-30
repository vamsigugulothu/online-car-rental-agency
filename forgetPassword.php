<?php 
session_start();
if(isset($_SESSION['custo_mail'])){
    header('location:index.php');
    die();
}
?>

<html>
  <head>
    <title>Forget Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <script type='text/javascript' src='scripts/forgetPassword.js'></script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand text-info" href="index.php">
        Car Rental Agency
      </a>
      <a href="customerLogin.php" class="btn btn-primary btn-sm">Login</a>
    </nav>

    <div class="d-flex justify-content-around align-items-center">
      <!-- Login -->
      <div class="border login_grid" style="background-color:#fff; width: 400px; height: 665px; margin-top: 80px">
        <div class="p-4">
          <h4 class="text-center mb-4 mt-2">Customer Forget Password</h4>
          <?php 
              if(isset($_SESSION['warning'])){
                 echo' <small class="text-danger mt-1">'.$_SESSION['warning'].'</small>';
                 unset($_SESSION['warning']);   
             }
          ?>
          <small class="text-danger my-1" id='warn'></small>
          <form name="form" method="post" onsubmit="return forgetPasswordValidate()" action="forgetPasswordBackend.php" autocomplete="off" >
            <!-- email -->
              <div class="form-group">
                <label for="inputEmail4">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your registered email">
              </div>
              <!-- security -->
              <div class="form-group">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Security Question you've choosen</label>
                <select class="custom-select mr-sm-2" name="secQuestion" id="inlineFormCustomSelect" required="true">
                  <option selected>Choose...</option>
                  <option value="Your Nickname">Your Nickname</option>
                  <option value="Your Pet name">Your Pet name</option>
                  <option value="Your Favourite place">Your Favourite place</option>
                </select>
              </div>
              <!-- answer -->
              <div class="form-group">
                <label for="yourAnswer">Your answer</label>
                <input type="text" class="form-control" name="securityvalue" id="yourAnswer" placeholder="Your Answer">
              </div>
              <!-- password -->
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Enter your password">
              </div>
              <!-- re password -->
              <div class="form-group">
                <label for="inputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="inputPassword1" placeholder="Re-Enter your password" >
              </div>
              <button type="submit" class="btn btn-primary" style="width:100%">Submit</button>
          </form>
          <p class="text-center">Want to Login? <a href="customerLogin.php">Login Here</a>
          <p class="text-center">New user? <a href="register.php">Register Here</a>
        </div>
      </div>
    </div>
  
  </body>
</html>


