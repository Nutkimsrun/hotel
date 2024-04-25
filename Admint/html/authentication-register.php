<?php 
  include "../action/connection.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/index.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dark-logo.svg" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form class="frm_sign">
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="up_name" name="up_name" aria-describedby="textHelp">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="up_pass" name="up_pass">
                  </div>
                  <a class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" id="sign_up">Sign Up</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-login.php">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="myModal">
      <div class="lskymodal-content">
        <p id="message" style="margin-bottom: 0;">
        </p>
      </div>
    </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
      var mes_box = $('#myModal');
      var mes = $('#message');

      $('#sign_up').on('click',function(){
        var eThis = $(this);
        var Parent = eThis.parents('.frm_sign');
        var up_name = Parent.find('#up_name');
        var up_pass = Parent.find('#up_pass');
        var frm = eThis.closest('form.frm_sign');
        var frm_data = new FormData(frm[0]);
        
        $.ajax({
          url: '../action/sign_up.php',
          type: 'POST',
          data: frm_data,
          contentType: false,
          cache: false,
          processData: false,
          dataType: "json",
          beforeSend: function() {
            //work before success   
          },
          success: function(data) {
            mes_box.css({
          "display": "flex"
        });
        setTimeout(() => (mes_box.css({
          "display": "none"
        })), 2000);
        mes.html(data.message);
            if (data.message == "success") {
              var url = "authentication-login.php";
              window.location = url; 
            }
          }
        });
      // });
      });
    });
  </script>
</body>

</html>