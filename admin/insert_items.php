<?php
session_start();
include "../connect.php";
include "common_function.php";

$company_name = $_POST['company_name'];
$category_id = $_POST['category_id'];
$contact_person = $_POST['contact_person'];
$phone = $_POST['phone'];
$landline = $_POST['landline'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$unique_id = rand().date("Ymdhis");
$entry_date = date("Y-m-d");

$insert = "INSERT INTO `master_data`(`id`, `unique_id`, `contact_person`, `company_name`, `category_id`, `phone`, `landline`, `email`, `address`, `city`, `state`, `entry_date`, `is_del`) VALUES ('','$unique_id','$contact_person','$company_name','$category_id','$phone','$landline','$email','$address','$city','$state','$entry_date', 'approved')";

if(mysqli_query($conn, $insert) == TRUE){		
    echo '<script>';
    echo'alert("Added Successfully...!");';
    echo'window.location="view_all_items.php";';
    echo'</script>';
}
?>