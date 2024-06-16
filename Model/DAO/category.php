<?php
require_once 'pdo.php';

function getAll_category()
{
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}
function getById_category($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id = $id";
    return pdo_query($sql);
}

function create_category($tendm, $anhien, $img)
{
    $sql = "INSERT INTO danhmuc(tendm, anhien, anh) VALUES (?,?,?)";
    pdo_execute($sql, $tendm, $anhien, $img);
}

function update_category($tendm, $anhien, $img, $id)
{
    if ($img !== '') {
        $sql = "UPDATE danhmuc SET tendm = '$tendm', anhien = $anhien, anh = '$img' WHERE id = $id";
    } else {
        $sql = "UPDATE danhmuc SET tendm = '$tendm', anhien = $anhien WHERE id = $id";
    }
    pdo_execute($sql);
}
function delete_category($id)
{
    $sql = "DELETE FROM danhmuc WHERE id = $id";
    pdo_execute($sql);
}

function countProduct($id)
{
    $sql = "UPDATE danhmuc AS d SET d.soluongsp = ( SELECT COUNT(*) FROM san_pham AS s WHERE s.iddm = d.id ) WHERE d.id = ?";
    pdo_execute($sql, $id);
}
