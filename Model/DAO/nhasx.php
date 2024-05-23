<?php 
    function getAll_nhasx(){
        $sql = "SELECT * FROM nha_sx";
        return pdo_query($sql);
    };
?>