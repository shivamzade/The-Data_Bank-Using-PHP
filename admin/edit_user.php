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
    <?php
    sidebar();
    navbar();
    ?>
    <div class="clearfix"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header text-uppercase text-center">Edit User</div>
                <div class="card-body">
                <?php
									$unique_id = $_GET['uid'];
									$result = mysqli_query($conn, "select * from users where unique_id = '$unique_id' and  is_del='approved'");
									while ($r = $result->fetch_object()) {
                                        $user_id = $r -> unique_id;
									?> 
                    <form action="update_user.php" method="post" id="registration_form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                    <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      
                      <label for="name">Full Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="name" name="name" value="<?php echo $r->name; ?>" class="form-control" placeholder="Name of the user">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="email">Email</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="email" id="email" name="email"value="<?php echo $r->email; ?>" class="form-control" placeholder="Enter the Email Id">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="password">Password</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="password" id="password" name="password"value="<?php echo $r->password; ?>" class="form-control" placeholder="Enter Password">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="phone">Phone</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="phone" name="phone" value="<?php echo $r->phone; ?>"  class="form-control" placeholder="Enter the Mobile number">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="org">Name of Organization</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="org" name="org" value="<?php echo $r->name_of_org; ?>" class="form-control" placeholder="Name of Organization">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="city">Location</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="city" name="city" value="<?php echo $r->city; ?>" class="form-control" placeholder="Enter the city of the Organization">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row clearfix">
                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                      <button type="submit" name="save" class="btn btn-primary m-t-15 waves-effect">Submit</button>
                      <button type="reset" class="btn btn-primary m-t-15 waves-effect">Reset</button>
                    </div>
                  </div>
                </form><?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    footer();
    ?>
  </div>
  <?php
  js();
  ?>
</body>

