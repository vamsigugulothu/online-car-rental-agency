<?php 
    session_start();
    if(isset($_SESSION['custo_mail'])){
        unset($_SESSION['custo_mail']);
        header('location:customerLogin.php');
    }
    elseif(isset($_SESSION['agency_email'])){
        unset($_SESSION['agency_email']);
        header('location:agencyLogin.php');
    }
    else{
        header('location:customerLogin.php');
    }
?>