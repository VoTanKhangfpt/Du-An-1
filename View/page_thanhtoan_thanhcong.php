<main id="main" class="">
   <div class="checkout-page-title page-title">
      <div class="page-title-inner flex-row medium-flex-wrap container">
         <div class="flex-col flex-grow medium-text-center">
            <nav class="breadcrumbs flex-row flex-row-center heading-font checkout-breadcrumbs text-center strong h2 uppercase">
               <h2><?php echo $listdetail_dh['trang_thai'] ?></h2>
               <!-- <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
               <a href="https://shophoa5.muathemewp.com/thanh-toan/" class="hide-for-small">
                  Thanh toán </a>
               <span class="divider hide-for-small"><i class="icon-angle-right"></i></span>
               <a href="#" class="no-click current">
                  Hoàn tất </a> -->
            </nav>
         </div>
      </div>
   </div>
   <div class="cart-container container page-wrapper page-checkout">
      <div class="woocommerce">
         <div class="row">
            <div class="large-7 col">

               <!-- <p>Trả tiền mặt khi giao hàng</p> -->
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

                        <?php
                        if (!empty($listAll_ctdh)) :
                           foreach ($listAll_ctdh as $donhang) : extract($donhang); ?>
                              <tr class="woocommerce-table__line-item order_item">
                                 <td align="right" class="woocommerce-table__product-name product-name">
                                    Tên sản phẩm : <?php echo $ten_sp ?>
                                    <strong class="product-quantity">Số lượng: &nbsp;<?php echo $so_luong ?></strong>
                                 </td>

                                 <td align="right"  class="woocommerce-table__product-total product-total">
                                    <span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($gia * $so_luong,0,",",".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">VNĐ</span></bdi></span>
                                 </td>
                              </tr>
                              <?php $tongphu += $gia * $so_luong ?>
                        <?php endforeach;
                        endif; ?>

                     </tbody>
                     <tfoot>
                        
                        <tr>
                           <th scope="row">Tổng số phụ:</th>
                           <td align="right"><span class="woocommerce-Price-amount amount"><?php echo number_format($tongphu,0,",",".") ?><span class="woocommerce-Price-currencySymbol"> VNĐ</span></span></td>
                        </tr>
                        <tr>
                           <th scope="row">Chi phí vận chuyển:</th>
                           <td align="right"><span class="woocommerce-Price-amount amount"><?php echo number_format($ship,0,",",".") ?><span class="woocommerce-Price-currencySymbol"> VNĐ</span></span></td>
                        </tr>

                        <tr>
                           <th scope="row">Tổng cộng:</th>
                           <td align="right"><span class="woocommerce-Price-amount amount"><?php echo number_format($tongphu-$ship,0,",",".") ?>&nbsp;<span class="woocommerce-Price-currencySymbol">VNĐ</span></span></td>
                        </tr>
                     </tfoot>
                  </table>
               </section>
               <!-- <section class="woocommerce-customer-details">
                  <h2 class="woocommerce-column__title">Địa chỉ thanh toán</h2>
                  <address>
                     
                     <p class="woocommerce-customer-details--phone"> <?php echo $listdetail_dh['diachi'] ?></p>
                     
                  </address>
               </section> -->
            </div>
            <div class="large-5 col">
               <div class="is-well col-inner entry-content">
                  <p class="success-color woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                     <strong>Cảm ơn bạn. Đơn hàng của bạn đang chờ được xử lý.</strong>
                  </p>

                  <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                     <li class="woocommerce-order-overview__order order">
                        Mã đơn hàng: <strong> <?php echo $listdetail_dh['id'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__order order">
                        Ghi chú: <strong> <?php echo $listdetail_dh['ghichu'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__date date">
                        Ngày: <strong> <?php echo $listdetail_dh['thoi_diem_mua'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__email email">
                        Email: <strong> <?php echo $listdetail_dh['email'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__email email">
                        Số điện thoại: <strong> <?php echo $listdetail_dh['sodienthoai'] ?></strong>
                     </li>
                     <li class="woocommerce-order-overview__total total">
                        Địa chỉ thanh toán: <strong><span class="woocommerce-Price-amount amount"><bdi>
                                 <?php echo $listdetail_dh['diachi'] ?>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></strong>
                     </li>
                     <li class="woocommerce-order-overview__payment-method method">
                        Phương thức thanh toán: <strong><?php echo $listdetail_dh['pttt'] ?></strong>
                     </li>
                  </ul>
                  <div class="clear"><a href="?mod=page&act=home" class="btn btn-primary">Quay trở lại Trang chủ</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>


</main>