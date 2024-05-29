<?php
require_once 'Model/DAO/pdo.php';
require_once 'Model/DAO/user.php';
require_once 'Model/guimail.php';


if (isset($_GET['act'])) {

    $loi = array();
    switch ($_GET['act']) {
        case 'dangky':

            if (isset($_POST['btn-submit'])) {
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['sodienthoai'];
                $matkhau = $_POST['matkhau'];
                $pattern_mk = "/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@!#$%^&*()_+])[A-Za-z\d@!#$%^&*()_+]{6,32}$/";
                $pattern_sdt = '/^(03|05|07|08|09|01[2|6|8|9])+([0-9]{8})$/';
                $countEmail = get_countUser_email($email);



                if (strlen($hoten) == 0) {
                    $loi['hoten'] = "Không được để trống trường họ tên";
                }

                if (strlen($email) == 0) {
                    $loi['email'] = "Không được để trống trường email";
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $loi['email'] = "Email không đúng định dạng";
                } else if ($countEmail > 0) {
                    $loi['email'] = "Email $email đã tồn tại. Vui lòng nhập email khác.";
                }

                if (!preg_match($pattern_sdt, $sodienthoai)) {
                    $loi['sodienthoai'] = "Số điện thoại không hợp lệ";
                }

                if (strlen($matkhau) == 0) {
                    $loi['matkhau'] = "Không được để trống trường mật khẩu";
                } else if (!preg_match($pattern_mk, $matkhau)) {
                    $loi['matkhau'] = "Mật khẩu phải từ 6-32 kí tự, phải có số, kí tự đặc biệt và chữ cái in hoa";
                } else {
                    $password = md5($matkhau);
                }

                // $ten get_countUser_ten($ten)

                if (empty($loi)) {
                    signup($hoten, $email, $sodienthoai, $password);
                    header("Location:?mod=user&act=dangky");
                }
            }

            $viewName = 'page_dangky';
            break;
        case 'dangnhap':
            $err = '';
            if (isset($_POST['btn-sign'])) {
                $email = $_POST['email'];
                $matkhau = $_POST['password'];
                $password = md5($matkhau);
                $signin = singin($email, $password);
                if (empty($signin)) {
                    $err .= 'Email hoặc mật khẩu không đúng. Vui lòng kiểm tra lại tài khoản';
                } else {
                    $_SESSION['user'] = $signin;
                    if ($signin['quyen'] == 1) {
                        header('location:admin/');
                    } else {
                        header('location:index.php');
                    }
                }
            }
            $viewName = 'page_dangnhap';
            break;
        case 'quenmk':

            $thongbao = '';
            if (isset($_POST['btn-quenmk'])) {

                $email = $_POST['email'];
                $countEmail = get_countUser_email($email);
                if (strlen($email) == 0) {
                    $loi['email'] = "Không được để trống trường email";
                    // } 
                    // else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //     $loi['email'] = "Email không đúng định dạng";
                } else if ($countEmail === 0) {
                    $loi['email'] = "Email $email chưa được đăng ký. Vui lòng kiểm tra lại tài khoản!";
                }
                // else{
                //     unset($loi);
                // }


                if (empty($loi)) {
                    $new_pass = rand(0, 999999);
                    $matkhau = md5($new_pass);
                    update_password($matkhau, $email);
                    $guimail = guimail($email, $new_pass);
                    if ($guimail == true) {
                        $thongbao .= "Mật khẩu mới đã được gửi lại. Bạn vui lòng kiểm tra trong Email $email";
                    }
                }
            }
            $viewName = 'page_quenmk';
            break;

        case 'doimatkhau':

            if (!isset($_SESSION['user'])) {
                header('Location:?mod=user&act=dangnhap');
                exit();
            }

            if (isset($_POST['btn-change'])) {
                $pattern_mk = "/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@!#$%^&*()_+])[A-Za-z\d@!#$%^&*()_+]{6,32}$/";
                $matkhau = $_POST['matkhaucu'];
                $matkhaucu = md5($matkhau);
                $matkhaumoi_1 = $_POST['matkhaumoi_1'];
                $matkhaumoi_2 = $_POST['matkhaumoi_2'];           
                $kiemtra_mk = singin($_SESSION['user']['email'], $matkhaucu);

                if(empty($kiemtra_mk)){
                    $loi['pass_old'] = "Mật khẩu không đúng";
                }

                

                if (strlen($matkhaumoi_1) == 0) {
                    $loi['matkhau'] = "Không được để trống trường mật khẩu";
                } else if (!preg_match($pattern_mk, $matkhaumoi_1)) {
                    $loi['matkhau'] = "Mật khẩu phải từ 6-32 kí tự, phải có số, kí tự đặc biệt và chữ cái in hoa";
                } else {
                    $password_old = md5($matkhaumoi_1);
                }

                if($matkhaumoi_2==''){
                    $loi['other'] = 'Vui lòng nhập lại mật khẩu giống ở trên.';
                }else if($matkhaumoi_2 != $matkhaumoi_1) {
                    $loi['other'] = "Mật khẩu nhập lại không khớp!";
                }


                 

                if (empty($loi)) {
                    update_password($password_old,$_SESSION['user']['email'], );
                    $thongbao = 'Mật khẩu mới của bạn đã được cập nhật';
                }
            }
            $viewName = 'page_doimatkhau';
            break;

        case 'dangxuat':
            session_destroy();
            header('location:index.php');
            break;
        default:
    }
}
require_once 'View/page_layout.php';
