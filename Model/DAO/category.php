<?php 
    require_once 'pdo.php';

    function getAll_category() {
        $sql = "SELECT * FROM danhmuc";
        return pdo_query($sql);
    }

?>
