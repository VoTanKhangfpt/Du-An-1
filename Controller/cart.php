<?php

// include_once 'Model/connect.php';
// include_once 'Model/pdo.php';
// include_once 'Model/product.php';
include_once 'Model/DAO/giohang.php';
include_once 'Model/DAO/category.php';
// include_once 'Model/user.php';
if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'show':
            // if (isset($_SESSION['cart'])) {
            //     $list_buy = get_list_buy_cart();
            // }
            if (isset($_SESSION['user'])) {
                $id_tk = $_SESSION['user']['id'];
                $listcart = showcart($id_tk);
                $tongtiengiohang = 0;    
                $viewName = 'page_giohang';
            } else {
                $_SESSION['thongbao'] = 'Vui lòng đăng nhập để vào giỏ hàng!';
                header("location:index.php?mod=user&act=dangnhap");
            }
           
            


            break;
        case 'add':
            if (isset($_SESSION['user'])) {
                if (isset($_POST['btn-submit'])) {
                    $idsp = $_POST['idsp'];
                    $price = $_POST['price'];
                    $quantity = 1;
                    $checkcart = checkcart_product($idsp, $_SESSION['user']['id']);

                    if (empty($checkcart)) {
                        addtocart($_SESSION['user']['id'], $idsp, $price, $quantity);
                        header("location:?mod=page&act=detail&id=" . $idsp);
                    } else {
                        $id_sp = $checkcart['id_sp'];
                        if ($id_sp == $idsp) {
                            $soluong = $checkcart['soluong'] +  $quantity;
                            $tongtien = $price * $soluong;
                            // tiến hành update soluong của gio hàng có id_hoa 
                            update($soluong, $tongtien, $idsp);
                            header("location:?mod=page&act=detail&id=" . $idsp);
                        } else {
                            addtocart($_SESSION['user']['id'], $idsp, $price, $quantity);
                            header("location:?mod=page&act=detail&id=" . $idsp);
                        }
                    }
                }
            } else {
                $_SESSION['thongbao'] = 'Vui lòng đăng nhập để mua hàng!';
                header("location:index.php?mod=user&act=dangnhap");
            }
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_cart($id);
            }

            break;

        case 'update':
            if (isset($_POST['soluong'])) {
                $idsp = $_POST['id'];
                $soluong = $_POST['soluong'];
                $tongtien = $_POST['tongtien'];
                update($soluong, $tongtien, $idsp);
                
                
            }
            // if (isset($_POST['btn_update_cart'])) {
            //     // print_r($_POST['qty']);
            //     // return;
            //     update_cart($_POST['qty']);

            // }
            break;


        default:
            $viewName = '404';
            break;
    }
    // $category_list = getAll_category();
    if(!empty($_SESSION['user'])){
        $sum_orders = getSum_orders($_SESSION['user']['id']);
        if(empty($sum_orders)){
            $sum_orders = 0;
        }
    }
    include_once 'View/page_layout.php';
}
