<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <!-- <base href="/php1/new/admin/"> -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="View/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="View/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="View/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="View/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="View/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="View/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="View/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="View/plugins/summernote/summernote-bs4.min.css">
  <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

  <link rel="stylesheet" href="View/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="View/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="View/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="View/css/style.css">
  <link rel="stylesheet" href="View/css/order.css">
  <script src="https://www.gstatic.com/charts/loader.js"></script>
</head>


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="loader"></div>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item" id="nav-bar">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="https://www.facebook.com/profile.php?id=100087825580481" class="nav-link">Liên hệ</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="View/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="View/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="View/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../" class="brand-link">
        <img src="View/img/logo.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">CryberThree</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="View/img/user.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="index.php" class="d-block"><?php if(!empty($_SESSION['user'])) echo $_SESSION['user']['ten']?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
              <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./admin.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./admin2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./admin3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> -->
            </li>
            <li class="nav-item">
              <a href="index.php?mod=category" class="nav-link">
                <i class="nav-icon fa-solid fa-folder-open"></i>
                <p>
                  Quản lí danh mục
                  <span class="badge badge-info right"></span>
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?mod=product" class="nav-link">
                <i class="nav-icon fa-solid fa-folder-plus"></i>
                <p>
                  Quản lí sản phẩm
                  <!-- <span class="right badge badge-danger">New</span> -->
                  <span class="badge badge-info right"></span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?mod=user" class="nav-link">
                <i class="nav-icon fa-solid fa-user"></i>
                <p>
                  Quản lí thành viên
                  <!-- <i class="fas fa-angle-left right"></i> -->
                  <span class="badge badge-info right"></span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?mod=comment" class="nav-link">
                <i class="nav-icon fa-solid fa-comment"></i>
                <p>
                  Quản lí bình luận
                  <!-- <i class="fas fa-angle-left right"></i> -->
                  <span class="badge badge-info right"></span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?mod=order" class="nav-link">
                <i class="fa-solid fa-store"></i>
                <p>
                  Quản lí đơn hàng

                  <!-- <i class="fas fa-angle-left right"></i> -->
                  <span class="badge badge-info right"></span>
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="View/img/adminLTELogo.png" alt="adminLTELogo" height="60" width="60">
    </div> -->

    <?php
    require_once 'View/' . $view_name . '.php';
    ?>

    <!--Brand section start-->

    <!--Brand section end-->

    <footer class="footer-section section bg-dark">

      <!--Footer Top start-->
      <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
        <div class="container">
          <div class="row row-25">

            <!--Footer Widget start-->
            <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
              <h4 class="title"><span class="text">About TheFace</span></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat</p>
              <div class="footer-social">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-instagram"></i></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                <a href="#" class="pinterest"><i class="fa fa-vimeo"></i></a>
              </div>
            </div>
            <!--Footer Widget end-->


            <!--Footer Widget start-->
            <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
              <h4 class="title"><span class="text">Information</span></h4>
              <ul class="ft-menu">
                <li><a href="#">Returns</a></li>
                <li><a href="#">Delivery</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Mobile</a></li>
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Unsubscribe Notification</a></li>
              </ul>
            </div>
            <!--Footer Widget end-->


            <!--Footer Widget start-->
            <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
              <h4 class="title"><span class="text">Our Offers</span></h4>
              <ul class="ft-menu">
                <li><a href="#">New products</a></li>
                <li><a href="#">Top sellers</a></li>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Manufacturers</a></li>
                <li><a href="#">Suppliers</a></li>
                <li><a href="#">Specials</a></li>
                <li><a href="#">Service</a></li>
              </ul>
            </div>
            <!--Footer Widget end-->

            <!--Footer Widget start-->
            <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
              <h4 class="title"><span class="text">Contact us</span></h4>
              <ul class="address">
                <li><i class="fa fa-home"></i><span>HH2 BacHa building, Tohuu Street Hanoi,
                    Vietnam</span>
                </li>
                <li><i class="fa fa-phone"></i><span><a href="#">(08) 123 456 7890</a></span></li>
                <li><i class="fa fa-envelope-o"></i><span><a href="#">yourmail@domain.com</a></span>
                </li>
              </ul>
              <div class="payment-box mt-15 mb-15">
                <a href="#"><img src="" alt=""></a>
              </div>
            </div>
            <!--Footer Widget end-->
          </div>
        </div>
      </div>
      <!--Footer Top end-->

      <!--Footer bottom start-->
      <div class="footer-bottom section">
        <div class="container ft-border pt-40 pb-40 pt-xs-20 pb-xs-20">
          <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-8">
              <div class="copyright text-left">
                <p>Copyright &copy;2019 <a href="#">Theface</a>. All rights reserved.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4">
              <div class="footer-logo text-right">
                <a href="index.php"><img src="View/layout/assets/images/logofoo.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Footer bottom end-->
    </footer>
  </div>
  <!-- Modal -->
  <!-- <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">


        <div class="modal-header">
          <h4 class="modal-title">Thông báo</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


        <div class="modal-body">
          Không thể cập nhật tài khoản của người dùng user
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div> -->
</body>

<!-- <script src="View/layout/assets/js/vendor/jquery-1.12.4.min.js"></script> -->
<script src="View/layout/assets/js/popper.min.js"></script>
<script src="View/layout/assets/js/bootstrap.min.js"></script>
<script src="View/layout/assets/js/plugins.js"></script>
<script src="View/layout/assets/js/main.js"></script>
</body>

</html>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script> -->

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
  window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    loader.classList.add("loader--hidden");

    loader.addEventListener("transitionend", () => {
      document.body.removeChild(loader);
    });
  });
  let navbar = document.getElementById('nav-bar');
  let aside = document.querySelector('.main-sidebar');
  let content = document.querySelector('.content-wrapper');
  let navMenu =document.querySelector('.main-header');
  navbar.onclick = () => {
    aside.classList.toggle("mystyle");
    content.classList.toggle("mystyle2");
    navMenu.classList.toggle("mystyle2");
  }

  $(".btn-edit-user").click(function() {
    alert("Đây không phải tài khoản Admin");

  });

  $(document).ready(function() {
    $(".toggle-comment").click(function() {
      var diachi = "http://localhost/Git_Hub/Du-An-1/admin/index.php?mod=comment&act=edit";
      var status = $(this).is(':checked') ? 1 : 0;
      var id = $(this).attr('data-id');
      $.ajax({
        url: diachi,
        data: {
          catId: id
        },
        method: "POST",
        cache: false,
        success: function(data) {
          console.log(data);
        }
      });
    })
  })
</script>
