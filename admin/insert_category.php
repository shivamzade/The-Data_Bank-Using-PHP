<?php
include "common_function.php";
include "../connect.php";

$category_name = $_POST['category_name'];
$category_id= $_POST['unique_id'];

$insert = "INSERT INTO `master_category`( `unique_id`, `category_name`, `is_del`) VALUES ('$category_id','$category_name','approved')";
$result = mysqli_query($conn, $insert);

if(isset($result)){
    ?>
    <script>
        alert("Success..!");
        window.location = "view_all_categories.php";
    </script>
    
    
    <?php
}else?>
    <script>
        alert("Error!");
        window.location = "view_all_categories.php";
    </script>
?>