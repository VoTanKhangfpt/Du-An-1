<?php
require_once '../Model/DAO/pdo.php';
require_once '../Model/DAO/binhluan.php';

// require_once '../Model/DAO/category.php';
require_once '../Model/DAO/product.php';
// require_once '../Model/uploadFile.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            $commnetProduct = binhluan_product();
            $view_name = 'product_comment_list';
            break;
        case 'detail':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $comment_list = comment_select_ByIdSP($id);
                $product_list = getById_product($id);
            }
            $view_name = 'comment_detail';
            break;  
        case 'edit':
           
                $catId = $_POST['catId'];
                $data = comment_selectById($catId);       
                $status = $data['trangthai'];
                
                if($status == 1){
                    $status = 0;
                }else{
                    $status = 1;
                }
                
                update_comment($catId, $status);
                    // header("location:admin.php?mod=comment&act=detail&id=$id");
                
            
            



            

            break;
        case "delete":
            if(isset($_GET['id']) && isset($_GET['idsp'])){
                $idbl = $_GET['id'];
                $idsp = $_GET['idsp'];
                comment_delete($idbl);
            }            
            header('Location: index.php?mod=comment&act=detail&id='.$idsp );
            break;
        default:
            // 404
            $view_name = 'comment_list';
            break;
    }
    include 'View/admin_layout.php';
} else {
    header('Location: index.php?mod=comment&act=list');
}
