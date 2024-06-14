<head>
  <?php
  include "common_function.php";
  include "../connect.php";
  meta();
  css();
  ?>
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
						<div class="card-header">
							<i class="fa fa-table"></i> View All Users
							<a class="btn btn-primary" href="add_user.php" role="button">Add New User</a>
						</div>
						<div class="card-body">
							<table id="example" class="table table-bordered">
								<thead class ="">
									<tr>
										<th>Sr. No.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Organization</th>
										<th>City</th>
										<th>Mail Verified Status</th>
										<th>Admin Status</th>
										<th>Reg Date</th>
										<th>Exp Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$count = 1;
									$result = mysqli_query($conn, "select * from users where is_del='approved'");
									while ($r = $result->fetch_object()) {
										$unique_id = $r->unique_id;
									?>
										<tr class="gradeX">
											<td class="center"><?php echo $count; ?></td>
											<td class="center"><?php echo $r->name; ?></td>
											<td class="center"><?php echo $r->email; ?></td>
											<td class="center"><?php echo $r->phone; ?></td>
											<td class="center"><?php echo $r->name_of_org; ?></td>
											<td class="center"><?php echo $r->city; ?></td>
											<td class="center"><?php echo $r->mail_verified_status; ?></td>
											<td class="center"><?php echo $r->admin_status; ?></td>
											<td class="center"><?php echo $r->reg_date; ?></td>
											<td class="center"><?php echo $r->expire_date; ?></td>
											<td>
												<div class="btn-group">
													<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Action
													</button>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="verify_user.php?uid=<?php echo $unique_id; ?>">Mail Verification</a></li>
														<li><a class="dropdown-item" href="admin_status.php?uid=<?php echo $unique_id; ?>">Admin Verification</a></li>
														<li><a class="dropdown-item" href="edit_user.php?uid=<?php echo $unique_id; ?>">Edit</a></li>
														<li><a class="dropdown-item" href="delete_user.php?uid=<?php echo $unique_id; ?>">Delete</a></li>
													</ul>
												</div>
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
		</div>
	</div>
</div>

<?php 
footer();
js();
?>

</body>
</html>
