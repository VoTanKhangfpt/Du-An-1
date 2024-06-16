<?php

include_once '../config.php';
session_start();
if (!empty($_SESSION['user'])) {
    if ($_SESSION['user']['quyen'] == 1) {
        $page = isset($_GET['mod']) ? $_GET['mod'] : 'dashboard';
        $path = '../admin/Controller/' . $page . '.php';
        if (file_exists($path)) {
            require_once $path;
        } else {
            header("location:?mod=page&act=dashboard");
        }
    }else{
        echo "Bạn không phải Admin để vào trang quản lí";
    }
} else {
    header("location: ../?mod=user&act=dangnhap");
}
