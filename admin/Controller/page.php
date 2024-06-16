<?php
require_once '../Model/DAO/dashboard.php';
// require_once '../Model/uploadFile.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'dashboard':
           
            $countProduct = count_products();
            $countUser = count_users();
            $countCategory = count_categories();
            $sumTotalOrders = sum_orders('thành công');
            $getAll_Cate_byProduct = category_statByProduct();
            $tkThangNam = statSales_byMonth();          
            $view_name = 'admin_dashboard';
            break;
        default:
            $view_name = '404';
            break;
    }   
} else {
    $view_name = 'admin_dashboard';
}
include 'View/admin_layout.php';

