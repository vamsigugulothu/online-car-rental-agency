<?php 
    session_start();
    include 'navbar.php';
    if(!isset($_SESSION['agency_email'])){
      header('location:agencyLogin.php');
      die();
  }
?>

<html>
  <head>
    <title>Add Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type='text/javascript' src='scripts/addCarValidate.js'></script>
  </head>
  <body>
      <div class="container">
          <div class="d-flex flex-wrap justify-content-between mt-5">
            <p class="h4">Add New Car Details:</p>
            <div class="d-flex">
              <a href="agencyDashboard.php" class="btn btn-primary mr-2">View Added Cars</a>
              <a href="bookedCars.php" class="btn btn-primary">View Booked Cars</a>
            </div>
          </div>
    </div>
    <div class="container mt-3 pb-3" style="height:auto; background-color: #f7fcfc">
      <div class="d-flex justify-content-center mb-4">
        <div class="border bg-light" style="background-color:#fff; width: 400px; height: 500px; margin-top: 40px;">
          <div class="p-4">
            <h4 class="text-center mb-4 mt-2">Add New Car</h4>
            <small class="text-danger mt-1" id='warn'></small>
            <form method="post" action="addCarBackend.php" name="form" onsubmit="return validate()" autocomplete="off">
              <!---->
                <div class="form-group">
                  <label for="inputEmail4">Vehicle Model</label>
                  <input type="text" class="form-control" name="vmodel" placeholder="Enter vehicle model">
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Vehicle Number</label>
                  <input type="text" class="form-control" name="vnumber" placeholder="Enter vehicle model">
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Vehicle Capacity</label>
                  <input type="text" class="form-control" name="vcapacity" placeholder="Enter vehicle model">
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Rent Per/day</label>
                  <input type="number" class="form-control" name="rent" placeholder="Enter vehicle model">
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>