<?php


if (is_array($item) && count($item) > 0) {
    extract($item);
}
?>


<div id="content">
    <div class="container">
        <div class="site-content-inner">
            <div class="single-product-wrapper">

                <div class="product-images-wrapper">
                    <div class="woocommerce-product-gallery">
                        <div class="woocommerce-product-gallery__image">
                            <a href="#"><img src="uploads/images/<?= $hinh ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="product-thumbs-slide">
                        <img src="Template/img/sanphamchitiet/slider-1.png" alt="">
                        <img src="Template/img/sanphamchitiet/slider-2.png" alt="">
                        <img src="Template/img/sanphamchitiet/slider-3.png" alt="">
                        <img src="Template/img/sanphamchitiet/slider-4.png" alt="">
                    </div>
                </div>

                <div class="entry-summary">
                    <h1 class="product_title"><?= $ten ?></h1>
                    <p class="price"><span class="electro-price"><?= number_format($gia_km, 0, ",", ".") ?> VNĐ</span></p>
                    <div class="woocommerce-product-details__short-description">
                        <!-- <p><strong><em>►BACK TO SCHOOL CÙNG ACER – Tặng thêm 01 năm bảo hành</em></strong></p>

                        <hr>
                        <p><span style="color: #ff0000;"><u><strong>Khuyến mãi:</strong></u></span></p>
                        <p><strong> &nbsp; &nbsp; &nbsp; 🎁 BALO PREDATOR GAMING UTILITY BACKPACK </strong></p>
                        <p><strong> &nbsp; &nbsp; &nbsp; 🎁 Bàn phím AKKO 3087S RGB – Black</strong>
                            <strong><em>(Blue/ Pink/ Orange Akko Switch)</em></strong> trị
                            giá<strong>&nbsp;1,290,000</strong>
                        </p>
                        <hr>
                        <p><span style="color: #ff0000;"><u><strong>Ưu đãi đặc biệt khi mua kèm
                                        LAPTOP:</strong></u></span></p> -->
                        <!-- <ul>
                            <li>Mua thêm 1 thanh RAM 8GB chỉ với 990.000</li>
                            <li>Mua kèm màn hình giảm sốc lên đên 49%</li>
                            <li>Mua kèm sản phẩm khác giảm giá lên đến 56%</li>
                            <li>Hỗ&nbsp;trợ trả góp MPOS (Thẻ tín dụng), HDSAISON.</li>
                        </ul> -->
                        <p class="pd-stock-status"><strong style="display: block;">CÒN HÀNG</strong></p>
                        <form id="cart-top" class="cart" method="post" action="?mod=cart&act=add">
                            <input type="hidden" name="price" value="<?= $gia_km ?>">
                            <input type="hidden" name="idsp" value="<?= $id ?>">
                            <button type="submit" id="addcart" name="btn-submit" class="single_add_to_cart_button button alt" style="display: block;">
                                <b>Mua ngay</b><br>
                                <span>Giao tận nơi hoặc nhận tại siêu thị</span>
                            </button>


                        </form>
                    </div>
                </div>

                <div class="entry-right-content">
                    <div class="product-policy">
                        <!-- <ul>
                                <img src="https://gstatic.gearvn.xyz/2021/08/box.png" alt="">Bộ sản phẩm gồm:
                                Adapter, sách hướng dẫn, ngàm ổ cứng,...
                                <li><img src="https://gstatic.gearvn.com/2021/11/shipping.png" alt="">Giao hàng miễn phí
                                    toàn quốc.</li>
                            </ul> -->
                    </div>
                </div>

            </div>

            <div class="product-contents">
                <div class="text-detail">
                    <!-- <div class="electro-description clearfix show-more-content">
                        <h2>Đánh giá chi tiết laptop gaming Acer Predator Helios 300 PH315 54 75YD</h2>
                        <h3><strong>Sức mạnh đến từ NVIDIA GeForce RTX 3060</strong></h3>
                        <p>RTX 3060 sẽ mang lại hiệu suất tối ưu cho game thủ và creator. Chiếc card màn hình được
                            sở hữu sức mạnh bởi kiến trúc Ampere thế hệ 2 của NVIDIA – bao gồm công nghệ Ray Tracing
                            mới, Lõi Tensor và khả năng streaming với bộ xử lý multiprocessor để có một bước nhảy
                            vọt về hiệu năng. Acer Predator Helios 300 trang bị Công nghệ NVIDIA ® Max-Q 1 cho hiệu
                            suất và hiệu suất cao nhất.</p>
                        
                        <h3><strong>Khả năng xử lý mạnh mẽ với Intel Gen 11</strong></h3>
                        <p>Ẩn sâu trong con quái vật Acer Predator Helios 300 là chiếc CPU Intel i7 Gen 11 với mã –
                            11800H. Kết hợp cùng 16GB RAM, Acer Predator Helios 300 PH315 54 75YD mang lại khả năng
                            xử lý với tốc độ đáng kinh ngạc bao gồm nhiều tác vụ công việc và giải trí.</p>
                        <p><img class="aligncenter wp-image-68203 size-large" src="" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                        <h3><strong>Công nghệ AeroBlade 3D Gen 5</strong></h3>
                        <p>Acer Predator Helios 300 PH315 54 75YD sẽ mang đến khả năng hoạt động theo thời gian dài
                            nhờ vào công nghệ tản nhiệt AeroBlade 3D Gen 5.Thiết kế mới của quạt AeroBlade 3D thế hệ
                            thứ 5 giúp giảm tiếng ồn trong khi tăng lưu lượng gió – cho phép bạn tối đa hóa hiệu
                            suất của mình, bất kể bạn đang làm tác vụ nào. Kết hợp cùng CoolBoost, quạt tản nhiệt
                            điều chỉnh để giữ cân bằng nhiệt độ cho các khu vực quan trọng.</p>
                        <p><img class="aligncenter wp-image-68204 size-large" src="" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                        <h3><strong>Vortex Flow</strong></h3>
                        <p>Thông qua tấm tản nhiệt được đặt ở vị trí trọng yếu, Acer Predator Helios 300 PH315 54
                            75YD được tối ưu hóa luồng không khí, tăng khả năng làm mát tổng thể và giảm nhiệt độ bề
                            mặt của chiếc laptop gaming khủng này.</p>
                        <p><img class="aligncenter wp-image-68205 size-large" src="" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                        <h3><strong>Nâng cao trải nghiệm gaming</strong></h3>
                        <p>Acer Predator Helios 300 PH315 54 75YD sở hữu chiếc màn hình QHD, tần số quét vươn đến
                            165Hz và tốc độ phản hồi 3ms mang lại trải nghiệm gaming tốt nhất cho game thủ. Cũng
                            tránh tình trạng ghosting và xé màn hình trên đứa con của Acer.</p>
                        <p><img class="aligncenter wp-image-68206 size-large" src="" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                        <h3><strong>Bàn phím RGB siêu đẹp&nbsp;</strong></h3>
                        <p>Tôn lên vẻ đẹp đậm chất gaming không thể nào thiếu được chiếc bàn phím LED RGB 4 vùng
                            trên Acer Predator Helios 300 PH315 54 75YD, nổi bật trên cụm phím WASD. Acer còn mang
                            đến 2 phím chức năng là: Turbo giúp tăng tối đa hiệu năng ngay lập tức và PredatorSense
                            giúp mở ứng dụng tiện ích chỉ có trên Acer Predator.</p>
                        <p><img class="aligncenter wp-image-68207 size-large" src="" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                        <h3><strong>Đa dạng các cổng kết nối</strong></h3>
                        <p>Acer Predator Helios 300 đầy đủ các cổng USB 3.2 – bao gồm cả Thunderbolt ™ 4 USB-C cực
                            nhanh – hỗ trợ chức năng DisplayPort và Power Delivery. Thông số kỹ thuật HDMI 2.1 mới
                            nhất cũng cho phép bạn dễ dàng cắm vào màn hình bên ngoài như 8K60, 4K120 hoặc thậm chí
                            10K.</p>
                        <p><img class="aligncenter wp-image-68208 size-large" src="" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                        <h3><strong>Kết nối online mạnh mẽ</strong></h3>
                        <p>Trang bị Ethernet Intel ® Killer E2600 và Intel ® Killer Wi-Fi 6 AX1650i và Control
                            Center 2.0, bạn có tất cả các công cụ cần thiết để có một tốc độ mạng vượt trội đem lại
                            trải nghiệm liền mạch trong các game online.</p>
                        <p><img class="aligncenter wp-image-68209 size-large" src="" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                        <h3><strong>DTS:X ULTRA</strong></h3>
                        <p>Công nghệ âm thanh DTS:X Ultra trên Acer Predator Helios 300 đem đến trải nghiệm thính
                            giác tuyệt vời trong các tựa game, bài hát, bộ phim.</p>
                        <p><img class="aligncenter wp-image-68210 size-large" src="https://gstatic.gearvn.com/2021/10/gearvn-laptop-gaming-acer-predator-helios-300-ph315-54-75yd-9-1024x569.jpg" alt="GEARVN.COM - Laptop Gaming Acer Predator Helios 300 PH315 54 75YD" width="1024" height="569" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                    </div> -->
                </div>


            </div>


        </div>

        <!-- --Begin-rating-- -->
        <!-- <div class="customers-rating">
            <div class="product-customer-rating">
                <div class="product-customer-title">
                    <h3>Đánh giá & Nhận xét Laptop ASUS Expertbook B1 B1402CBA NK1535W</h3>
                </div>
                <div class="product-customer-content">
                    <div class="product-customer-header">
                        <div class="product-rating-left">
                            <div class="star-number">
                                <span>0/5</span>
                            </div>
                            <div class="star-rate">
                                <span class="ic-star"></span>
                                <span class="ic-star"></span>
                                <span class="ic-star"></span>
                                <span class="ic-star"></span>
                                <span class="ic-star"></span>
                            </div>
                            <div class="star-title">
                                <p> <strong>0</strong> Đánh giá & nhận xét</p>
                            </div>
                        </div>
                        <div class="product-rating-right"></div>
                    </div>
                    <div class="product-customer-body"></div>
                    <div class="product-cutomer-footer">

                    </div>
                </div>
            </div>
        </div> -->
        <div class="card">
            <!-- <div class="card-header">Bình luận</div> -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt-4 mb-4">
                            <b><span id="average_rating">0</span> / 5</b>
                        </h1>
                        <div class="mb-3">
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                        </div>
                        <h3><span id="total_review">0</span> Đánh giá và nhận xét</h3>
                    </div>
                    <div class="col-sm-4">
                        <div class="flex-progress">
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>

                        </div>
                        <div class="flex-progress">
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>

                        </div>
                        <div class="flex-progress">
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>

                        </div>
                        <div class="flex-progress">
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>

                        </div>
                        <div class="flex-progress">
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>

                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <h3 class="mt-4 mb-3">Write Review Here</h3>
                        <button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
                    </div>
                </div>
            </div>
            <div class="card-footer" id="binhluan">
                <h2>Bình luận</h2>
                <section>

                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10 col-xl-8">
                            <?php if (!empty($_SESSION['user'])) {
                            ?>
                                <div class="card">


                                    <form action="?mod=page&act=comment" method="post">
                                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                            <div class="d-flex flex-start w-100">
                                                <!-- <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40" height="40" /> -->
                                                <div data-mdb-input-init class="form-outline w-100">
                                                    <label class="form-label" for="textAreaExample">Bình luận</label>
                                                    <textarea name="noidung" class="form-control" id="textAreaExample" rows="4" style="background: #fff;" placeholder="Nhập nội dung bình luận"></textarea>
                                                    <input type="hidden" value="<?= $_GET['id'] ?>" name="idpro">

                                                </div>
                                            </div>
                                            <div class="float-end mt-2 pt-1">
                                                <button type="submit" name="guibinhluan" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm">Gửi bình luận</button>
                                                <button type="reset" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-sm">Nhập lại</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php if (!empty($dsbl)) {
                                        $i = 0;
                                        foreach ($dsbl as $bl) {
                                            extract($bl);
                                    ?>
                                            <div class="card-body" id="comment">
                                                <div class="d-flex flex-start align-items-center">
                                                    <!-- <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60" height="60" /> -->
                                                    <div>
                                                        <h6 class="fw-bold text-primary mb-1"><?= $ten ?></h6>

                                                    </div>
                                                </div>

                                                <p class="mt-3 mb-4 pb-2 comment_text">
                                                    <?= $noidung ?>

                                                </p>
                                                <p class="text-muted small mb-0">
                                                    Ngày bình luận: <?= date_format(new DateTime($thoigianbinhluan), "Y/m/d H:i:s") ?>
                                                </p>

                                                <div class="d-flex justify-content-end">
                                                    <a href="#!" class="d-flex align-items-center me-0">
                                                        <i class="far fa-thumbs-up me-2"></i>
                                                        <p class="mb-0">Like</p>
                                                    </a>
                                                    <a href="#!" class="d-flex align-items-center me-0">
                                                        <i class="far fa-comment-dots me-2"></i>
                                                        <p class="mb-0">Comment</p>
                                                    </a>
                                                    <a href="#!" class="d-flex align-items-center me-0">
                                                        <i class="fas fa-share me-2"></i>
                                                        <p class="mb-0">Share</p>
                                                    </a>
                                                </div>
                                            </div>
                                    <?php $i++;
                                        }
                                    } ?>
                                </div>
                            <?php } else { ?>
                                <?php
                                // Lưu URL hiện tại và ID của trang chi tiết vào session
                                $_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
                                $_SESSION['previous_page_id'] = $id;
                                ?>
                                <div class="">
                                    <a href="?mod=user&act=dangnhap">Vui lòng đăng nhập để có thể bình luận về sản phẩm</a>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </section>


            </div>
        </div>

        <div class="site-content-inner row-product-same">
            <h2>Sản phẩm tương tự</h2>


            <div class="products-same flex-row">
                <?php
                if (is_array($random) && count($random) > 0) :

                    foreach ($random as $pro) :

                ?>
                        <div class="product-same-detail">
                            <a href="?mod=page&act=detail&id=<?= $pro['id'] ?>">
                                <div class="product-detail-img">

                                    <img src="uploads/images/<?= $pro['hinh'] ?>" alt="">
                                </div>
                            </a>

                            <div class="product-detail-content">
                                <div class="product-detail-title">
                                    <h3><a href="?mod=page&act=detail&id=<?= $pro['id'] ?>"><?= $pro['ten'] ?></a></h3>
                                </div>
                                <div class="product-detail-price">
                                    <p class="price-old"><del>Giá gốc: <?= number_format($pro['gia'], 0, ",", ",") ?> <sup>đ</sup></del></p>
                                    <p class="price-new">Giá khuyến mãi: <?= number_format($pro['gia_km'], 0, ",", ".") ?> <sup>đ</sup> </p>
                                    <!-- <span>-15%</span> -->
                                </div>
                                <div class="product-detail-rating">
                                    <span class="rating-number">4.0</span>
                                    <span class="rating-star"><i class="fa-solid fa-star"></i></span>
                                    <span class="rating-count">(0 đánh giá)</span>
                                </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>



            </div>
        </div>
    </div>


</div>