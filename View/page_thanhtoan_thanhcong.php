<main id="main" class="">
   <div class="checkout-page-title page-title">
      <div class="page-title-inner flex-row medium-flex-wrap container">
         <div class="flex-col flex-grow medium-text-center">
            <nav
               class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase">
               <a href="https://shophoa5.muathemewp.com/gio-hang/" class="hide-for-small">
                  Giỏ hàng </a>
               <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
               <a href="https://shophoa5.muathemewp.com/thanh-toan/" class="hide-for-small">
                  Thanh toán </a>
               <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
               <a href="#" class="no-click current">
                  Hoàn tất </a>
            </nav>
         </div>
      </div>
   </div>
   <div class="cart-container container page-wrapper page-checkout">
      <div class="woocommerce">
         <div class="row">
            <div class="large-7 col">

               <p>Trả tiền mặt khi giao hàng</p>
               <section class="woocommerce-order-details">

                  <h2 class="woocommerce-order-details__title">Chi tiết đơn hàng</h2>

                  <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                     <thead>
                        <tr>
                           <th class="woocommerce-table__product-name product-name">Sản phẩm</th>
                           <th class="woocommerce-table__product-table product-total">Tổng</th>
                        </tr>
                     </thead>
                     <tbody>

                        <?php foreach ($listAll_ctdh as $donhang) : extract($donhang);?>
                        <tr class="woocommerce-table__line-item order_item">
                           <td class="woocommerce-table__product-name product-name">
                              <a
                                 href="https://shophoa5.muathemewp.com/san-pham/je-taime/"><?php echo $ten_sp ?></a>
                              <strong
                                 class="product-quantity">×&nbsp;<?php echo $so_luong ?></strong>
                           </td>

                           <td class="woocommerce-table__product-total product-total">
                              <span class="woocommerce-Price-amount amount"><bdi><?php echo $gia * $so_luong ?>&nbsp;<span
                                       class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                           </td>
                        </tr>
                        <?php $tongtien += $gia * $so_luong ?>
                        <?php endforeach; ?>

                     </tbody>
                     <tfoot>
                        <tr>
                           <th scope="row">Tổng số phụ:</th>
                           <td><span class="woocommerce-Price-amount amount"><?php echo $tongtien ?><span
                                    class="woocommerce-Price-currencySymbol"> VND</span></span></td>
                        </tr>
                        <tr>
                           <th scope="row">Chi phí vận chuyển:</th>
                           <td><span class="woocommerce-Price-amount amount"><?php echo $ship ?><span
                                    class="woocommerce-Price-currencySymbol"> VND</span></span></td>
                        </tr>
                        <tr>
                           <th scope="row">Phương thức thanh toán:</th>
                           <td>Trả tiền mặt khi nhận hàng</td>
                        </tr>
                        <tr>
                           <th scope="row">Tổng cộng:</th>
                           <td><span class="woocommerce-Price-amount amount"><?php echo $tongtien - $ship ?>&nbsp;<span
                                    class="woocommerce-Price-currencySymbol">₫</span></span></td>
                        </tr>
                     </tfoot>
                  </table>
               </section>
               <section class="woocommerce-customer-details">
                  <h2 class="woocommerce-column__title">Địa chỉ thanh toán</h2>
                  <address>
                     <?php echo $listAll_ctdh[0]['ten_kh'] ?><br> <?php echo $listAll_ctdh[0]['diachi'] ?>
                     <p class="woocommerce-customer-details--phone"> <?php echo $listAll_ctdh[0]['sodienthoai'] ?></p>
                     <p class="woocommerce-customer-details--email"> <?php echo $listAll_ctdh[0]['email'] ?></p>
                  </address>
               </section>
            </div>
            <div class="large-5 col">
               <div class="is-well col-inner entry-content">
                  <p
                     class="success-color woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                     <strong>Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</strong>
                  </p>

                  <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                     <li class="woocommerce-order-overview__order order">
                        Mã đơn hàng: <strong> <?php echo $listAll_ctdh[0]['id_dh'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__date date">
                        Ngày: <strong> <?php echo $listAll_ctdh[0]['ngay_dat_hang'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__email email">
                        Email: <strong> <?php echo $listAll_ctdh[0]['email'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__total total">
                        Tổng cộng: <strong><span class="woocommerce-Price-amount amount"><bdi>
                                 <?php echo $tongtien ?>&nbsp;<span
                                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span></strong>
                     </li>
                     <li class="woocommerce-order-overview__payment-method method">
                        Phương thức thanh toán: <strong>Trả tiền mặt khi nhận hàng</strong>
                     </li>
                  </ul>
                  <div class="clear"></div>
               </div>
            </div>
         </div>
      </div>
   </div>


</main>