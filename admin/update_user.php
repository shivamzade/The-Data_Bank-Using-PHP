<?php
session_start();
include "../connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$unique_id1 = $_POST['user_id'];

$insert = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password',`phone`='$phone',`city`='$city' WHERE `unique_id` = '$unique_id1' and `is_del`= 'approved'";

if(mysqli_query($conn, $insert) == TRUE){		
    echo '<script>';
    echo'alert("Updated Successfully...!!");';
    echo'window.location="view_users.php";';
    echo'</script>';
}

?>