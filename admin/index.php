<?php
    
    include_once '../config.php';
    session_start();

    
    $page = isset($_GET['mod']) ? $_GET['mod'] : 'page';
    $path = '../admin/Controller/'. $page.'.php';

    if(file_exists($path)){
       require_once $path;    
    } else {
        header('Location: index.php?mod=page&act=dashboard');
    }
?>
