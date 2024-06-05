<?php
require_once 'pdo.php';
    function create_order($id_tk, $thoi_diem_mua, $tongtien){
        $sql = "INSERT INTO don_hang(id_user, thoi_diem_mua, tongtien) VALUES (?,?,?)";
        pdo_execute($sql,$id_tk,$thoi_diem_mua,$tongtien);
    }

    function getID_order_current()
    {
        $sql = "SELECT MAX(id) AS id_donhang FROM don_hang";
       return pdo_query_one($sql);
    }


    function insert_order_detail($ten_kh, $ten_sp, $soluong, $gia_km, $ngay_dat_hang, $diachi,  $sodienthoai, $email, $ghichu, $id_dh, $id_sp){
        $sql = "INSERT INTO don_hang_chi_tiet(ten_kh, ten_sp, so_luong, gia, ngay_dat_hang, diachi, sodienthoai, email, ghichu, id_dh, id_sp) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        pdo_execute($sql, $ten_kh, $ten_sp, $soluong, $gia_km, $ngay_dat_hang, $diachi,  $sodienthoai, $email, $ghichu, $id_dh, $id_sp);
    }
?>