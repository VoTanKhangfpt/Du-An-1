<?php
ob_start();
require_once "../model/db.php";
// can thay doi trong model
require_once "../model/products.php";
require_once "../model/user.php";
require_once "header.php";

if ( isset( $_GET['page'] ) && ( $_GET['page'] !== "" ) ) {
    $page = $_GET['page'];
    switch ( $page ) {

    case 'add':
        require_once "add.php";
        break;
    case 'them':
        if ( isset( $_POST['sub'] ) && ( $_POST['sub'] ) ) {
            $ten = $_POST['namesp'];
            $gia = $_POST['price'];
            $soluong = $_POST['quan'];
            $hinh = $_FILES['arquivo']['name'];
            $file = "../upload/img/product/" . $hinh;
            $uploadOk = 1;
            $imageFileType = strtolower( pathinfo( $file, PATHINFO_EXTENSION ) );
            if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            move_uploaded_file( $_FILES['arquivo']['tmp_name'], $file );
            addsp( $ten, $gia, $soluong, $hinh );
        }
        require_once "add.php";

        break;
    case 'del':
        if ( isset( $_GET['id'] ) && ( $_GET['id'] > 0 ) ) {
            $id = $_GET['id'];
            del( $id );
        }
        require_once "home.php";
        break;
    case 'logout':
        unset( $_SESSION['user'] );
        header( 'location: ../view/index.php' );

        break;
    case 'update':
        if ( isset( $_POST['fix'] ) && $_POST['fix'] ) {
            $udtid = $_POST['id'];
            $udthinh = $_FILES['updatearquivo']['name'];
            $udtten = $_POST['updatename'];
            $udtpri = $_POST['updateprice'];
            $udtquan = $_POST['updatequan'];
            // if ( $udthinh == "" ) {
            //     $udthinh = $fh_imgsp;
            // }
            $file = "../upload/" . $udthinh;
            move_uploaded_file( $_FILES['updatearquivo']['tmp_name'], $file );
            updatesp( $udtid, $udthinh, $udtten, $udtpri, $udtquan );
        }
        require_once "update.php";
        break;

    default:
        require_once "home.php";

        # code...
        break;
    }
} else {
    require_once "home.php";
}