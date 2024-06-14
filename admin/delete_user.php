<?php
include "../connect.php";

// Retrieve POST data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$name_of_org = $_POST['name_of_org'];
$city = $_POST['city'];
$mail_verified_status = $_POST['mail_verified_status'];
$reg_date = $_POST['reg_date'];
$expire_date = $_POST['expire_date'];

// Retrieve GET data
$uid = $_GET['uid'];

// Prepare the SQL statement with placeholders
$sql = "UPDATE `users` SET `is_del` = 'deleted' WHERE `unique_id` = ?";

// Initialize a statement
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind the parameter to the statement
    mysqli_stmt_bind_param($stmt, "s", $uid);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // If the update was successful
        echo "<script>";
        echo "if (confirm('Are you sure you want to delete this user?')) {";
        echo "    alert('Deleted Successfully...!');";
        echo "    window.location='view_users.php?id=" . htmlspecialchars($uid, ENT_QUOTES, 'UTF-8') . "';";
        echo "} else {";
        echo "    window.location='view_users.php';"; // Redirect to another page or stay on the same page
        echo "}";
        echo "</script>";
    } else {
        // If there was an error during execution
        echo "Error executing query: " . htmlspecialchars(mysqli_error($conn), ENT_QUOTES, 'UTF-8');
    }
    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    // If there was an error preparing the statement
    echo "Error preparing query: " . htmlspecialchars(mysqli_error($conn), ENT_QUOTES, 'UTF-8');
}

// Close the database connection
mysqli_close($conn);
?>
