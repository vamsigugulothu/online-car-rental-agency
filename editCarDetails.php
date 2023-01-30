<?php 
    session_start();
    include 'navbar.php';
    include 'db_connect.php';

?>

<html>
  <head>
    <title>Edit Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
            <p class="h4">Edit Car Details:</p>
            <div class="d-flex">
              <a href="agencyDashboard.php" class="btn btn-primary mr-2">View Added Cars</a>
              <a href="bookedCars.php" class="btn btn-primary">View Booked Cars</a>
            </div>
          </div>
      </div>

    <div class="container mt-4 pb-4" style="height:auto; background-color: #f7fcfc">
      <div class="d-flex justify-content-center mb-4">
        <div class="border bg-light" style="background-color:#fff; width: 400px; height: 500px; margin-top: 40px;">
          <div class="p-4">
            <h4 class="text-center mb-4 mt-2">Add New Car</h4>
            <form method="post" action="updateCarDetails.php?v_id='.$fetch['car_id'].'">
              <!---->
                <div class="form-group">
                  <label for="inputEmail4">Vehicle Model</label>
                  <input type="text" class="form-control" name="vmodel" value="'.$fetch['car_model'].'" placeholder="Enter vehicle model" required>
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Vehicle Number</label>
                  <input type="text" class="form-control" name="vnumber" value="'. $fetch['car_number'].'" placeholder="Enter vehicle model" required>
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Vehicle Capacity</label>
                  <input type="text" class="form-control" name="vcapacity" value="'. $fetch['capacity'].'" placeholder="Enter vehicle model" required>
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Rent Per/day</label>
                  <input type="number" class="form-control" name="rent" value="'.$fetch['rent'].'" placeholder="Enter vehicle model" required>
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%">Update</button>
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