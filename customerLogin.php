<?php
  session_start();
  if(isset($_SESSION['custo_mail'])){
      header('location:index.php');
      die();
  }
?>

<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <script type='text/javascript' src='scripts/loginValidate.js'></script>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand text-info" href="index.php">
        Car Rental Agency
      </a>
    </nav>

    <div class="d-flex flex-wrap justify-content-around align-items-center">
      <div class="p-4">
        <p class="h1">Car Rental Agency</p>
        <span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-We help you to get your dream cars for Rent </span> 
        <p class="mt-3">
            Car Rental Agents provide support to people who need to rent</br> a vehicle for a short period of time.
            This system enables the </br>company to make their services available to the public </br>through the internet and also keep records about their services
        </p>
      </div>
      <!-- Login -->
      <div class="border login_grid" style="background-color:#fff; width: 400px; height: 470px; margin-top: 100px">
        <div class="p-4">
          <h4 class="text-center mb-4 mt-2">Customer Login</h4>
            <?php 
                if(isset($_SESSION['warning'])){
                  echo '<small class="text-danger mt-1" id="warn">'.$_SESSION['warning'].'</small>';
                  unset($_SESSION['warning']);   
                }
                if(isset($_SESSION['success'])){
                  echo'<small class="text-success mt-1" id="warn">'.$_SESSION['success'].'</small>';
                  unset($_SESSION['success']);   
                }
            ?>
            <small class="text-danger mt-1" id='warn'></small>
          <form method="post" action="customerBackend.php" onsubmit="!validate() ? event.preventDefault():''" name="form" autocomplete="off">
            <!-- email -->
              <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Enter your email">
              </div>
              <!-- password -->
              <div class="form-group">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Enter ypur password">
              </div>
              <a href="forgetPassword.php">Forget Password?</a>
              <button type="submit" class="btn btn-primary mt-3" id="submit" style="width:100%">Sign in</button>
          </form>
          <p class="text-center">Not a user? <a href="register.php">Register</a>
          <p class="text-center">Are you a agency? <a href="agencyLogin.php">Login Here</a>
        </div>
      </div>
    </div>
  
  </body>
</html>


