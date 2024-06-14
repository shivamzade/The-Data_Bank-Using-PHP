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
              <?php
                $unique_id = $_GET['unique_id'];
                $result = mysqli_query($conn, "SELECT * FROM `master_data` WHERE `unique_id`='$unique_id' AND `is_del`='approved'");
                while($r = $result->fetch_object()) {
                  $item_id = $r->unique_id;
              ?>
                <form action="update_data.php" method="post" id="registration_form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="item_id" value="<?php echo $item_id ?>">
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="company_name">Company Name</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="company_name" name="company_name" value="<?php echo htmlspecialchars($r->company_name); ?>" class="form-control" placeholder="Name of the company">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="category_id">Category Id</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <select name="category_id" id="category_id" class="form-control">
                            <?php
                            $result1 = mysqli_query($conn, "SELECT * FROM `master_category` WHERE `is_del`='approved'");
                            while($r1 = $result1->fetch_object()) {
                              $category_name = htmlspecialchars($r1->category_name);
                              $category_id = htmlspecialchars($r1->unique_id);
                              $selected = ($r->category_id == $category_id) ? 'selected' : '';
                              echo "<option value=\"{$category_name} - {$category_id}\" $selected>{$category_name} - {$category_id}</option>";
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="contact_person">Contact Person</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="contact_person" name="contact_person" value="<?php echo htmlspecialchars($r->contact_person); ?>" class="form-control" placeholder="Name of the Contact Person">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="phone">Mobile Number</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($r->phone); ?>" class="form-control" placeholder="Contact Number">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="landline">Landline Number</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="landline" name="landline" value="<?php echo htmlspecialchars($r->landline); ?>" class="form-control" placeholder="Landline Number">
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
                          <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($r->email); ?>" class="form-control" placeholder="Enter the Email Id">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="address">Address</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($r->address); ?>" class="form-control" placeholder="Address of the company">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="city">City</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($r->city); ?>" class="form-control" placeholder="Enter the city of the Organization">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="state">State</label>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                        <div class="form-line">
                          <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($r->state); ?>" class="form-control" placeholder="State">
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
              <?php
                }
              ?>
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
