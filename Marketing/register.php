<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RTEA MARKETING</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../Distribution/Distribution/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../Distribution/Distribution/css/style.css "> <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller" >
      <div class="container-fluid page-body-wrapper full-page-wrapper"  >
        <div class="content-wrapper d-flex align-items-center auth" style="background-image: url(../Distribution/Distribution/images/bg2.jpg);">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../Marketing/images/icon-256x256.png">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" action="../Marketing/Marketing/RegisterInvent.php" method="POST" >
                  <div class="form-group">
                    <input type="number" placeholder="Phone Number" id="phoneNumber" name="phoneNumber" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Company Name" id="companyName" name="companyName" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="text" placeholder="Company Address" id="companyAddress" name="companyAddress" class="form-control">
                  </div>
                  <div class="form-group">
                    <select name="location" id="location" class="form-control">
                       <?php
                       include('../BackEnd/php/connection.php');
                       $query = mysqli_query ($con, "SELECT * FROM `location`");
                       while($row = mysqli_fetch_array($query))
                       {
                         echo "<option>".$row['Name']."</option>";
                       }
                       ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Password" id="password" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="password" placeholder="Confirm Password" id="confirmpassWord" name="confirmpassword" class="form-control">
                  </div>
                  <!-- <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div> -->
                  <div class="mt-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit">SIGN UP</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="index.html" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../Distribution/Distribution/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../Distribution/Distribution/js/off-canvas.js"></script>
    <script src="../Distribution/Distribution/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>