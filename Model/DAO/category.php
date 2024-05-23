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



    

?>
