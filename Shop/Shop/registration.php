<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RTEA</title>
  <!-- Title icon -->
  <link rel = "icon" href = "../../Logos/title.png" 
        type = "image/x-icon"> 
    <!-- Google Font -->
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth register-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <h2>Register</h2>
              <h4 class="font-weight-light">Hello! let's get started</h4>
              <form class="pt-4" action='Register.php' Method='POST'>
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Shopname</label>
                    <input type="text" class="form-control" name="Shopname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Shopname">
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="Password" id="exampleInputPassword1" placeholder="Password">
                    <i class="mdi mdi-eye"></i>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">PhoneNumber</label>
                    <input type="text" class="form-control" name="PhoneNumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="PhoneNumber">
                    <i class="mdi mdi-account"></i>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" class="form-control" name="Location" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Location">
                     
                  </div>
                  <div class="mt-5">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium" >Register</button>
                  </div>
                  <div class="mt-2 w-75 mx-auto">
                    <div class="form-check form-check-flat">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        I accept terms and conditions
                      </label>
                    </div>
                  </div>
                  <div class="mt-2 text-center">
                    <a href="../index.html" class="auth-link text-black">Already have an account? <span class="font-weight-medium">Sign in</span></a>
                  </div>
                </form>                  
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
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
