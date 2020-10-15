<?php
include 'dbconnection.php';
if (isset($_GET['activation_id'])) {
    $activation_id = mysqli_real_escape_string($dbconnect, $_GET['activation_id']);
    $updatequery = " UPDATE loginuser SET activation_status=true WHERE trim(activation_id)='$activation_id' ";
    $query = mysqli_query($dbconnect, $updatequery);
    echo $query;
    if ($query) {
        if (isset($_SESSION['msg'])) {
            $_SESSION['msg'] = "Email verified successfully.";
            header('location:login.php');
        } else {
            $_SESSION['msg'] = "You are logged out.";
            header('location:login.php');
        }
    } else {
        $_SESSION['msg'] = "Account not updated, Try again";
        header('location:register.php');
    }
}