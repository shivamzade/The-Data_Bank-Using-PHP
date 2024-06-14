<?php include "common_function.php";
include "../connect.php"; ?>
<head>
meta();?>
	<?php css(); ?>
</head>
<body>
<div id="wrapper">
	 <?php sidebar(); ?>

	<?php navbar();?>

   <div class="clearfix"></div>
   <div class="content-wrapper">
    <div class="container-fluid">
 <div class="row">
        <div class="col-lg-14">
          <div class="card">
                            <div class="card-header"><i class="fa fa-table"></i>
                                   <span>View Items </span>
                            </div>
                        <div class="card-body">
            <table id="example" class="table table-bordered">
                                <thead>
                                    <tr>
                                            <th>Sr. No.</th>
                                            <th>Company Name</th>
                                            <th>Contact Person</th>
                                            <th>Category Id</th>
                                            <th>Phone</th>
                                            <th>Landline</th>
                                            <th>Email</th>
                                            <th>Address</th>  
                                            <th>City</th>
                                            <th>State</th>
                                        </tr>
                                </thead>
                                <tbody>
                                   <?php 
               $count=1;
               $c_id = $_GET['cid'];
               $res = mysqli_query($conn,"select * from `master_data` where `category_id` = '$c_id' and is_del='approved'");
                        while($r=$res->fetch_object())
                        {
                        $unique_id = $r->unique_id;
                 ?>
                                        <tr>

                            <td class="center">
                                <?php echo $count; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->company_name; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->contact_person; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->category_id; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->phone; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->landline; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->email;?>
                            </td>
                            <td class="center">
                                <?php echo $r->address; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->city; ?>
                            </td>
                            <td class="center">
                                <?php echo $r->state; ?>
                            </td>
                                        </tr>
                                        <?php
													$count++;
												}
												?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
 <?php 
 footer();
 js();
 ?>
    <!-- Jquery Core Js -->
</body>
</html>