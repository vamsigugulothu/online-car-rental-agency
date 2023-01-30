<?php 
    session_start();
    include 'db_connect.php';
    include 'navbar.php';
    if(!isset($_SESSION['agency_email'])){
      header('location:agencyLogin.php');
      die();
  }
?>

<html>
  <head>
    <title>Agency Dashboard</title>
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
    <div class="container">
      <p class="my-4 h5 text-center" >Welcome to The Car Rental Agency!!</p>

      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5">
        <p class="h4">Your All Cars:</p>
        <div class="d-flex">
          <a href="addCar.php" class="btn btn-primary mr-2">Add Car</a>
          <a href="bookedCars.php" class="btn btn-primary">Booked Cars</a>
        </div>
      </div>
          <?php 
            if(isset($_SESSION['error'])){
              echo "
              <div class='row mt-3'>
                <div class='col d-flex justify-content-center'>
                  <div class='rounded bg-success'>
                    <p class='my-1 px-2'>".$_SESSION['error']."</p>
                  </div>
                </div>
              </div>";
                unset($_SESSION['error']);
            }
            elseif(isset($_SESSION['msg'])){
                echo "
                <div class='row mt-3'>
                  <div class='col d-flex justify-content-center'>
                    <div class='rounded bg-success'>
                      <p class='my-1 px-2'>".$_SESSION['msg']."</p>
                    </div>
                  </div>
                </div>";
                unset($_SESSION['msg']);
            }
            ?>
    </div>
    <div class="container mt-4 py-4" style="margin-top:70px; background-color: #f7fcfc">
      <div class="row">

        <?php
            $user = $_SESSION['agency_email'];
            $query=mysqli_query($db,"select * from added_cars where added_agency='$user'");
            if($query){
              $total_rows = mysqli_num_rows($query);
              if($total_rows==0){
                echo ' <p class="h4 mx-auto"> Please add cars..</p>';
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
                  <a href="editCarDetails.php?v_id='<?php echo $fetch['car_id']?>'" class="btn btn-primary" style="width:100%">Edit</a>
                </div>
              </div>
            </div>
            <!-- <div class="p-5"></div>   -->
          <?php } } } ?>
      </div>
    </div>
  </body>
</html>