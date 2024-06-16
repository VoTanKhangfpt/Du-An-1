<?php
require_once '../Model/DAO/pdo.php';
require_once '../Model/DAO/donhang.php';
require_once '../Model/DAO/ct_donhang.php';
// require_once '../Model/uploadFile.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            if (isset($_GET['currentPage']) && $_GET['currentPage'] > 0) {
                $currentPage = $_GET['currentPage'];
            } else {
                $currentPage = 1;
            }
            $Next = $currentPage + 1;
            $Prev = $currentPage - 1;
            $tongsotrang = count_sotrang('');
            $paginition = phan_trang($tongsotrang, $currentPage);
            $list_order = selectAll_order($currentPage, sosp_trentrang, '');
            $view_name = 'order_list';
            break;
        case 'detail':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $getAll_order_byID = getAll_ctdh($id);
            }
            $view_name = 'order_detail_list';
            break;
        case 'edit':
            if (isset($_POST['btn_edit'])) {
                $id = $_POST['idhd'];
                $status = $_POST['trangthai'];
                update_order($id, $status);
                // if($status == 'thành công'){
                //     $data = getOrderDetail($id);
                //     foreach ($data as $item) {
                //         updateProductQuantity($item['id_dh'], $item['soluong']);
                //     }
                // }


            }
            // $list_order = selectAll_order();
            // $view_name = 'order_list';
            header('Location: ?mod=order&act=list');
            break;
        case 'filter':
            if (isset($_POST['Filter_order'])) {
                $filter_order = $_POST['locdonhang'];
                if ($filter_order == 'chờ xử lý') {
                    if (isset($_GET['currentPage']) && $_GET['currentPage'] > 0) {
                        $currentPage = $_GET['currentPage'];
                    } else {
                        $currentPage = 1;
                    }
                    $Next = $currentPage + 1;
                    $Prev = $currentPage - 1;
                    $tongsotrang = count_sotrang($filter_order);
                    $paginition = phan_trang($tongsotrang, $currentPage);
                    $list_order = selectAll_order($currentPage, sosp_trentrang, $filter_order);
                } else if ($filter_order == 'đang giao') {
                    if (isset($_GET['currentPage']) && $_GET['currentPage'] > 0) {
                        $currentPage = $_GET['currentPage'];
                    } else {
                        $currentPage = 1;
                    }
                    $Next = $currentPage + 1;
                    $Prev = $currentPage - 1;
                    $tongsotrang = count_sotrang($filter_order);
                    $paginition = phan_trang($tongsotrang, $currentPage);
                    $list_order = selectAll_order($currentPage, sosp_trentrang, $filter_order);
                } else if ($filter_order == 'thành công') {
                    if (isset($_GET['currentPage']) && $_GET['currentPage'] > 0) {
                        $currentPage = $_GET['currentPage'];
                    } else {
                        $currentPage = 1;
                    }
                    $Next = $currentPage + 1;
                    $Prev = $currentPage - 1;
                    $tongsotrang = count_sotrang($filter_order);
                    $paginition = phan_trang($tongsotrang, $currentPage);
                    $list_order = selectAll_order($currentPage, sosp_trentrang, $filter_order);
                } else if ($filter_order == 'đã hủy') {
                    if (isset($_GET['currentPage']) && $_GET['currentPage'] > 0) {
                        $currentPage = $_GET['currentPage'];
                    } else {
                        $currentPage = 1;
                    }
                    $Next = $currentPage + 1;
                    $Prev = $currentPage - 1;
                    $tongsotrang = count_sotrang($filter_order);
                    $paginition = phan_trang($tongsotrang, $currentPage);
                    $list_order = selectAll_order($currentPage, sosp_trentrang, $filter_order);
                }else{
                    header('Location: ?mod=order&act=list');
                }
                $view_name = 'order_list';
            }
            break;
        default:
            $view_name = 'order_list';
            break;
    }
    include 'View/admin_layout.php';
} else {
    header('Location: index.php?mod=order&act=list');
}
