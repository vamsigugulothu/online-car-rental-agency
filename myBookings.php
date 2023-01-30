<?php 
    session_start();
    include 'db_connect.php';
    include 'navbar.php';
    if(!isset($_SESSION['custo_mail'])){
      header('location:index.php');
      die();
    }
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
    <h3 class="my-3 text-center" >My all Bookings</h3>
          <?php 
              if(isset($_SESSION['msg'])){
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
    <div class="container mt-4" style="margin-top:70px; background-color: #f7fcfc">
     <div class="table-responsive">  
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Vehicle Model</th>
            <th scope="col">Vehicle Number</th>
            <th scope="col">Capacity</th>
            <th scope="col">Rent Per/day</th>
          </tr>
        </thead>
        <tbody>

        <?php
          $user=$_SESSION['custo_mail'];
          $sno=1;
          $query=mysqli_query($db,"select car_model, car_number, capacity, rent from added_cars,booked_cars
          where added_cars.car_id= booked_cars.car_id 
          and booked_cars.booked_customer='$user'");
          if($query){
              if(mysqli_num_rows($query)==0){
                  echo '</table><tr><center><h4 class="font">No Cars Are Booked</h4></center></tr>';
              }
              else{
                  while($fetch=mysqli_fetch_assoc($query)){
                    echo'
          
                      <tr>
                          <td>'.$sno++.'</td>
                          <td>'.$fetch['car_model'].'</td>
                          <td>'.$fetch['car_number'].'</td>
                          <td>'.$fetch['capacity'].'</td>
                          <td>'.$fetch['rent'].'</td>
                      </tr>';
                  }
              }
          }
        ?>  

        </tbody>
      </table>
      </div>
    </div>
  </body>
</html>