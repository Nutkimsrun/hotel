<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form action="../action/login.php" method="post">
                  <?php 
                    if (isset($_GET['error'])) {
                      ?>
                        <p class="error" style="color: red;">
                            <?php 
                              echo $_GET['error'];
                            ?>
                        </p>
                      <?php
                    }
                  ?>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="uname" name="uname">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="upass" name="upass">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a>
                  </div>
                  <!-- <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a> -->
                  <!-- <a href="#" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit" id="login">Sign In</a> -->
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
  $(document).ready(function() {
    // login  
    // $('#login').on('click', function() {
    //   var eThis = $(this);
    //   var Parent = eThis.parents('.frm_log');
    //   var user_name = Parent.find('#uname');
    //   var user_pass = Parent.find('#upass');
    //   console.log(user_name.val(),user_pass.val());
    //   var frm = eThis.closest('form.frm_log');
    //   var frm_data = new FormData(frm[0]);
    //   $.ajax({
    //     url: '../action/login.php',
    //     type: 'POST',
    //     data: frm_data,
    //     contentType: false,
    //     cache: false,
    //     processData: false,
    //     dataType: "json",
    //     beforeSend: function() {
    //       //work before success    
    //     },
    //     success: function(data) {
    //       //work after success        
    //     }
    //   });
    // });

  });
</script>

</html>