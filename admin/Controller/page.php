<?php 
   
    if(isset($_GET['act']) && $_GET['act']=='dashboard') {
        $view_name = 'admin_'.$_GET['act'];
    }else{
        //Ông sẽ viết code xử lí dashboards ở đây;
            
        // 
        $view_name = 'admin_dashboard';
    } 
    require_once 'View/admin_layout.php';
?>