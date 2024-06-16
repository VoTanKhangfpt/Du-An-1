<?php
require_once '../Model/DAO/pdo.php';
require_once '../Model/DAO/category.php';
require_once '../Model/DAO/product.php';
// require_once '../Model/uploadFile.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            $category_list = getAll_category();
            $view_name = 'category_list';
            
            break;
        case 'add':
            if (isset($_POST['btn-submit'])) {
                $tendm = $_POST['tendm'];
                $anhien = $_POST['anhien'];

                $target_dir = '../uploads/images/';
                $file_name = $_FILES['img'];
                $target_file = $target_dir . basename($file_name["name"]);
                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                } else {
                    move_uploaded_file($file_name["tmp_name"], $target_file);
                }

                create_category($tendm, $anhien, $file_name['name']);

                header("location:index.php?mod=category&act=list");
            }
            $view_name = 'category_add';

            break;
        case 'edit':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $category_list = getById_category($id);
            }
            if (isset($_POST['btn-submit'])) {
                $id = $_POST['id'];
                $tendm = $_POST['tendm'];
                $anhien = $_POST['anhien'];
                $target_dir = '../uploads/images/';
                $file_name = $_FILES['img'];
                $target_file = $target_dir . basename($file_name["name"]);

                if (!file_exists($target_file)) {
                    move_uploaded_file($file_name["tmp_name"], $target_file);
                }

                update_category($tendm, $anhien, $file_name['name'], $id);
                header("location:index.php?mod=category&act=list");
            }
            $view_name = 'category_edit';

            break;
        case "delete":
            $thongbao = '';
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $bonho = get_product_danhmuc('','',$id,'');
                if (!empty($bonho)) {
                    $thongbao .= 'Vui xóa toàn bộ sản phẩm có liên quan đến danh mục trước khi xóa danh mục này';
                } else {
                    delete_category($id);
                }
            }
            $category_list = getAll_category();
            $view_name = 'category_list';


            break;
        default:
            // 404
            $view_name = 'admin_dashboard';
            break;
    }
    include 'View/admin_layout.php';
} else {
    header('Location: index.php?mod=category&act=list');
}
