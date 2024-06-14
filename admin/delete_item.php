<?php
session_start();
include "../connect.php";
include "../common_function.php";

$company_name = $_POST['company_name'];
$category_id = $_POST['category_id'];
$contact_person = $_POST['contact_person'];
$phone = $_POST['phone'];
$landline = $_POST['landline'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$id = $_GET['id'];

$sql = "UPDATE `master_data` SET `is_del` = 'deleted' WHERE `unique_id` = '$id' ";

if(mysqli_query($conn, $sql)== TRUE){
    echo "<script>";
    echo "if (confirm('Are you sure you want to delete this user?')) {";
    echo "    alert('Deleted Successfully...!');";
    echo "    window.location='view_all_items.php';";
    echo "}";
    echo "</script>";
}else {
    // If there was an error during execution
    echo "Error executing query: " . htmlspecialchars(mysqli_error($conn), ENT_QUOTES, 'UTF-8');
}
mysqli_close($conn);
?>