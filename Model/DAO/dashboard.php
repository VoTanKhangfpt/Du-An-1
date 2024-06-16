<?php 
require_once 'pdo.php';

function count_products(){
    $sql = "SELECT count(*) FROM san_pham WHERE 1";
    return pdo_query_countItem($sql);
}
function count_users(){
    $sql = "SELECT count(*) FROM taikhoan WHERE quyen=0";
    return pdo_query_countItem($sql);
}
function count_categories(){
    $sql = "SELECT count(*) FROM danhmuc WHERE 1";
    return pdo_query_countItem($sql);
}

function sum_orders($status){
    $sql = "SELECT sum(tongtien) FROM don_hang WHERE trang_thai = ?;";
    return pdo_query_countItem($sql, $status);
}

function category_statByProduct(){
    $sql = "SELECT dm.id, dm.tendm as TenCD, COUNT(sp.id) as SoLuong, AVG(sp.gia_km) as TrungBinh, MAX(sp.gia_km) as CaoNhat, MIN(sp.gia_km) as ThapNhat FROM danhmuc dm LEFT JOIN san_pham sp ON dm.id = sp.iddm GROUP BY dm.id, dm.tendm";
    return pdo_query($sql);
}


function statSales_byMonth(){
    $sql = "SELECT MONTH(dh.thoi_diem_mua) as Thang, YEAR(dh.thoi_diem_mua) as Nam, COUNT(DISTINCT dh.id_user) as SoNguoiMua, COUNT(dh.id) as SoLuotMua, SUM(dh.tongtien) as DoanhThu FROM don_hang dh GROUP BY YEAR(dh.thoi_diem_mua), MONTH(dh.thoi_diem_mua)";
    return pdo_query($sql);
}

?>