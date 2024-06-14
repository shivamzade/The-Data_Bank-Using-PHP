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
$unique_id1 = $_POST['item_id'];
//echo "unique id=". $unique_id1;

$insert = "UPDATE `master_data` SET `contact_person`='$contact_person',`company_name`='$company_name',`category_id`='$category_id',`phone`='$phone',`landline`='$landline',`email`='$email',`address`='$address',`city`='$city',`state`='$state' WHERE `unique_id` = '$unique_id1' and `is_del`= 'approved'";
//echo $insert;
if(mysqli_query($conn, $insert) == TRUE){		
    echo '<script>';
    echo'alert("Updated Successfully...!");';
    echo'window.location="view_all_items.php";';
    echo'</script>';
}
mysqli_close($conn);
?>