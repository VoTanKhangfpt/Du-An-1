<?php

include_once 'Model/DAO/product.php';
// include_once 'Model/DAO/binhluan.php';
include_once 'Model/DAO/category.php';
include_once 'Model/DAO/giohang.php';
include_once 'Model/DAO/binhluan.php';

//include_once 'Model/pdo.php';
//include_once 'Model/cart.php';
if ($_GET['act']) {
    switch ($_GET['act']) {
        case 'home':
            if (isset($_POST['search_name'])) {
                $kwt = $_POST['search_name'];
                $kq = searchProduct($kwt);
                // print_r($kq);
                $code_HTML = '';
                if (!empty($kq)) {
                    foreach ($kq as $item) {
                        extract($item);
                        $code_HTML .= '
                    <li class="list-group">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="uploads/images/' . $hinh . '" alt="" style="width: 25%; padding-right: 0;">
                                    </div>
                                    <div class="col-8" style="padding: 20px 0 0 0;">
                                        <div class="name-product">
                                            <a href="?mod=page&act=detail&id=' . $id . '">' . $ten . '</a>
                                        </div>
                                        <div class="price">
                                            <a href="">' . $gia . '</a>
                                        </div>

                                    </div>
                                </div>
                            </li>
                
                   ';
                    }
                } else {
                    $code_HTML .= '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Không tìm thấy sản phẩm tìm kiếm.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                echo  $code_HTML;
                exit();
            }
            $getAllProduct = getAllProduct(8);
            $getHotProduct = getProduct_hot(8);
            $viewName = 'page_home';


            break;
        case 'detail':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $item = getById_product($id);
            $random = getRandom_product($id, $item['iddm'], 4);
            $viewName = 'page_detail';
            $dsbl = comment_select_ByIdSP($id);

            break;
        case 'product':
            if (isset($_GET['id'])) {
                $iddm = $_GET['id'];
                $ProLength = 4;
                $startRow = 0;
                $currentPage = 1;
                $offset = 3;
                if (isset($_GET['currentPage'])) $currentPage = $_GET['currentPage'];
                $kq2 = (int)count_product_danhmuc($iddm, "");
                if (isset($kq2)) {
                    $tongSoTrang = ceil($kq2 / $ProLength);
                }
                $from = $currentPage - $offset;
                if ($from < 1) $from = 1;
                $to = $currentPage + $offset;
                if ($to > $tongSoTrang) $to = $tongSoTrang;
                $Prev = $currentPage - 1;
                $Next = $currentPage + 1;
                $startRow = ($currentPage - 1) * $ProLength;
                $pro_category = get_product_danhmuc($startRow, $ProLength, $iddm, "");
            }

            $viewName = 'page_product_category';
            break;
        case 'comment':
            if (!empty($_SESSION['user'])) {
                if (isset($_POST['guibinhluan'])) {
                    $idpro = $_POST['idpro'];
                    $noidung = $_POST['noidung'];
                    $iduser = $_SESSION['user']['id'];
                    binhluan_insert($iduser, $idpro, $noidung);
                }
                header('Location: ?mod=page&act=detail&id=' . $idpro . '#comment');
            }

            break;

        case 'search':
            if (isset($_POST['btn_timkiem'])) {
                $ktw = $_POST['timkiem'];
                $pro_category = get_product_danhmuc("", "", "", $ktw);
            }
            $viewName = 'page_product_category';
            break;
        default:
            $viewName = '404';
            break;
    }
    $category_list = getAll_category();
    if (!empty($_SESSION['user'])) {
        $sum_orders = getSum_orders($_SESSION['user']['id']);
        if (empty($sum_orders)) {
            $sum_orders = 0;
        }
    }

    include_once 'View/page_layout.php';
}
