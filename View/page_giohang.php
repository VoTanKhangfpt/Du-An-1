<div id="content">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper" style="opacity: 0; display: none"></div>
                <h3 class="cart-title">Giỏ hàng <span>(1 sản phẩm )</span></h3>
                <form action="">
                    <div class="cart-items">

                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Hình ảnh</th>
                                        <th class="pro-title">Tên sản phẩm</th>
                                        <th class="pro-price">Giá</th>
                                        <th class="pro-quantity">Số lượng</th>
                                        <th class="pro-subtotal">Tổng cộng</th>
                                        <th class="pro-remove">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (is_array($listcart)) {
                                        
                                        foreach ($listcart as $cart) {
                                            extract($cart);
                                            $tongtiengiohang += $gia*$soluong

                                    ?>
                                            <tr>

                                                <td class="pro-thumbnail"><a href="#"><img src="uploads/images/<?= $hinh ?>" alt="Product"></a></td>
                                                <td class="pro-title"><a href="#"><?= $ten ?></a></td>
                                                <td class="pro-price"><span class="gia"><?= number_format($gia, 0, ",", ".") ?>VNĐ</span></td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty"><input min="1" class="soluong" type="number" value="<?= $soluong ?>"></div>
                                                </td>
                                                <td class="pro-subtotal thanhtien"><span><?= number_format($tongtien, 0, ",", ".") ?> VNĐ</span></td>
                                                <td class="pro-remove"><a class="remove-itemCart"><i class="fa-solid fa-trash-can"></i></a></td>
                                                <input type="hidden" class="idsp" value="<?= $idsp ?>"></input>


                                            </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <td colspan="4" class="text-right">
                                            <h4 style="line-height: 45px;">Tổng:</h4>
                                        </td>
                                        <td class="text-center">
                                            <h4 style="line-height: 45px;">$200.000</h4>
                                        </td>
                                        <td class="text-center">
                                            <div class="cart-summary-button">
                                                <a style="color: #fff;" class="btn" href="checkout.html">Checkout</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    </div>

                    <div class="cart-info">
                        <div class="coupon">
                            <label for="coupon_code">Mã khuyến mãi</label>
                            <input disabled type="text" class="input-text" value="" placeholder="Mã khuyến mãi" />
                            <button type="submit" class="button" value="Áp dụng">
                                Áp dụng
                            </button>
                        </div>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <table cellspacing="0" class="shop_table">
                                    <tbody>

                                        <tr class="order-total">
                                            <th>Thành tiền:</th>
                                            <td>
                                                <strong><span class="woocommerce-Price-amount total-price1" id="tongtien"><?=number_format($tongtiengiohang, 0, ",", ".")  ?>
                                                    </span></strong>VNĐ
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="cart-btns">
                            <div class="wc-proceed-to-checkout">
                                <a id="tongtien_gh" href="?mod=thanhtoan&act=checkout&tongtien=<?=$tongtiengiohang?>" class="checkout-button button">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

