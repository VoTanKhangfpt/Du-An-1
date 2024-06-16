<?php
require_once 'pdo.php';
function create_order($id_kh, $now, $tongtien, $ten_kh, $dia_chi, $sodienthoai, $email, $ghichu, $pttt)
{
    $sql = "INSERT INTO don_hang(id_user, thoi_diem_mua, tongtien, ten, diachi, sodienthoai, email, ghichu, pttt) VALUES (?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $id_kh, $now, $tongtien, $ten_kh, $dia_chi, $sodienthoai, $email, $ghichu, $pttt);
}

function getID_order_current()
{
    $sql = "SELECT MAX(id) AS id_donhang FROM don_hang";
    return pdo_query_one($sql);
}


function insert_order_detail($ten, $gia, $soluong, $tongtien, $id_dh, $id_sp)
{
    $sql = "INSERT INTO don_hang_chi_tiet(ten_sp, gia, so_luong, tongtien, id_dh, id_sp) VALUES(?,?,?,?,?,?)";
    pdo_execute($sql, $ten, $gia, $soluong, $tongtien, $id_dh, $id_sp);
}
function selectone_order($iddh)
{
    $sql = "SELECT * FROM don_hang WHERE id = ?";
    return pdo_query_one($sql, $iddh);
}
function selectAll_order($currentPage, $limit, $trangthai)
{
    $startPage = ($currentPage - 1) * $limit;
    if (isset($trangthai) && $trangthai != '') {
        $sql = "SELECT * FROM don_hang WHERE trang_thai = '$trangthai' LIMIT $startPage, $limit";
    } else {
        $sql = "SELECT * FROM don_hang WHERE 1 LIMIT $startPage, $limit";
    }
    return pdo_query($sql);
}

function update_order($iddh, $status)
{
    $sql = "UPDATE don_hang SET trang_thai = ? WHERE id = ?";
    pdo_execute($sql, $status, $iddh);
}

function count_sotrang($trangthai)
{
    if(isset($trangthai)&&$trangthai!=''){
        $sql = "SELECT count(*) FROM don_hang WHERE trang_thai = '$trangthai'";
    }else{
        $sql = "SELECT count(*) FROM don_hang WHERE 1";
    }
    $tongsosp = pdo_query_countItem($sql);
    $tongsotrang = ceil($tongsosp / sosp_trentrang);
    return $tongsotrang;
}

function phan_trang($tongsotrang, $currentPage)
{
    $from = $tongsotrang - offset;

    if ($from < 1) $from = 1;

    $to = $tongsotrang + offset;

    if ($to > $tongsotrang) $to = $tongsotrang;
    $elemet_li = '';
    for ($i = $from; $i <= $to; $i++) {
        if ($currentPage == $i) {
            $elemet_li .= '<a style="background-color: orange;" href="index.php?mod=order&act=list=&currentPage=' . $i . '">' . $i . '</a>';
        } else {
            $elemet_li .= '<a href="index.php?mod=order&act=list&currentPage=' . $i . '">' . $i . '</a>';
        }
    }
    return $elemet_li;
}
