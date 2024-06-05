<div id="content">
    <div class="container">
        <div class="site-content-inner">
            <div class="woocommerce">
                <div class="woocommerce-notices-wrapper" style="opacity: 0; display: none"></div>
                <h3 class="cart-title">Giỏ hàng <span>(1 sản phẩm )</span></h3>
                <form action="">
                    <div class="cart-items">
                        <!-- <div class="woocommerce-cart-form__cart-item cart_item">
                  <div class="product-thumbnail">
                    <a
                      href="https://beta.gearvn.com/laptop/laptop-gaming-acer-predator-helios-300-ph315-54-75yd"
                      ><img
                        src="https://gstatic.gearvn.com/2021/10/T6nBKQu0-gearvn-laptop-gaming-acer-predator-helios-300-ph315-54-75yd-1s-300x300.png"
                        class="attachment-woocommerce_thumbnail"
                    /></a>
                  </div>

                  <div class="product-name">
                    <a href="#"
                      >Laptop Gaming Acer Predator Helios 300 PH315 54 75YD</a
                    >
                    <span class="remove-product">
                      <a href="#" class="remove">Xóa</a>
                    </span>
                  </div>

                  <div class="product-quantity">
                    <div class="quantity">
                      <button type="button" id="btn-minus">-</button>
                      <input
                        type="number"
                        id="quantity"
                        class="input-text"
                        step="1"
                        min="0"
                        max="2"
                        value="1"
                        title="SL"
                      />
                      <button type="button" id="btn-plus">+</button>
                    </div>
                  </div>

                  <div class="product-price">
                    <span class="woocommerce-Price-amount amount" id="price"
                      >39,990,000</span
                    >
                  </div>
                </div> -->
                        <div class="cart-table table-responsive mb-30">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (is_array($listcart)) {
                                        $tongtiengiohang = 0;
                                        foreach ($listcart as $cart) {
                                            $tongtiengiohang += $cart['tongtien'];
                                            extract($cart);

                                    ?>
                                            <tr>

                                                <td class="pro-thumbnail"><a href="#"><img src="uploads/images/<?= $hinh ?>" alt="Product"></a></td>
                                                <td class="pro-title"><a href="#"><?= $ten ?></a></td>
                                                <td class="pro-price"><span class="gia"><?= number_format($gia_km, 0, ",", ".") ?>VNĐ</span></td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty"><input class="soluong" type="number" value="<?= $soluong ?>"></div>
                                                </td>
                                                <td class="pro-subtotal thanhtien"><span><?= number_format($tongtien, 0, ",", ".") ?> VNĐ</span></td>
                                                <td class="pro-remove"><a href="?mod=cart&act=delete&id=<?= $idsp ?>"><i class="fa-solid fa-trash-can"></i></a></td>
                                                <td><input type="hidden" class="idsp" value="<?= $idsp ?>"></input></td>


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
                            <input type="text" class="input-text" value="" placeholder="Mã khuyến mãi" />
                            <button type="submit" class="button" value="Áp dụng">
                                Áp dụng
                            </button>
                        </div>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <table cellspacing="0" class="shop_table">
                                    <tbody>

                                        <tr class="order-total">
                                            <th>Tổng</th>
                                            <td>
                                                <strong><span class="woocommerce-Price-amount total-price1" id="tongtien"><?= $tongtiengiohang ?>
                                                    </span></strong>VND
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="cart-btns">
                            <div class="wc-proceed-to-checkout">
                                <a href="?mod=thanhtoan&act=checkout&tongtien_gh=<?= $tongtiengiohang ?>" class="checkout-button button">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>