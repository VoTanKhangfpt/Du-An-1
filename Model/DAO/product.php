<?php 
    require_once 'pdo.php';

    function get_product_thuoctinh_ByID($id){
        $sql = "SELECT san_pham.id, san_pham.id_nhasx, san_pham.iddm, san_pham.id_thuoctinh, san_pham.ten, san_pham.gia, san_pham.gia_km, san_pham.hinh, san_pham.mau_sac, thuoc_tinh.ram, thuoc_tinh.cpu, thuoc_tinh.dia, thuoc_tinh.man_hinh, thuoc_tinh.thong_tin_pin, thuoc_tinh.cong_nghe_man_hinh, thuoc_tinh.cong_nghe_man_hinh FROM `san_pham` INNER JOIN thuoc_tinh ON san_pham.id_thuoctinh = thuoc_tinh.id WHERE san_pham.id = $id GROUP BY san_pham.id;";
        return pdo_query_one($sql);
    }

    function get_product_nhaxs($id) {
        $sql = "SELECT san_pham.id, nha_sx.ten FROM `san_pham` INNER JOIN nha_sx on san_pham.id_nhasx = nha_sx.id where san_pham.id = $id GROUP BY san_pham.id";
        return pdo_query_one($sql);
    }
?>