<?php 
session_start();
 include "common_function.php";
 include "../connect.php";
if(isset($_SESSION['user_unique_id'])){
     $user_id=$_SESSION['user_unique_id'];
}else{
  ?>
  <script>
    alert("Session is Not Present");
    window.location="../index.php";
    </script>

  <?php
}
?>

<html>
<head>
  <?php
 
  meta();
  css();
  ?>
</head>
<body >
 <div id="wrapper">
<?php
sidebar();
navbar();
?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <!--Start Dashboard Content-->
      <div class="row ">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header text-uppercase text-center"> All Categories </div>
              <br>

              <div class="row">
              <?php
									$result = mysqli_query($conn, "select * from master_category where is_del='approved'");
									while ($r = $result->fetch_object()) {
										$unique_id = $r->unique_id;
									?>
              <div class="col-12 col-md-6 col-lg-6 col-xl-2">
                <div class="card text-center gradient-scooter m-2">
                  <div class="card-body">
                  
                  <a href="view_specific_category.php?cid=<?php echo $unique_id;?>"><h6 class="text-white"><?php echo $r->category_name ?></h6></a>
                </div>
                </div>
              </div>
              <?php
									}
									?>
                </div><!--End row-->
            </div>
          </div>
        </div>
		</div>
    </div>
    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	<?php
  footer();
  ?>
  </div>
  <?php
  js();
  ?>
</body>
</html>

