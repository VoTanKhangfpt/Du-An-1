<?php 
    require_once 'pdo.php';

    function binhluan_insert($id_tk, $id_sp, $noidung){
        $sql = "INSERT INTO binhluan (id_tk, id_sp, noidung) VALUES (?, ?, ?)";
        pdo_execute($sql, $id_tk, $id_sp, $noidung);
    }
    function binhluan_select_all($idpro){
        $sql = "SELECT * FROM binhluan WHERE id_sp=? ORDER BY id DESC";
        return pdo_query($sql,$idpro);
    }

    function binhluan_product()
{
    $sql = "SELECT sp.ten, sp.id as idsp, bl.id as idbl, COUNT(bl.id) as so_luong, MAX(bl.thoigianbinhluan) as cu_nhat, MIN(bl.thoigianbinhluan) as moi_nhat FROM san_pham sp JOIN binhluan bl ON sp.id = bl.id_sp GROUP BY sp.ten, sp.id HAVING so_luong > 0";
    return pdo_query($sql);
}

function comment_select_ByIdSP($id)
{
    $sql = "SELECT tk.ten, bl.thoigianbinhluan, bl.noidung, bl.trangthai, tk.id as idtk, bl.id as idbl from binhluan bl join taikhoan tk on bl.id_tk=tk.id where bl.id_sp=? ORDER BY bl.id DESC";
    return pdo_query($sql, $id);
}
function comment_selectById($id)
{
    $sql = "SELECT * FROM binhluan WHERE id=?";
    return pdo_query_one($sql, $id);
}

function update_comment($id, $status){
    $sql = "UPDATE binhluan set trangthai = ? WHERE id=?";
    pdo_execute($sql, $status, $id);

}

function comment_delete($id)
{
    $sql = "DELETE FROM binhluan WHERE id=?";
    pdo_execute($sql, $id);
    // if (is_array($mabl)) {
    //     foreach ($mabl as $mabl_item) {
    //         pdo_execute($sql, $mabl_item);
    //     }
    // } else {
        
    // }
}

    

?>