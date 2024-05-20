<?php 
    require_once '../Model/DAO/pdo.php';
    require_once '../Model/DAO/category.php';
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'list':
                $category_list = getAll_category();
                $view_name = 'category_list';
                
                break;
            
            default:
            // 404
                $view_name = 'admin_dashboard';
                break;
        }
        include 'View/admin_layout.php';
    }
    else{
        header('Location: index.php?mod=category&&act=list');
    }

    
?>