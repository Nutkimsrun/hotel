<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
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
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI COMPONENTS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Alerts</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Content</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Menu & Logo</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li>
          </ul>
          <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
            <div class="d-flex">
              <div class="unlimited-access-title me-3">
                <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
              </div>
              <div class="unlimited-access-img">
                <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="card">
                <div class="card-body">
                  <form method="dialog" class="con_frm">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Input menu" aria-describedby="emailHelp">
                      <input hidden type="text" id="edit_id" name="edit_id">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Price</label>
                      <input type="text" class="form-control" id="price" name="price" placeholder="Input menu" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Description</label>
                      <textarea class="form-control" style="width: 100%;" name="description" id="description" rows="3" aria-describedby="emailHelp"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Type</label>
                      <div id="opt_type">
                        <select id="type" name="type" class="form-select" aria-label="Default select example">
                          <option value="header">header</option>
                          <option value="welcome">welcome</option>
                          <option value="features">features</option>
                          <option value="room">room</option>
                          <option value="rate">rate</option>
                          <option value="answer">answer</option>
                          <option value="footer">footer</option>
                          <option value="massage">massage</option>
                          <option value="food">food</option>
                          <option value="newfeeds">newfeeds</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Show/Hide</label>
                      <div id="opt_sts">
                        <select id="con_opt" name="con_opt" class="form-select" aria-label="Default select example">
                          <option value="show">Show</option>
                          <option value="hide">Hide</option>
                        </select>
                      </div>
                    </div>
                    <div class="mt-3">
                      <div id="img_box">
                        <input type="file" name="photo_logo" id="img_box1">
                      </div>
                      <input hidden type="text" name="txt_photo" id="txt_photo">
                    </div>
                    <div style="margin-top: 5rem;">
                      <button style="float: right;" id="save_con" class="btn btn-primary"><i class="fa-solid fa-file-import"></i> Save</button>
                      <button style="float: right;" id="update_con" class="btn btn-danger"><i class="fa-solid fa-file-import"></i> Update</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row" id="view_data" style="overflow-y: scroll;scroll-behavior: smooth;height: 500px;"></div>
              <!--  loop with php   -->
              <!-- test  -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- message  -->
    <div id="myModal">
      <div class="lskymodal-content">
        <p id="message" style="margin-bottom: 0;">
        </p>
      </div>
    </div>
    <!-- end -->
    <!-- ass delete  -->
    <div class="modal fade" id="ass_delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Message</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Do you want delete this record [ <span id="body_delete"></span> ]?
          </div>
          <div class="modal-footer" style="justify-content: center;">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
            <button type="button" id="yes_delete" class="btn btn-primary" data-bs-dismiss="modal">Yes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end delete  -->



  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script>
    $(document).ready(function() {
      var mes_box = $('#myModal');
      var mes = $('#message');
      var save = $('#save_con');
      var update = $('#update_con').hide();
      var dataInd = 0;
      var editID;
      // upload image 
      $('#img_box').change(function() {
        var eThis = $(this);
        var frm = eThis.closest('form.con_frm');
        var frm_data = new FormData(frm[0]);
        $.ajax({
          url: '../action/upload_img_content.php',
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
            //work after success   
            $('#img_box').css({
              "background-image": "url(../assets/img_box/" + data.name + ")"
            });
            $('#txt_photo').val(data.name);
          }
        });
      });
      // save content 
      $('#save_con').click(function() {
        var eThis = $(this);
        var Parent = eThis.parents('.con_frm');
        var title = Parent.find('#title');
        var des = Parent.find('#description');
        var type = Parent.find('#type');
        var img = Parent.find('#txt_photo');
        var price = Parent.find('#price');
        var status = Parent.find('#con_opt');
        var frm = eThis.closest('form.con_frm');
        var frm_data = new FormData(frm[0]);
        $.ajax({
          url: '../action/save_content.php',
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
            // get auto data
            var autoData = `
                      <div class="col-md-4" id="form_content">
                    <form method="dialog" class="frm_data">
                      <p id="loopID" hidden>${data.id}</p>
                      <h5 class="card-title fw-semibold mb-4" id="type_loop">${type.val()}</h5>
                      <div class="card">
                      <img style="height: 230px;object-fit: cover;" id="img_loop" class="card-img-top" src="../assets/img_box/${img.val()}" alt="${img.val()}">
                        <div class="card-body">
                          <h5 class="card-title" id="title_loop">${title.val()}</h5>
                          <p class="card-text" id="des_loop">${des.val()}</p>
                          <p class="card-text" id="sts_loop">${status.val()}</p>
                          <p class="card-text" id="price_loop">${price.val()}</p>
                          <button type="button" class="btn btn-primary" id="get_edit">Edit</button>
                          <button style="float: right;" type="button" class="btn btn-danger" id="get_delete">Delete</button>
                        </div>
                      </div>
                    </form>
                  </div>`;
            img.val('');
            title.val('');
            des.val('');
            price.val('');
            //work after success     
            $('#img_box').css({
              "background-image": "url('../assets/images/backgrounds/icon-img_upload.png')"
            });
            $("div#opt_logo > select > option[value='show']").prop("selected", true); // select
            mes_box.css({
              "display": "flex"
            });
            setTimeout(() => (mes_box.css({
              "display": "none"
            })), 2000);
            if (data.message == 'success') {
              $('#view_data').prepend(autoData);
              mes.html('Insert Successfully.');
            } else if (data.message == 'duplicat') {
              mes.html('Dublicate title!');
            } else {
              mes.html('Please input file!');
            }
          }
        });
      });
      // get edit data
      $('#view_data').on('click', '#get_edit', function() {
        var eThis = $(this);
        var ind = eThis.parents('#form_content');
        dataInd = ind.index();
        editID = ind.find('#loopID').text().trim();
        var type = ind.find('#type_loop').text().trim();
        var img = ind.find('#img_loop').attr('alt');
        var title = ind.find('#title_loop').text().trim();
        var des = ind.find('#des_loop').text().trim();
        var price = ind.find('#price_loop').text().trim();
        var sts = ind.find('#sts_loop').text().trim();
        $('#edit_id').val(editID);
        $('#title').val(title);
        $('#price').val(price);
        $('#description').val(des);
        $("div#opt_sts > select > option[value=" + sts + "]").prop("selected", true); // option
        $("div#opt_type > select > option[value=" + type + "]").prop("selected", true); // option
        // img 
        $('#img_box').css({
          "background-image": "url(../assets/img_box/" + img + ")"
        });
        $('#txt_photo').val(img);
        // setTimeout(() => (ind.css({
        //       "background-color": "white"
        //     })), 2000);
        // message block
        save.hide();
        update.show();
        mes_box.css({
          "display": "flex"
        });
        setTimeout(() => (mes_box.css({
          "display": "none"
        })), 2000);
        mes.html('Selected.');
      });
      // update data
      update.on('click', function() {
        var eThis = $(this);
        var Parent = eThis.parents('.con_frm');
        var id = Parent.find('#edit_id');
        var title = Parent.find('#title');
        var des = Parent.find('#description');
        var type = Parent.find('#type');
        var img = Parent.find('#txt_photo');
        var price = Parent.find('#price');
        var status = Parent.find('#con_opt');
        var frm = eThis.closest('form.con_frm');
        var frm_data = new FormData(frm[0]);
        $.ajax({
          url: '../action/update_content.php',
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
            getcontent();
            id.val('');
            title.val('');
            des.val('');
            img.val('');
            price.val('');
            save.show();
            update.hide();
            $('#img_box').css({
              "background-image": "url('../assets/images/backgrounds/icon-img_upload.png')"
            });
            $("div#opt_sts > select > option[value='show']").prop("selected", true); // select
            mes_box.css({
              "display": "flex"
            });
            setTimeout(() => (mes_box.css({
              "display": "none"
            })), 2000);
            mes.html('Updated.');
          }
        });
      });
      getcontent();

      function getcontent() {
        $.ajax({
          url: "../action/get_content.php",
          method: "POST",
          success: function(data) {
            $("#view_data").html(data);
          }
        });
      };
      // ass delete 
      $('#view_data').on('click', '#get_delete', function() {
        var eThis = $(this);
        var ind = eThis.parents('#form_content');
        dataInd = ind.index();
        editID = ind.find('#loopID').text().trim();
        $('#ass_delete').modal('show');
        $('#body_delete').html(dataInd);
        $('#body_delete').css({
          'color': 'red'
        });
        console.log(editID);
      });
      // delete form 
      $('#ass_delete').on('click', '#yes_delete', function() {
        $.ajax({
          url: '../action/delete_content.php',
          type: 'POST',
          data: {
            ids: editID
          },
          // contentType: false,
          cache: false,
          // processData: false,
          dataType: "json",
          beforeSend: function() {
            //work before success   
          },
          success: function(data) {
            // console.log(data);
            //work after success     
            mes_box.css({
              "display": "flex"
            });
            setTimeout(() => (mes_box.css({
              "display": "none"
            })), 2000);
            if (data.message == 'delete') {
              getcontent();
              mes.html('Delete Successfully.');
            } else {
              mes.html('file!');
            }
          }
        });
      });






    });
  </script>
</body>

</html>
  <?php
}else {
  header("Location:../html/authentication-login.php");
  exit();
}
?>
