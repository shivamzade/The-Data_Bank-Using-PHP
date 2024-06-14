<?php
session_start();
include "connect.php";

// Check if a session exists
if (isset($_SESSION)) {
  // Unset all session variables
  session_unset();

  // Destroy the session
  session_destroy();

  // Redirect to login page (or any desired page after logout)
  echo "<script>alert('logged out.');</script>";
  header("Location: ../index.php"); // Replace with your desired location
  exit();
} else {
  // User is already logged out
  echo "<script>alert('You are already logged out.'); window.location.href='../index.php';</script>";
}
?>