<?php
if (isset($thongbao)) {
    echo '<script>alert("' . $thongbao . '")</script>';
}
?>

<div class="noindex">
    <div class="containerr" id="layout-page-login">
        <div id="customer-login">
            <h1 id="title-login">THAY ĐỔI MẬT KHẨU</h1>
            <div id="login">
                <form action="" method="post" type="submit">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-user"></i></span>
                        <input value="<?php if (isset($_SESSION['user']['ten'])) echo $_SESSION['user']['ten'];
                                        else echo ''; ?>" id="hoten" name="hoten" type="text" placeholder="Tên tài khoản" class="form-control" readonly>
                    </div>



                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input value="<?php if (isset($matkhau)) echo $matkhau;
                                        else echo ''; ?>" id="matkhau" type="password" placeholder="Mật khẩu cũ" class="form-control" name="matkhaucu">
                    </div>
                    
                    <?php if (!empty($loi) && isset($loi['pass_old'])) echo '<div class="alert alert-warning">' . $loi['pass_old'] . '</div>' ?>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input id="matkhau" type="password" placeholder="Mật khẩu mới" class="form-control" name="matkhaumoi_1">
                    </div>

                    <?php if (!empty($loi) && isset($loi['matkhau'])) echo '<div class="alert alert-warning">' . $loi['matkhau'] . '</div>' ?>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input id="matkhau" type="password" placeholder="Nhập lại mật khẩu" class="form-control" name="matkhaumoi_2">
                    </div>

                    <?php if (!empty($loi) && isset($loi['other'])) echo '<div class="alert alert-warning">' . $loi['other'] . '</div>' ?>

                    <div class="action_bottom">
                        <input class="btn-signin" name="btn-change" type="submit" value="Khôi phục">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>