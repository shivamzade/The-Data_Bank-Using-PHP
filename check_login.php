<?php
session_start();
include "connect.php";
?>
<?php
$username = $_POST['username'];
$password = $_POST['pass'];
$datee=date("Y-m-d");
//echo "SELECT * FROM customer_registration WHERE email='$username' AND password='$password' and is_del='approved' and mail_verified_status='approved'";
$result1 =mysqli_query($conn, "SELECT * FROM users WHERE email='$username' AND password='$password' and is_del='approved' and mail_verified_status='approved'and admin_status='approved'");

	while($rows11 = $result1->fetch_object())
		{
		  $expire_date111 = $rows11->expire_date;
	//	echo "SELECT * FROM customer_registration WHERE email='$username' AND password='$password' and is_del='approved' and mail_verified_status='approved' and '$expire_date111'>='$datee'";
if($result = mysqli_query($conn, "SELECT * FROM users WHERE email='$username' AND password='$password' and is_del='approved' "))
{
	if($result->num_rows > 0)
	{
		while($rows = $result->fetch_object())
		{
		    $unique_id = $rows->unique_id;
			$name = $rows-> name;
			
			$_SESSION['name']= $name;
			$_SESSION['user_unique_id']= $unique_id;
			?>
			<SCRIPT LANGUAGE='JavaScript'>	
				window.location.href="users/index.php";
				</SCRIPT>	
			<?php 	
		}
	}
	else
	{?>
	     <SCRIPT LANGUAGE='JavaScript'>	
				alert("Date Expired .Please Contact Company.Whatsapp No:91-9699739590");
				window.location.href="index.php";
				</SCRIPT>	
	   <?php  
	}
}
else
{?>

      <SCRIPT LANGUAGE='JavaScript'>	
				alert("Wrong Password");
				window.location.href="index.php";
				</SCRIPT>	
<?php 
}
}
mysqli_close($conn);
?>		
<SCRIPT LANGUAGE='JavaScript'>	
				alert(" Password expired ");
				window.location.href="index.php";
				</SCRIPT>				
