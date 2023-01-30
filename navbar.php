

<?php
  $agent = "index.php";
  if(isset($_SESSION['agency_email'])){
    $agent = "agencyDashboard.php";
  }

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand text-info" href="<?php echo $agent;?>">Car Rental Agency</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active mr-4">
        <a class="nav-link text-info" href="<?php echo $agent;?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-info my-2 my-sm-0 mr-2" type="submit">Search</button>
    </form>
    </ul>
    
    <?php 
      if(isset($_SESSION['custo_mail'])){
        echo '<div class="row mx-2 align-items-center">
                <span class="text-info mr-3">'.$_SESSION['custo_mail'].'</span>
                <a href="logout.php" class="btn btn-primary">Logout <i class="fas fa-chevron-circle-right" style="color:white"></i></a>
              </div>';
              
      }
      elseif(isset($_SESSION['agency_email'])){
        echo '<div class="row mx-2 align-items-center">
                <span class="text-info mr-3">'.$_SESSION['agency_email'].'</span>
                <a href="logout.php" class="btn btn-primary">Logout <i class="fas fa-chevron-circle-right" style="color:white"></i></a>
              </div>';
      }
      else{
        echo '<a href="customerLogin.php" class="btn btn-primary">Login</a>';
      }
    ?>
  </div>
</nav>