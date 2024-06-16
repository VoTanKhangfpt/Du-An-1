<div id="content">
    <div class="container">
        <div class="slider">
            <!-- <img src="img/loaisanpham/poster/93df218e-2327-4bbc-884a-9954fe085615._CR0,0,1464,600_PT0_SX1464__.jpg"
                                alt=""> -->
        </div>

        <div class="site-content-inner">
            <div id="sidebar">
                <form action="" method="post">
                    <div class="menu-list">
                        <aside id="gearvn_layered_nav-2">
                            <h3 class="widget-title">thương hiệu</h3>
                            <ul class="gearvn-col-2">
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    <img src="https://gstatic.gearvn.com/2021/08/resize-04.png" alt="">
                                </li>

                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    <img src="https://gstatic.gearvn.com/2021/08/resize-01.png" alt="">
                                </li>
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    <img src="https://gstatic.gearvn.com/2021/08/resize-91.png" alt="">
                                </li>
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    <img src="https://gstatic.gearvn.com/2021/08/resize-48.png" alt="">
                                </li>

                            </ul>
                        </aside>

                        <aside id="gearvn_layered_nav-2">
                            <h3 class="widget-title">giá bán</h3>
                            <ul class="gearvn-col-2">
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Trên 40 triệu
                                </li>

                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Từ 12 - 18 triệu
                                </li>
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Từ 18 - 25 triệu
                                </li>
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Từ 25 - 40 triệu
                                </li>

                            </ul>
                        </aside>

                        <aside id="gearvn_layered_nav-2">
                            <h3 class="widget-title">Màu sắc</h3>
                            <ul class="gearvn-col-2">
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Xám
                                </li>

                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Đen
                                </li>

                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Trắng
                                </li>
                                <li class="woocommerce-widget-layered-nav-list__item">
                                    <input type="checkbox">
                                    Xám
                                </li>
                            </ul>
                        </aside>

                        <button type="submit" class="btn btn-info">Lọc sản phẩm</button>



                        <!-- <aside id="gearvn_layered_nav-2">
                                        <h3 class="widget-title">vga</h3>
                                        <ul class="gearvn-col-2">
                                            <li class="woocommerce-widget-layered-nav-list__item">
                                                <form action=""><input type="checkbox"></form>
                                                GTX 1650
                                            </li>

                                            <li class="woocommerce-widget-layered-nav-list__item">
                                                <form action=""><input type="checkbox"></form>
                                                RTX 3050 Ti
                                            </li>

                                            <li class="woocommerce-widget-layered-nav-list__item">
                                                <form action=""><input type="checkbox"></form>
                                                RTX 3060
                                            </li>

                                            <li class="woocommerce-widget-layered-nav-list__item">
                                                <form action=""><input type="checkbox"></form>
                                                RTX 3070
                                            </li>
                                        </ul>
                                    </aside> -->
                    </div>
                </form>

            </div>


            <div id="primary80">
                <div id="main">
                    <aside class="widget_gearvn_list_product bg-white border-radius-8">
                        <div class="list-product">
                            <div class="woocommerce-ordering">
                                <div class="input-radio">
                                    <span class="label-sort">Sắp xếp theo:</span>
                                    <label class="input-orderby-popularity"><a href="">Bán chạy</a></label>
                                    <label class="input-orderby-popularity"><a href="">Giá thấp đến cao</a></label>
                                    <label class="input-orderby-popularity"><a href="">Giá cao đến thấp</a></label>
                                </div>
                            </div>

                            <div class="list-product-body bg-white">
                                <?php if (isset($pro_category)) {
                                    foreach ($pro_category as  $pro) {
                                        extract($pro);
                                ?>


                                        <a href="?mod=page&act=detail&id=<?= $id ?>" style="border: 1px solid #ededed;">
                                            <div class="list-product-item">
                                                <div class="list-product-item-img">
                                                    <img src="uploads/images/<?= $hinh ?>" alt="">
                                                </div>
                                                <h2><?=$ten?></h2>
                                                <span><?= number_format($gia, 0, ",", ".") ?> VNĐ</span>
                                            </div>
                                        </a>

                                <?php }
                                } ?>
                            </div>
                        </div>

                    </aside>

                </div>
                <?php if(isset($currentPage)){?>
                <div class="footer_nav">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <!-- <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;&laquo;</span>
                                    </a>
                                </li> -->
                            <?php if ($currentPage > 1) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="?mod=page&act=product&id=<?= $iddm ?>&currentPage=<?= $Prev ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php } ?>


                            <?php for ($i = $from; $i <= $to; $i++) { ?>
                                <?php if ($i == $currentPage) { ?>
                                    <li class="page-item"><a class="btn btn-primary" class="page-link" href="?mod=page&act=product&id=<?= $iddm ?>&currentPage=<?= $i ?>"><?= $i ?></a></li>
                                <?php } else { ?>
                                    <li class="page-item"><a class="page-link" href="?mod=page&act=product&id=<?= $iddm ?>&currentPage=<?= $i ?>"><?= $i ?></a></li>
                                <?php } ?>
                            <?php } ?>

                            <?php if ($currentPage < $tongSoTrang) { ?>
                                <li class="page-item">
                                    <a class="page-link" href="?mod=page&act=product&id=<?= $iddm ?>&currentPage=<?= $Next ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <!-- <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;&raquo;</span>
                                    </a>
                                </li> -->
                        </ul>
                    </nav>
                </div>
                <?php }?>

            </div>


        </div>
    </div>
</div>