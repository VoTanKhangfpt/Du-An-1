<div class="checkout-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row"><h2 class="my-5" style="text-align:center; font-weight:bold;">THANH TOÁN</h2></div>
        <div class="row">
            <div class="col-12">

                <!-- Checkout Form Start-->
                <form action="#" class="checkout-form">
                    <div class="row row-40">

                        <div class="col-lg-7">

                            <!-- Billing Address -->
                            <div id="billing-form" class="mb-10">
                                <h4 class="checkout-title">Thông tin thanh toán</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Họ và tên</label>
                                        <input type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 col-12 mb-5">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Số điện thoại">
                                    </div>
                                    <div class="col-12 mb-5">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="col-12 mb-5">
                                        <div class="check-box">
                                            <input type="checkbox" id="shiping_address" data-shipping>
                                            <label for="shiping_address">Giao hàng đến địa chỉ khác</label>
                                        </div>
                                    </div>

                                </div>
                                <!-- Shipping Address -->
                                <div id="shipping-form">
                                    <h4 class="checkout-title">Shipping Address</h4>

                                    <div class="row">

                                        <div class="col-md-12 col-12 mb-5">
                                            <label>Họ và tên*</label>
                                            <input type="text" placeholder="Họ và tên">
                                        </div>
                                        <div class="col-md-12 col-12 mb-5">
                                            <label>Email Address*</label>
                                            <input type="email" placeholder="Email">
                                        </div>
                                        <div class="col-md-12 col-12 mb-5">
                                            <label>Phone no*</label>
                                            <input type="text" placeholder="Số điện thoại">
                                        </div>
                                        <div class="col-12 mb-5">
                                            <label>Address*</label>
                                            <input type="text" placeholder="Nhập địa chỉ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shipping Address -->

                        </div>

                        <div class="col-lg-5">
                            <div class="row">

                                <!-- Cart Total -->
                                <div class="col-12 mb-60">

                                    <h4 class="checkout-title">Đơn hàng của bạn</h4>

                                    <div class="checkout-cart-total">

                                        <h4>Sản phẩm <span>Tổng cộng</span></h4>

                                        <ul>
                                            <li>Teritory Quentily X 01 <span>$35.00</span></li>
                                            <li>Adurite Silocone X 02 <span>$59.00</span></li>
                                            <li>Baizidale Momone X 01 <span>$78.00</span></li>
                                            <li>Makorone Cicile X 01 <span>$65.00</span></li>
                                        </ul>

                                        <p>Tổng phụ <span>$296.00</span></p>
                                        <p>Phí vận chuyển <span>$00.00</span></p>

                                        <h4>Tổng tiền thanh toán <span>$296.00</span></h4>

                                    </div>

                                </div>

                                <!-- Payment Method -->
                                <div class="col-12 mb-30">

                                    <h4 class="checkout-title mt-5">Phương thức thanh toán</h4>

                                    <div class="checkout-payment-method">

                                        
                                        <div class="single-method">
                                            <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                            <label for="payment_paypal">Chuyển khoản MOMO </label>
                                            
                                            
                                        </div>
                                        <p style="color:#fff";>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>

                                        <div class="single-method">
                                            <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                            <label for="payment_payoneer">Thanh toán khi nhận hàng</label>
                                            
                                        </div>

                                        

                                    </div>

                                    <button class="place-order btn btn-lg btn-round btn-danger">Place order</button>

                                </div>



                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


























<!-- <div class="row">
   
    <div id="order-info-left" class="col-lg-7 bg-white p-4 mb-3">
        <h4 class="font-weight-bold mb-3">Thanh toán</h4>
        <form class="form-billing">
            <div class="form-group">
                <label for="name">Họ và tên</label>
                <input type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Số nhà ngõ đường</label>
                <input type="text" id="address" class="form-control" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">Tỉnh thành</label>
                    <select id="city" class="form-control selectpicker" data-live-search="true" required>
                        <option value="">-- Tỉnh thành --</option>
                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="district">Quận huyện</label>
                    <select id="district" class="form-control selectpicker" data-live-search="true" required>
                        <option value="">-- Quận huyện --</option>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="ward">Phường xã</label>
                <select id="ward" class="form-control selectpicker" data-live-search="true" required>
                    <option value="">-- Phường xã --</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="note">Ghi chú</label>
                <textarea id="note" class="form-control" rows="2"></textarea>
            </div>
        </form>
    </div>

    <div id="order-info-right" class="col-lg-5 bg-white p-4 mb-3">
        <h4 class="font-weight-bold mb-3">Sản phẩm</h4>
        <div class="order-review">
            <div class="entry-order-review mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="product-info d-flex align-items-center">
                        <img src="./upload/img/sanphamchitiet/spct.png" alt="Product Image" class="mr-2" style="max-width: 200px;">
                        <div>
                            <div class="product-name">Giá</div>
                            <div class="product-price">39,990,000 VND</div>
                        </div>
                    </div>
                    <div>1</div>
                </div>
            </div>

            <div class="entry-order-review mb-3">
                <div class="d-flex justify-content-between">
                    <div>Shipping</div>
                    <div>5,000 VND</div>
                </div>
            </div>
            <div class="checkout-payment text-center">
                <button class="btn btn-submit w-100 mb-3">Thanh toán</button>
                <a href="/cart" class="order-back text-decoration-none"><i class="fa fa-arrow-left mr-2"></i>Quay lại giỏ hàng</a>
            </div>
        </div>
    </div>
</div> -->