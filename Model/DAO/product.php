<?php
require_once 'pdo.php';

function get_product_nhaxs($id)
{
    $sql = "SELECT san_pham.id, nha_sx.ten FROM `san_pham` INNER JOIN nha_sx on san_pham.id_nhasx = nha_sx.id where san_pham.id = $id GROUP BY san_pham.id";
    return pdo_query_one($sql);
}

function get_product_danhmuc($start, $end, $iddm, $ktw)
{
    if(isset($ktw)&&$ktw!=''){
        $sql = 'SELECT * FROM san_pham WHERE ten like "%'.$ktw.'%" and an_hien=1';
    }else{
        $sql = "SELECT * FROM `san_pham` WHERE san_pham.iddm = $iddm and san_pham.an_hien = 1 LIMIT $start, $end";
    }
    return pdo_query($sql);
}
function count_product_danhmuc($iddm, $kwt)
{
    if(isset($kwt)&&$kwt!=''){
        $sql = "SELECT count(*) FROM `san_pham` WHERE san_pham.ten like '%$kwt%' and san_pham.an_hien = 1";
    }else{
        $sql = "SELECT count(*) FROM `san_pham` WHERE san_pham.iddm = $iddm and san_pham.an_hien = 1";
    }
   
    return pdo_query_countItem($sql);
}

function getAllProduct($num)
{
    $sql = "SELECT * FROM `san_pham` limit $num";
    return pdo_query($sql);
}

function getProduct_hot($num)
{
    $sql = "SELECT * FROM `san_pham` WHERE hot=1 and an_hien = 1 limit $num";
    return pdo_query($sql);
}

function getById_product($id)
{
    $sql = "SELECT * FROM san_pham WHERE id = $id";
    return pdo_query_one($sql);
}

function getRandom_product($id, $iddm, $soluong)
{
    $sql = "SELECT * FROM san_pham WHERE san_pham.iddm = $iddm AND san_pham.id != $id AND san_pham.an_hien=1 ORDER BY RAND() limit $soluong";
    return pdo_query($sql);
}

function getAll_product_dm_nhasx()
{
    $sql = "SELECT sp.id, sp.ten as tensp, sp.gia, sp.gia_km, sp.hinh, sp.soluong, sp.an_hien, sp.hot, dm.tendm, nsx.ten FROM `san_pham` as sp INNER JOIN danhmuc as dm ON sp.iddm=dm.id INNER JOIN nha_sx as nsx ON sp.id_nhasx=nsx.id GROUP BY sp.id";
    return pdo_query($sql);
}


function create_product($ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $soluong, $can_nang, $mau_sac, $hinh)
{
    $sql = "INSERT INTO san_pham(ten, gia, gia_km, hot, mota, an_hien, iddm, id_nhasx, soluong, can_nang, mau_sac, hinh) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql, $ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $soluong, $can_nang, $mau_sac, $hinh);
}

function update_product($id, $ten, $gia, $gia_km, $hot, $mota, $anhien, $iddm, $id_nhasx, $soluong, $can_nang, $mau_sac, $hinh)
{
    if ($hinh !== "") {
        $sql = "UPDATE san_pham SET ten='$ten', gia=$gia, gia_km=$gia_km, hot=$hot, mota='$mota', an_hien=$anhien, iddm=$iddm, id_nhasx=$id_nhasx, soluong=$soluong, can_nang='$can_nang', mau_sac='$mau_sac', hinh='$hinh' WHERE id = $id";
    } else {
        $sql = "UPDATE san_pham SET ten='$ten', gia=$gia, gia_km=$gia_km, hot=$hot, mota='$mota', an_hien=$anhien, iddm=$iddm, id_nhasx=$id_nhasx, soluong=$soluong, can_nang='$can_nang', mau_sac='$mau_sac' WHERE id = $id";
    }
    pdo_execute($sql);
}


function delete_product($id)
{
    $sql = "DELETE FROM san_pham WHERE id=$id";
    pdo_execute($sql);
}


// function updateProductQuantity($id, $qty)
// {
//     $sql = "SELECT soluong FROM san_pham  WHERE id=? ";
//     $currentQuantity = pdo_query_value($sql, $id);
//     if ($currentQuantity !== false) {
//         if ($currentQuantity >= $qty) {
//             $sql = "UPDATE san_pham SET soluong=$currentQuantity-? WHERE id=? ";
//             return pdo_execute($sql, $qty, $id);
//         } else {
//             return 0;
//         }
//     }
//     return false;
// }


function searchProduct($kwt){
    $sql = 'SELECT * FROM san_pham WHERE ten like "%'.$kwt.'%" and an_hien=1 LIMIT 0, 3';
    return pdo_query($sql);
}



