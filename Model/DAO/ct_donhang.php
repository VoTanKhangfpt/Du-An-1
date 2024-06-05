<?php 
    require_once 'pdo.php';

    function getAll_ctdh($iddh){
        $sql = "SELECT * FROM don_hang_chi_tiet WHERE id_dh = ?";
        return pdo_query($sql,$iddh);
    }
?>