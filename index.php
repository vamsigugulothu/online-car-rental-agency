<?php 
    session_start();
    include 'navbar.php';
    include 'db_connect.php';

?>

<html>
  <head>
    <title>Car Rental Agency</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css"/>
  </head>
  <body>
    <h3 class="my-3 text-center" >Welcome to The Car Rental Agency <span class="">Here are the Available Cars for Rent</span></h3>
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between mt-5">
        <p class="h4">All Avaialable Cars:</p>
        <div class="d-flex">
          <?php  if(isset($_SESSION['custo_mail'])){echo'<a href="myBookings.php" class="btn btn-primary mr-2">My Bookings</a>'; }?>
          <?php  if(isset($_SESSION['agency_username'])){echo'<a href="bookedCars.php" class="btn btn-primary">View Added Cars</a>'; }?>
        </div>
      </div>
    </div>
    <div class="container mt-4 mb-5 py-4" style="margin-top:70px; background-color: #f7fcfc">
      <div class="row">

        <?php

            $query=mysqli_query($db,"select * from added_cars where availability='yes'");
            if($query){
              $total_rows = mysqli_num_rows($query);
              if($total_rows==0){
                echo '<p class="h4 mx-auto"> No Cars Avaialable</p>';
              }
              else{
                while($fetch=mysqli_fetch_assoc($query)){
                  
            //     }
            //   }
            // }
        ?>
            <div class="card mx-auto my-3" style="width:300px; background-color: lightblue;">
              <div class="card-body text-center">
                <span class="card-text">Vehicle Model</span>
                <h3 class="card-title"><?php echo $fetch['car_model']?></h4>
                <div class="d-flex align-items-center justify-content-center">
                  <h3><?php echo $fetch['rent']?></h3><small class="card-text mr-2">/- per day</small>
                </div>
                <div class="mt-4">
                  <div class="d-flex justify-content-between">
                    <p class="card-text">Car Number:</p> 
                    <p class="card-text"><?php echo $fetch['car_number']?></p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="card-text">Capacity:</p> 
                    <p class="card-text"><?php echo $fetch['capacity']?></p>
                  </div>
                </div>
                <div class="my-2">
                  <a href="confirmBooking.php?v_id='<?php echo $fetch['car_id']?>'" class="btn btn-primary" style="width:100%">Rent</a>
                </div>
              </div>
            </div>

          <?php } } } ?>
      </div>
    </div>
  </body>
</html>