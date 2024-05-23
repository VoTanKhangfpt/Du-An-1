<?php
require_once 'pdo.php';

function get_product_thuoctinh_ByID($id)
{
    $sql = "SELECT san_pham.id, san_pham.id_nhasx, san_pham.iddm, san_pham.id_thuoctinh, san_pham.ten, san_pham.gia, san_pham.gia_km, san_pham.hinh, san_pham.mau_sac, thuoc_tinh.ram, thuoc_tinh.cpu, thuoc_tinh.dia, thuoc_tinh.man_hinh, thuoc_tinh.thong_tin_pin, thuoc_tinh.cong_nghe_man_hinh, thuoc_tinh.cong_nghe_man_hinh FROM `san_pham` INNER JOIN thuoc_tinh ON san_pham.id_thuoctinh = thuoc_tinh.id WHERE san_pham.id = $id GROUP BY san_pham.id;";
    return pdo_query_one($sql);
}

function get_product_nhaxs($id)
{
    $sql = "SELECT san_pham.id, nha_sx.ten FROM `san_pham` INNER JOIN nha_sx on san_pham.id_nhasx = nha_sx.id where san_pham.id = $id GROUP BY san_pham.id";
    return pdo_query_one($sql);
}

function getAllProduct($num)
{
    $sql = "SELECT * FROM `san_pham` limit $num";
    return pdo_query($sql);
}

function getById_product($id)
{
    $sql = "SELECT * FROM san_pham WHERE id = $id";
    return pdo_query_one($sql);
}

function getAll_product_dm_nhasx()
{
    $sql = "SELECT sp.id, sp.ten as tensp, sp.gia, sp.gia_km, sp.hinh, sp.soluong, sp.an_hien, sp.hot, dm.tendm, nsx.ten FROM `san_pham` as sp INNER JOIN danhmuc as dm ON sp.iddm=dm.id INNER JOIN nha_sx as nsx ON sp.id_nhasx=nsx.id GROUP BY sp.id";
    return pdo_query($sql);
}


function create_product($ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $can_nang, $mau_sac, $hinh)
{
    $sql = "INSERT INTO san_pham(ten, gia, gia_km, hot, mota, an_hien, iddm, id_nhasx, can_nang, mau_sac, hinh) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $can_nang, $mau_sac, $hinh);
}

function update_product($id, $ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $can_nang, $mau_sac, $hinh)
{
    if ($hinh !== "") {
        $sql = "UPDATE san_pham SET ten='$ten', gia=$gia, gia_km=$gia_km, hot=$hot, mota='$mota', an_hien=$anhien, iddm=$iddm, id_nhasx=$id_nhasx, can_nang='$can_nang', mau_sac='$mau_sac', hinh='$hinh' WHERE id = $id";
    } else {
        $sql = "UPDATE san_pham SET ten='$ten', gia=$gia, gia_km=$gia_km, hot=$hot, mota='$mota', an_hien=$anhien, iddm=$iddm, id_nhasx=$id_nhasx, can_nang='$can_nang', mau_sac='$mau_sac' WHERE id = $id";
    }
    pdo_execute($sql);
}


function delete_product($id)
{
    $sql = "DELETE FROM san_pham WHERE id=$id";
    pdo_execute($sql);
}
