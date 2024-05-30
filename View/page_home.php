<div id="content">
    <div class="container">
        <div class="site-content-inner">
            <div id="primary">
                <div id="main">

                    <aside class="widget_homepage_slider-2">
                        <div class="home-slider">
                            <div class="row d-flex">
                                <div class="row-1 m-0 p-0">
                                    <div class="mySlides fade">
                                        <a href="#"><img src="Template/img/slideshow/slideshow_3.jpg"></a>
                                    </div>
                                    <div class="mySlides fade" style="display: none;">
                                        <a href="#"><img src="Template/img/slideshow/slideshow_4.jpg"></a>
                                    </div>
                                    <div class="mySlides fade" style="display: none;">
                                        <a href="#"><img src="Template/img/slideshow/slideshow_5.jpg"></a>
                                    </div>
                                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                                </div>
                                <div class="row-2 m-0 p-0">
                                    <div class="row-2.1">
                                        <a href="#"><img src="Template/img/content-banner/banner-vua1.png" alt=""></a>
                                    </div>

                                    <div class="row-2.2">
                                        <a href="#"><img src="Template/img/content-banner/banner-vua2.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="home-slider">
                            <div class="row ">
                             <a href="#" class="col-3 p-0"><img src="Template/img/content-banner/banner-row2-1.png" alt=""></a>
                                <a href="#" class="col-3 p-0"><img src="Template/img/content-banner/banner-row2-2.png" alt=""></a>
                                <a href="#" class="col-3 p-0"><img src="Template/img/content-banner/banner-row2-3.png" alt=""></a>

                            </div>
                        </div>
                    </aside>

                    <aside class="widget_display_static_block-2">
                        <div class="item-1">
                            <a href="#"><img src="Template/img/content-banner/qc-1.png" alt=""></a>
                            <a href="#"><img src="Template/img/content-banner/qc-2.png" alt=""></a>
                            <a href="#"><img src="Template/img/content-banner/qc-3.png" alt=""></a>
                            <a href="#"><img src="Template/img/content-banner/qc-4.png" alt=""></a>
                        </div>
                    </aside>

<aside class="widget_gearvn_brands">
    <div class="brands">
        <div class="brands-header">
            <h3>Thương hiệu sản phẩm</h3>
        </div>
        <div class="brands-body">
            <div class="brands-items">
                <div class="brands-row">
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/Intel-1.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/acer.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/amd.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/asus.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/gigabyte.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/logitech.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/nvidia.jpg" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/msi.png" alt=""></a></div>
                </div>

                <div class="brands-row">
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/apple.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/lg.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/samsung.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/Kington.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/Corsair-1.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/razer.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/Hyper.png" alt=""></a></div>
                    <div class="brands-item"><a href="#"><img src="Template/img/brands/LenovoLogo-282x152-02.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- <aside class="widget_gearvn_brands">
    <div class="brands">
        <div class="brands-header">
            <h3>Danh mục sản phẩm</h3>
        </div>
        <div class="brands-body">
            <div class="brands-items">
                <div class="brands-row d-flex justify-content-center">
                    <div class="brands-item">
                        <a href="#">
                            <img src="Template/img/brands/Intel-1.png" alt="">
                        </a>
                    </div>


                </div>


            </div>
        </div>
    </div>
</aside> -->

<aside class="widget_gearvn_list_product">
    <div class="list-product">
        <div class="list-product-header">
            <img class="img-flashsale" src="Template/img/product/sale/sale.png" alt="">
            <img class="img-flashsale-responsive" src="Template/img/product/sale/sale_responsive.png" alt="">
        </div>

        <div class="list-product-body">
            <?php
            if (is_array($getAllProduct)) {
                for ($i = 0; $i < count($getAllProduct); $i++) {
            ?>
                    <a href="?mod=page&act=detail&id=<?=$getAllProduct[$i]['id']?>">
                        <div class="list-product-item">
                            <div class="list-product-item-img">
                                <img src="./uploads/images/<?= $getAllProduct[$i]['hinh'] ?>" alt="">
                            </div>
                            <h2><?= $getAllProduct[$i]['ten'] ?></h2>
                            <span><?= number_format($getAllProduct[$i]['gia']) ?> VNĐ</span>
                        </div>
                    </a>
            <?php
                }
            }
            ?>
        </div>
    </div>
</aside>

<aside class="widget_gearvn_list_product">
    <div class="list-product">
        <div class="list-product-header">
            <img src="Template/img/product/noibat/ggrRH9Sb-Artboard-17.png" alt="">
        </div>

        <div class="list-product-body" style="background-color: #FFF;">
            <?php if (is_array($getHotProduct)) :
                foreach ($getHotProduct as $item) :
                    extract($item);

                    
            ?>
                    <a class="qc-first" href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                        <div class="list-product-item">
                            <div class="list-product-item-img">
                                <img src="./uploads/images/<?= $hinh ?>" alt="">
                            </div>
                            <h2><?= $ten ?></h2>
                            <span><?= number_format($gia_km, 0, ".", ",") ?> VNĐ</span>
                        </div>
                    </a>
            <?php
                endforeach;
            endif;

            ?>


        </div>

        <!-- <div class="list-product-body" style="background-color: #FFF;">
                                <a class="qc-first" href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/noibat/noibat2-1.jpg" alt="">
                                        </div>
                                        <h2>Laptop Gaming p MSI Modern 14 B1135MOU 5515VN</h2>
                                        <span>19.190.000 đ</span>
                                    </div>
                                </a>


                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/noibat/noibat2-1.jpg" alt="">
                                        </div>
                                        <h2>Laptop Gaming p MSI Modern 14 B1135MOU 5515VN</h2>
                                        <span>19.190.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/noibat/noibat2-2.jpg" alt="">
                                        </div>
                                        <h2>Laptop Gaming MSI Katana GF66 11UC 676VN</h2>
                                        <span>14.190.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/noibat/noibat2-3.jpg" alt="">
                                        </div>
                                        <h2>Laptop Acer Aspire 3 A315 56 502X</h2>
                                        <span>13.790.000 đ</span>
                                    </div>
                                </a>
                            </div> -->

    </div>

</aside>

<!-- <aside class="widget_gearvn_list_product bg-white border-radius-8">
                        <div class="list-product">
                            <div class="product-header">
                                <h3>Top PC bán chạy</h3>
                            </div>

                            <div class="list-product-body bg-white">
                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/toppc-banchay/PC GVN GAREN S.jpg" alt="">
                                        </div>
                                        <h2>PC GVN GAREN S</h2>
                                        <span>31.690.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/toppc-banchay/PC GVN IVY M.jpg" alt="">
                                        </div>
                                        <h2>PC GVN IVY M</h2>
                                        <span>42.390.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/toppc-banchay/PC GVN PHANTOM S.jpg" alt="">
                                        </div>
                                        <h2>PC GVN PHANTOM S</h2>
                                        <span>8.190.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/toppc-banchay/PC GVN RATCHET M.jpg" alt="">
                                        </div>
                                        <h2>PC GVN RATCHET M</h2>
                                        <span>12.590.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/toppc-banchay/PC GVN VENTUS M.jpg" alt="">
                                        </div>
                                        <h2>PC GVN VENTUS M</h2>
                                        <span>27.990.000 đ</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </aside>

                    <aside class="widget_gearvn_list_product bg-white border-radius-8 mr-bottom-30">
                        <div class="list-product">
                            <div class="product-header">
                                <h3>Bàn phím cơ giá rẻ</h3>
                            </div>

                            <div class="list-product-body bg-white">
                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/banphim/Bàn phím Corsair K70 RGB MK2 Silent Switch (CH-9109013-NA).png" alt="">
                                        </div>
                                        <h2>Bàn phím Corsair K70 RGB MK2 Silent Switch (CH-9109013-NA)</h2>
                                        <span>250.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/banphim/Bàn phím Corsair K70 RGB MK2 Brown Switch (CH-9109012-NA).png" alt="">
                                        </div>
                                        <h2>Bàn phím Corsair K70 RGB MK2 Brown Switch (CH-9109012-NA)</h2>
                                        <span>690.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/banphim/Bàn phím cơ Corsair K65 RGB MINI Cherry MX Speed Switch.jpg" alt="">
                                        </div>
                                        <h2>Bàn phím cơ Corsair K65 RGB MINI Cherry MX Speed Switch</h2>
                                        <span>890.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/banphim/Bàn phím cơ Mojike GK1 Black Pink Akko Switch V2 Orange Switch.jpg" alt="">
                                        </div>
                                        <h2>Bàn phím cơ Mojike GK1 Black Pink Akko Switch V2 Orange Switch
                                        </h2>
                                        <span>2.590.000 đ</span>
                                    </div>
                                </a>

                                <a href="sanphamchitiet.html" style="border: 1px solid #ededed;">
                                    <div class="list-product-item">
                                        <div class="list-product-item-img">
                                            <img src="Template/img/product/banphim/Bàn phím Corsair K70 RGB MK2 SE Rapid Fire (CH-9109114-NA).png" alt="">
                                        </div>
                                        <h2>Bàn phím Corsair K70 RGB MK2 SE Rapid Fire (CH-9109114-NA)</h2>
                                        <span>3.690.000 đ</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </aside> -->
</div>
</div>
</div>
</div>
</div>