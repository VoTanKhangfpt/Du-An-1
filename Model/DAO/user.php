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

    function singin($email, $matkhau){
        $sql = "SELECT * FROM taikhoan WHERE taikhoan.email = ? AND taikhoan.matkhau = ?";
        return pdo_query_one($sql, $email, $matkhau);
    }

    function update_password($pass, $email){
        $sql = "UPDATE taikhoan SET matkhau = ? WHERE email = ? ";
        return pdo_execute($sql,$pass,$email);
    }
?>