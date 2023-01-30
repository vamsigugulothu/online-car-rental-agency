<?php 
    session_start();
    include 'db_connect.php';
    if(!isset($_SESSION['custo_mail'])){
      header('location:customerLogin.php');
      die();
    }
    include 'navbar.php';
?>

<html>
  <head>
    <title>Confirm Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type='text/javascript' src='scripts/addCarValidate.js'></script>
  </head>
  <body>

      <?php
        $v_id=$_GET['v_id'];
        $query = mysqli_query($db,"select * from added_cars where car_id = $v_id");
        if($query){
          $fetch=mysqli_fetch_assoc($query);
          echo'

        <div class="container">
          <div class="d-flex flex-wrap justify-content-between mt-5">
            <p class="h4">Enter the following details to book car:</p>
            <div class="d-flex">
              <a href="myBookings.php" class="btn btn-primary">My Bookings</a>
            </div>
          </div>
        </div>

      <div class="container mt-3 pb-3" style="height:auto; background-color: #f7fcfc">
        <div class="d-flex justify-content-center mb-4">
          <div class="border bg-light" style="background-color:#fff; width: 400px; height: 400px; margin-top: 40px;">
            <div class="p-4">
                <h4 class="text-center mb-4 mt-2">Book Now</h4>
                <div class="d-flex align-items-center justify-content-center">
                  <h3>'.$fetch['rent'].'</h3><small class="card-text mr-2">/- per day</small>
                </div>
                <small class="text-danger mt-1" id="warn"></small>
                <div class="mt-4">
                  <div class="d-flex justify-content-between">
                    <p class="card-text">Car Model:</p> 
                    <p class="card-text">'.$fetch['car_model'].'</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="card-text">Car Number:</p> 
                    <p class="card-text">'.$fetch['car_number'].'</p>
                  </div>
                </div>
              <form method="post" method="post" action="confirmBackend.php?v_id='.$v_id.'" name="conForm" onsubmit="return valid();">
                <!---->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">No of Days</label>
                    <input type="number" class="form-control" name="noofdays" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Start Date</label>
                    <input type="date" class="form-control" name="date" id="inputPassword4">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%">Confirm Booking</button>
              </form>
            </div>
          </div>
        </div>
      </div>';

  }
  else{
      $_SESSION['error']='Something Went Wrong, Try Again';
      header('location:agencyPortal.php');
  }
  
  ?>
    

  </body>
</html>