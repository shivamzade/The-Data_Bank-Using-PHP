<?php
include "../connect.php";

// Retrieve POST data
$uid = $_GET['uid'];

// Prepare the SQL statement to get the current status
$sql = "SELECT `admin_status` FROM `users` WHERE `unique_id` = ? AND `is_del` = 'approved'";

// Initialize a statement
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters to the SQL query
mysqli_stmt_bind_param($stmt, "s", $uid);

// Execute the statement
mysqli_stmt_execute($stmt);

// Bind result variables
mysqli_stmt_bind_result($stmt, $current_status);

// Fetch value
mysqli_stmt_fetch($stmt);

// Determine the new status
$new_status = ($current_status === 'approved') ? 'pending' : 'approved';

// Close the statement
mysqli_stmt_close($stmt);

// Prepare the SQL statement to update the status
$sql = "UPDATE `users` SET `admin_status` = ? WHERE `unique_id` = ? AND `is_del` = 'approved'";

// Initialize a statement
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters to the SQL query
mysqli_stmt_bind_param($stmt, "ss", $new_status, $uid);

// Execute the statement
if(mysqli_stmt_execute($stmt)) {
    echo '<script>';
    echo'alert("Status Changed Successfully..!");';
    echo'window.location="view_users.php";';
    echo'</script>';
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// Close the statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($conn);
?>

