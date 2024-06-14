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
              <div class="card-header text-uppercase text-center"> Add New User </div>
              <div class="card-body">
                <form action="insert_users.php" method="post" id="registration_form" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="name">Full Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="name" name="name" class="form-control" placeholder="Name of the user">
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
                          <input type="email" id="email" name="email" class="form-control" placeholder="Enter the Email Id">
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
                          <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
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
                          <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter the Mobile number">
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
                          <input type="text" id="org" name="org" class="form-control" placeholder="Name of Organization">
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
                          <input type="text" id="city" name="city" class="form-control" placeholder="Enter the city of the Organization">
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
                </form>
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

