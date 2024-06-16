<?php 

    function get_countUser_email($email){
        $sql = "SELECT count(*) FROM taikhoan WHERE email = ?";
        return pdo_query_count($sql, $email);
    }
    
    // function get_countUser_email($email){
    //     $sql = "SELECT * FROM taikhoan WHERE ten = ?";
    //     return pdo_query_count($sql, $email);
    // }
    function signup($hoten,$email,$sodienthoai,$matkhau) {
        $sql = "INSERT INTO taikhoan(ten, email, sodienthoai, matkhau) VALUES (?,?,?,?)";
        pdo_execute($sql,$hoten,$email,$sodienthoai, $matkhau);
    }
    function insert_user($ten, $email, $sodienthoai, $matkhau, $quyen){
        $sql = "INSERT INTO taikhoan(ten, email, sodienthoai, matkhau, quyen) VALUES (?,?,?,?,?)";
        pdo_execute($sql,$ten,$email,$sodienthoai, $matkhau, $quyen);
    }
    function singin($email, $matkhau){
        $sql = "SELECT * FROM taikhoan WHERE taikhoan.email = ? AND taikhoan.matkhau = ?";
        return pdo_query_one($sql, $email, $matkhau);
    }

    function update_password($pass, $email){
        $sql = "UPDATE taikhoan SET matkhau = ? WHERE email = ? ";
        pdo_execute($sql,$pass,$email);
    }

    function getAll_user(){
        $sql = "SELECT id, ten, email, sodienthoai, ngaydangky, quyen FROM taikhoan WHERE 1 ORDER BY id DESC";
        return pdo_query($sql);
    }
    function getById_user($id){
        $sql = "SELECT id, ten, email, sodienthoai, matkhau, quyen FROM taikhoan WHERE id=? ORDER BY id DESC";
        return pdo_query_one($sql, $id);
    }

    function update_user($ten, $email, $sodienthoai, $matkhau, $quyen, $id){
        $sql = "UPDATE taikhoan SET ten=?, email=?, sodienthoai=?, matkhau=?, quyen=? WHERE id = ?";
        pdo_execute($sql, $ten, $email, $sodienthoai, $matkhau, $quyen, $id);
    }

    function delete_user($id){
        $sql = "DELETE FROM taikhoan WHERE 1 and id = ?";
        pdo_execute($sql, $id);
    }

    function updateinfo($ten, $email, $sodienthoai, $old_email){
        $sql = "UPDATE taikhoan SET ten=?, email=?, sodienthoai=? WHERE email = ?";
        pdo_execute($sql, $ten, $email, $sodienthoai, $old_email);
    }

    
?>