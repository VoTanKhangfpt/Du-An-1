<?php 
    require_once 'pdo.php';

    function getAll_category() {
        $sql = "SELECT * FROM danhmuc";
        return pdo_query($sql);
    }
    function getById_category($id) {
        $sql = "SELECT * FROM danhmuc WHERE id = $id";
        return pdo_query($sql);
    }

    function create_category($tendm, $anhien, $img){
        $sql = "INSERT INTO danhmuc(tendm, anhien, anh) VALUES (?,?,?)";
        pdo_execute($sql, $tendm, $anhien, $img);
    }

    function update_category($tendm, $anhien, $img, $id){
        $sql = "UPDATE danhmuc SET tendm = ?, anhien = ?, anh = ? WHERE id = $id";
        pdo_execute($sql, $tendm, $anhien, $img);
    }
    function delete_category($id){
        $sql = "DELETE FROM danhmuc WHERE id = $id";
        pdo_execute($sql);
    }

    function getItel() {
        $sql = "SELECT san_pham.hinh, san_pham.ten, san_pham.gia  FROM san_pham INNER JOIN nha_sx ON san_pham.id_nhasx = nha_sx.id WHERE nha_sx.id = 12";
        return pdo_query($sql);
    }

    

?>
