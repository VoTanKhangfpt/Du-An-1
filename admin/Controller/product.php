<?php
require_once '../Model/DAO/pdo.php';
require_once '../Model/DAO/product.php';
require_once '../Model/DAO/category.php';
require_once '../Model/DAO/nhasx.php';

// require_once '../Model/uploadFile.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            $product_list = getAll_product_dm_nhasx();
            $view_name = 'product_list';

            break;
        case 'add':
            $category_list = getAll_category();
            $nhaxs_list = getAll_nhasx();
            if (isset($_POST['btn-submit'])) {
                $ten = $_POST['ten'];
                $gia = $_POST['gia'];
                $gia_km = $_POST['gia_km'];
                $hot = $_POST['hot'];
                $mota = $_POST['mota'];
                $anhien = $_POST['an_hien'];
                $iddm = $_POST['iddm'];
                $id_nhasx = $_POST['id_nhasx'];
                $can_nang = $_POST['can_nang'];
                $mau_sac = $_POST['mau_sac'];
                $target_dir = '../uploads/images/';
                $file_name = $_FILES['hinh'];
                $target_file = $target_dir . basename($file_name["name"]);
                if (!file_exists($target_file)) {
                    move_uploaded_file($file_name["tmp_name"], $target_file);
                }

                create_product($ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $can_nang, $mau_sac, $file_name['name']);
                header("location:index.php?mod=product&act=list");
            }
            $view_name = 'product_add';

            break;
        case 'edit':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $product_list = getById_product($id);
                $category_list = getAll_category();
                $nhaxs_list = getAll_nhasx();

                if (isset($_POST['btn-submit'])) {

                    $ten = $_POST['ten'];
                    $gia = $_POST['gia'];
                    $gia_km = $_POST['gia_km'];
                    $hot = $_POST['hot'];
                    $mota = $_POST['mota'];
                    $anhien = $_POST['an_hien'];
                    $iddm = $_POST['iddm'];
                    $id_nhasx = $_POST['id_nhasx'];
                    $can_nang = $_POST['can_nang'];
                    $mau_sac = $_POST['mau_sac'];
                    $target_dir = '../uploads/images/';
                    $file_name = $_FILES['hinh'];
                    $target_file = $target_dir . basename($file_name["name"]);

                    if (!file_exists($target_file)) {
                        move_uploaded_file($file_name["tmp_name"], $target_file);
                    }

                    update_product($id, $ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $can_nang, $mau_sac, $file_name["name"]);
                    header("location:index.php?mod=product&act=list");
                }
                
            }
            $view_name = 'product_edit';


            break;
        case "delete":
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                delete_product($id);
                header("location:index.php?mod=product&act=list");
            }
            break;
        default:
            // 404
            $view_name = 'admin_dashboard';
            break;
    }
    include 'View/admin_layout.php';
} else {
    header('Location: index.php?mod=product&act=list');
}
