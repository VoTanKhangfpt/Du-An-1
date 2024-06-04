<?php
require_once '../Model/DAO/pdo.php';
require_once '../Model/DAO/user.php';

// require_once '../Model/DAO/category.php';
// require_once '../Model/DAO/product.php';
// require_once '../Model/uploadFile.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'list':
            $listuser = getAll_user();
            $view_name = 'user_list';
            break;
        case 'add':
            if (isset($_POST['btn-submit'])) {
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['sodienthoai'];
                $matkhau = $_POST['matkhau'];
                $quyen = $_POST['quyen'];
                $err = [];
                $pattern = '/^(032|033|034|035|036|037|038|039|096|097|098|086|083|084|085|081|082|088|091|094|070|079|077|076|078|090|093|089|056|058|092|059|099)[0-9]{7}$/';
                $kq = preg_match($pattern, $sodienthoai);
                $countEmail = get_countUser_email($email);

                if ($countEmail > 0) {
                    $err['email'] = 'Email này đã tồn tại. Vui lòng nhập email khác!';
                }


                if ($kq == false) {
                    $err['sodienthoai'] = 'Số điện thoại không hợp lệ. Vui lòng nhập lại!';
                }

                if (strlen($matkhau) < 6) {
                    $err['matkhau'] = 'Mật khẩu ngắn quá. Vui lòng nhập hơn 5 kí tự!';
                } else {
                    $matkhau = md5($matkhau);
                }

                if (empty($err)) {
                    insert_user($ten, $email, $sodienthoai, $matkhau, $quyen);
                    header('Location: index.php?mod=user&act=list');
                }
            }
            $view_name = 'user_add';

            break;
        case 'edit':
            if (isset($_GET['quyen']) && $_GET['quyen'] == 1) {
                $err = [];
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $listuserById = getById_user($id);
                }

                if (isset($_POST['btn-submit'])) {
                    $ten = $_POST['ten'];
                    $email = $_POST['email'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $matkhau = $_POST['matkhau'];
                    $quyen = $_POST['quyen'];

                    $pattern = '/^(032|033|034|035|036|037|038|039|096|097|098|086|083|084|085|081|082|088|091|094|070|079|077|076|078|090|093|089|056|058|092|059|099)[0-9]{7}$/';
                    $kq = preg_match($pattern, $sodienthoai);
                    $countEmail = get_countUser_email($email);

                    if ($countEmail > 0 && $email!==$listuserById['email']) {
                        $err['email'] = 'Email này đã tồn tại. Vui lòng nhập email khác!';
                    }


                    if ($kq == false) {
                        $err['sodienthoai'] = 'Số điện thoại không hợp lệ. Vui lòng nhập lại!';
                    }

                    if (strlen($matkhau) < 6) {
                        $err['matkhau'] = 'Mật khẩu ngắn quá. Vui lòng nhập hơn 5 kí tự!';
                    } else {
                        $matkhau = md5($matkhau);
                    }

                    if (empty($err)) {
                        update_user($ten, $email, $sodienthoai, $matkhau, $quyen, $id);
                        header('Location: index.php?mod=user&act=list');
                    }
                }
            } else {
                $quyen = $_GET['quyen'];
                header('Location: index.php?mod=user&act=list&quyen='.$quyen);
            }



            $view_name = 'user_edit';

            break;
        case "delete":
            delete_user($_GET['id']);
            header('Location: index.php?mod=user&act=list');
            break;
        default:
            // 404
            $view_nmae = 'user_list';
            break;
    }
    include 'View/admin_layout.php';
} else {
    header('Location: index.php?mod=user&act=list');
}
