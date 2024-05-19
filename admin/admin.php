<?php
    include_once '../config.php';
    session_start();

    if(isset($_GET['mod'])){
        $home = $_GET['mod'];
        $path = '../admin/Controller/'.$home.'.php';
    }else{    
        $home = 'page';
        $path = '../admin/Controller/'.$home.'.php';
    }

    if(file_exists($path)){
       require_once $path;
        // echo 'đúng';
    }else{
        header('Location: admin.php?mod=page&&act=dashboard');
    }
?>