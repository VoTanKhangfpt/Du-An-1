<?php
require_once 'pdo.php';

function showcart($id_tk)
{
    $sql = "SELECT san_pham.id as idsp, san_pham.hinh, san_pham.ten, san_pham.gia_km, giohang.soluong, giohang.tongtien FROM giohang INNER JOIN san_pham ON san_pham.id = giohang.id_sp WHERE giohang.id_tk = ? ORDER BY giohang.id ASC";
    return pdo_query($sql,$id_tk);
}

// function showAllcart($id_tk){
//     $sql = "SELECT san_pham.*, giohang.* FROM giohang INNER JOIN san_pham ON san_pham.id = giohang.id_sp WHERE giohang.id_tk = ?";
//     return pdo_query($sql, $id_tk);
// }
function showcartthanhtoan($id_khachhang)
{
   return pdo_query(
      "SELECT hoa.*, giohang.*
      FROM giohang
      INNER JOIN hoa
      ON hoa.id = giohang.id_hoa
      WHERE giohang.id_khachhang = ?",
      $id_khachhang
   );
}

function checkcart_product($id_sp, $id_tk)
{
    $sql = "SELECT * FROM giohang where id_sp = ? AND id_tk = ?";
    return pdo_query_one($sql, $id_sp, $id_tk);
}
// tạo cart
function addtocart($id_tk, $id_sp, $tongtien, $soluong)
{
    $sql = "INSERT INTO giohang(id_tk, id_sp, tongtien, soluong) value(?,?,?,?)";
    pdo_execute($sql, $id_tk, $id_sp, $tongtien, $soluong);
}
// update
function update($soluong, $tongtien, $id_sp)
{
    $sql = "UPDATE giohang SET soluong = ?, tongtien = ? WHERE id_sp = ?";
    pdo_execute($sql, $soluong, $tongtien, $id_sp);
}

function delete_cart($id){
    $sql = "DELETE FROM giohang WHERE id_sp = ?";
    pdo_execute($sql, $id);
}

function deleteAll_cart($id_kh)
{
    $sql = "DELETE FROM giohang WHERE id_tk = ?";
    pdo_execute($sql, $id_kh);
}

?>