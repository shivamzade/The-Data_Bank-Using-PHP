<?php
session_start();
include "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$unique_id = rand().date("Ymdhis");
$reg_date = date("Y-m-d");
$expire_date = date("Ymd", strtotime("+1 year"));
$org = $_POST['org'];

$insert = "INSERT INTO `users` (`id`, `unique_id`, `name`,`name_of_org`, `email`, `password`, `phone`, `city`, `reg_date`, `expire_date`, `mail_verified_status`,`admin_status`,`is_del`) VALUES ('', '$unique_id', '$name','$org', '$email', '$password', '$phone', '$city', '$reg_date', DATE_ADD('$reg_date', INTERVAL 1 YEAR), 'pending', 'pending', 'approved')";

if(mysqli_query($conn, $insert) == TRUE){		
    echo '<script>';
    echo'alert("Registered Successfully...!!");';
    echo'window.location="index.php";';
    echo'</script>';
}

?>