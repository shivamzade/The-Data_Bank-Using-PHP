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
              <div class="card-header text-uppercase">
                Enter the Details
              </div>
              <div class="card-body">
                <form action="insert_category.php" method="post" id="registration_form" class="form-horizontal" enctype="multipart/form-data">
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="">Category Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="category_name" name="category_name" class="form-control" placeholder="Name of the category">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="category_id"> Category Id</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="category_id" name="unique_id" class="form-control" placeholder="Business Category Id">
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

