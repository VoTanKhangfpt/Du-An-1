<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <link rel="stylesheet" href="Template/css/loaisanpham.css">

    <link rel="stylesheet" href="Template/css/sanphamchitiet.css">
    <link rel="stylesheet" href="Template/css/dangnhap.css">
    <link rel="stylesheet" href="Template/css/dangky.css">
    <link rel="stylesheet" href="Template/css/giohang.css">
    <link rel="stylesheet" href="Template/css/thanhtoan.css">
    <link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Template/css/style.css">
</head>

<body>

    <div class="gvn-banner-header" class="">
        <div class="owl-stage-outer">
            <a href="#" style="background: url(Template/img/banner-qc/banner1.png); background-position: center; background-repeat: no-repeat; "></a>
        </div>
    </div>

    <main>
        <div id="page">
            <header id="mast-head">
                <div class="container">
                    <div id="primary">

                        <div class="mast-head">
                            <div class="header-logo-area">
                                <div class="header-site-branding">
                                    <a href="index.php"><img id="logo" style="width: 180px; height: 71px;" src="Template/img/brands/logo1.png" alt="" width="301" height="71"></a>
                                </div>

                                <div class="off-canvas-navigation-wrapper">
                                    <div id="mobile-menu" class="off-canvas-navbar-toggle-buttons">
                                        <i class="fas fa-bars"></i>
                                    </div>

                                    <div id="desktop-small-menu">
                                        <div id="btn-mobile-menu" class="navbar-toggle-close">
                                            Danh mục
                                        </div>
                                        <div class="lst-items">
                                            <?php if (isset($category_list)) {
                                                foreach ($category_list as $cate) {
                                                    extract($cate);

                                            ?>
                                                    <a href="?mod=page&act=product&id=<?= $id ?>"><img width="30%" src="uploads/images/<?= $anh ?>" alt="">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;<h3><?= $tendm ?></h3>
                                                    </a>
                                                    <!-- <a href="./loaisanpham.html"><i class="fas fa-keyboard"></i>
                                                <h3>Bàn phím Gaming</h3>
                                            </a>
                                            <a href="./loaisanpham.html"><i class="fa-solid fa-chair"></i>
                                                <h3>Ghế Gaming</h3>
                                            </a>
                                            <a href="./loaisanpham.html"><i class="fas fa-desktop"></i>
                                                <h3>PC Gaming</h3>
                                            </a>
                                            <a href="./loaisanpham.html"><i class="fas fa-server"></i>
                                                <h3>Bộ định tuyến không dây</h3>
                                            </a> -->

                                            <?php }
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="#" class="navbar-search">
                                <div class="input_group_search">
                                    <div class="input-search-field">
                                        <input type="text" placeholder="Bạn tìm gì...">
                                    </div>
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger p-0" type="submit"><i class="fas fa-search"></i>Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                            <div class="header-icons">
                                <?php if (!isset($_SESSION["user"]['ten'])) : ?>
                                    <div class="header-icon">
                                        <aside>
                                            <i class="far fa-user"></i>
                                            <span>Đăng nhập / Đăng ký
                                                <br>Tài khoản
                                                <i class="fas fa-caret-down"></i>
                                            </span>
                                        </aside>

                                        <div class="popup-navbar-account">
                                            <a href="?mod=user&act=dangnhap">Đăng nhập</a>
                                            <a href="?mod=user&act=dangky">Đăng ký</a>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <div class="header-icon">
                                        <aside>
                                            <i class="far fa-user"></i>
                                            <span>

                                                <?= $_SESSION['user']['ten'] ?>
                                            </span>
                                        </aside>

                                        <div class="popup-navbar-account">
                                            <a href="#">Thông tin tài khoản</a>
                                            <a href="?mod=user&act=doimatkhau">Đổi mật khẩu</a>
                                            <a href="#">Đơn hàng của bạn</a>
                                            <a href="?mod=user&act=dangxuat">Đăng xuất</a>
                                        </div>
                                    </div>

                                <?php endif; ?>

                                <div class="header-icon header-icon__cart">
                                    <aside>
                                        <a href="?mod=cart&act=show">
                                            <i class="fas fa-shopping-cart"></i>

                                        </a>
                                        <span class="cart-items-count">0</span>
                                        <span class="cart-title">Giỏ hàng</span>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </header>


            <!-- content -->
            <?php include_once 'View/' . $viewName . '.php'; ?>
            <!-- content end -->

            <footer id="colophon">

                <div class="container">
                    <div>
                        <div class="footer-newsletter">
                            <div class="footer-newsletter-inner">
                                <div class="newsletter-content">
                                    <h5 class="newsletter-title">Đăng ký nhận bản tin GEARVN</h5>
                                    <span class="newsletter-marketing-text">Nhận ngay thông tin về các chương trình khuyến
                                        mãi</span>
                                </div>
                                <div class="newsletter-form">
                                    <form action="#" class="navbar-search">
                                        <div class="input_group_search">
                                            <div class="input-search-field">
                                                <input type="text" placeholder="Email của bạn...">
                                            </div>
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger p-0" type="submit"></i>Đăng ký</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-widgets">
                        <div class="widget-column">
                            <aside class="widget_text">
                                <div class="widget_body">
                                    <h4 class="widget-title">VỀ GEARVN</h4>
                                    <ul class="link-list">
                                        <li><a href="gioithieu.html">Giới thiệu về GEARVN</a></li>
                                        <li><a href="#">Tuyển dụng khối Văn phòng</a></li>
                                        <li><a href="#">Tuyển dụng khối Showroom</a></li>
                                        <li><a href="#">Chính sách bảo mật</a></li>
                                        <li><a href="#">Điều khoản sử dụng</a></li>
                                    </ul>
                                </div>
                            </aside>

                            <aside class="widget_text">
                                <div class="widget_body">
                                    <h4 class="widget-title">HỆ THỐNG TỔNG ĐÀI MIỄN PHÍ: <br> (Làm việc từ 9:00 - 19:00)
                                    </h4>
                                    <ul class="link-list">
                                        <li><a href="#">Tổng đài mua hàng: <b> 1800 6975</b></a></li>
                                        <li><a href="#">Tổng đài hỗ trợ khách hàng: <b> 1800 6173</b></a></li>
                                    </ul>
                                </div>
                            </aside>

                            <aside class="widget_text">
                                <div class="widget_body">
                                    <h4 class="widget-title">THÔNG TIN</h4>
                                    <ul class="link-list">
                                        <li><a href="#">Theo dõi đơn hàng</a></li>
                                        <li><a href="#">Mua & giao nhận hàng</a></li>
                                        <li><a href="#">Quy định & hình thức thanh toán</a></li>
                                        <li><a href="#">Bảo hành & bảo trì</a></li>
                                        <li><a href="#">Đổi trả & hoàn tiền</a></li>
                                    </ul>
                                </div>
                            </aside>

                            <aside class="widget_text">
                                <div class="widget_body">
                                    <h4 class="widget-title">ĐƠN VỊ VẬN CHUYỂN</h4>
                                    <ul class="list-delivery">
                                        <li><img src="../Template/img/footer/ĐƠN VỊ VẬN CHUYỂN/ems.png" alt=""></li>
                                        <li><img src="../Template/img/footer/ĐƠN VỊ VẬN CHUYỂN/giao-hang-chanh-xe.png" alt="">
                                        </li>
                                        <li><img src="../Template/img/footer/ĐƠN VỊ VẬN CHUYỂN/giao-hang-gearvn.png" alt=""></li>
                                        <li><img src="../Template/footer/ĐƠN VỊ VẬN CHUYỂN/giao-hang-nhanh.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="widget_body mr-top-30">
                                    <h4 class="widget-title">CÁCH THỨC THANH TOÁN</h4>
                                    <ul class="list-delivery">
                                        <li><img src="Template/img/footer/CÁCH THỨC THANH TOÁN/internet.png" alt=""></li>
                                        <li><img src="Template/img/footer/CÁCH THỨC THANH TOÁN/jcb.png" alt=""></li>
                                        <li><img src="../Template/img/footer/CÁCH THỨC THANH TOÁN/Mastercard.png" alt=""></li>
                                        <li><img src="../Template/img/footer/CÁCH THỨC THANH TOÁN/momooo.png" alt=""></li>
                                    </ul>
                                    <ul class="list-delivery">
                                        <li><img src="Template/img/footer/CÁCH THỨC THANH TOÁN/money-face.png" alt=""></li>
                                        <li><img src="Template/img/footer/CÁCH THỨC THANH TOÁN/tra-gop.png" alt=""></li>
                                        <li><img src="Template/img/footer/CÁCH THỨC THANH TOÁN/VISA.png" alt=""></li>
                                        <li><img src="Template/img/footer/CÁCH THỨC THANH TOÁN/zalopay@3x.png" alt=""></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="footer-bottom-widgets">
                            <div class="widget-bottom-column">
                                <aside class="widget_bottom_text">
                                    <div class="widget_bottom_body">
                                        <a href="#"><img src="https://gstatic.gearvn.com/2021/08/Logo-GEARVN_pc-300x70-1-1.png" alt="" width="200px"></a>
                                        <h3 class="widget-bottom-title">CÔNG TY TNHH THƯƠNG MẠI GEARVN</h3>
                                        <p>GearVN là doanh nghiệp chuyên cung cấp thiết bị, giải pháp về máy tính, thiết bị
                                            chơi game, thiết bị công nghệ cao cấp hàng đầu Việt Nam.</p>
                                        <img src="https://gstatic.gearvn.com/2020/01/20150827110756-dathongbao.png" alt="" width="200px">
                                    </div>
                                </aside>

                                <aside class="widget_bottom_text">
                                    <div class="widget_bottom_body">
                                        <h4 class="widget-bottom-title">HỆ THỐNG SHOWROOM</h4>
                                        <ul class="link-bottom-list">
                                            <h4>SHOWROOM HCM (Làm việc từ 9:00 - 19:00)</h4>
                                            <li>Địa chỉ: 78-80-82 Hoàng Hoa Thám, Phường 12, Quận Tân Bình.</li>
                                            <h4>SHOWROOM HN (Làm việc từ 9:00 - 19:00)</h4>
                                            <li>Địa chỉ : 37 Ngõ 121 Thái Hà, Phường Trung Liệt, Quận Đống Đa.</li>
                                        </ul>
                                    </div>
                                </aside>

                                <aside class="widget_bottom_text">
                                    <div class="widget_bottom_body" style="text-align: center;">
                                        <h4 class="widget-bottom-title">TIN TỨC CÔNG NGHỆ</h4>
                                        <img src="https://gstatic.gearvn.com/2021/07/GVN360-04.png" alt="" width="150px">
                                        <h4 class="widget-bottom-title">Kết nối với chúng tôi</h4>
                                    </div>
                                    <ul class="link-bottom-list" style="text-align: center;">
                                        <div class="connect-with-us">
                                            <a href="https://www.facebook.com/gearvnhcm/"><img src="https://gstatic.gearvn.com/2020/01/facebook.png" alt=""></a>
                                            <a href="https://www.facebook.com/groups/VietnamGamingConner/"><img src="https://gstatic.gearvn.com/2020/01/group.png" alt=""></a>
                                            <a href="https://www.youtube.com/channel/UCdxRpD_T4-HzPsely-Fcezw"><img src="https://gstatic.gearvn.com/2020/01/youtube.png" alt=""></a>
                                        </div>
                                    </ul>

                                </aside>

                            </div>
                        </div>
                    </div>
                </div>






            </footer>

    </main>
</body>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    // AUTOMATIC
    function showSlides() {
        console.log("ABC");
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000);
    }


    var header = document.getElementById('desktop-small-menu');
    var mobileMenu = document.getElementById('mobile-menu');
    var a = 0;
    //Đóng mở menu mobile
    mobileMenu.onclick = function() {
        if (a == 0) {
            header.style.display = 'block';
            a++;
        } else if (a != 0) {
            header.style.display = 'none';
            a = 0;
        }
    }

    var btnmobileMenu = document.getElementById('btn-mobile-menu');
    //Đóng mở menu mobile
    btnmobileMenu.onclick = function() {
        if (a == 1) {
            header.style.display = 'none';
            a--;
        } else {
            header.style.display = 'block';
        }
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // Quantity 
    $('.pro-qty').prepend('<button class="dec qtybtn">-</button>');
    $('.pro-qty').append('<button class="inc qtybtn">+</button>');
    $('.qtybtn').on('click', function() {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find('input').val(newVal);
    });

    /*----- 
    	Shipping Form Toggle
    --------------------------------*/
    $('[data-shipping]').on('click', function() {
        if ($('[data-shipping]:checked').length > 0) {
            $('#shipping-form').slideDown();
        } else {
            $('#shipping-form').slideUp();
        }
    })
</script>

</html>