<!--   -->
<div class="noindex">
    <!-- onsubmit="return validateForm(event)" -->
    <div class="containerr" id="layout-page-login">
        <div id="customer-login">
            <h1 id="title-login">Tạo tài khoản</h1>
            <div id="login">

                <form action="" method="post" name="myForm">

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-user"></i></span>
                        <input value="<?php if(isset($hoten)) echo $hoten; else echo '';?>" id="hoten" name="hoten" type="text" placeholder="Tên đăng nhập" class="form-control">
                    </div>
                   

                    <?php if (!empty($loi) && isset($loi['hoten'])) echo '<div class="alert alert-warning">' . $loi['hoten'] . '</div>' ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                        <input value="<?php if(isset($email)) echo $email; else echo '';?>" id="email" type="email" placeholder="Email" name="email" class="form-control">
                    </div>
                    <?php if (!empty($loi) && isset($loi['email'])) echo '<div class="alert alert-warning">' . $loi['email'] . '</div>' ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-phone-alt"></i></span>
                        <input value="<?php if(isset($sodienthoai)) echo $sodienthoai; else echo '';?>" id="phone" type="text" placeholder="Phone" name="sodienthoai" class="form-control">
                    </div>
                    <?php if (!empty($loi) && isset($loi['sodienthoai'])) echo '<div class="alert alert-warning">' . $loi['sodienthoai'] . '</div>' ?>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input value="<?php if(isset($matkhau)) echo $matkhau; else echo '';?>" id="matkhau" type="password" placeholder="Mật khẩu" class="form-control" name="matkhau">
                    </div>
                    <?php if (!empty($loi) && isset($loi['matkhau'])) echo '<div class="alert alert-warning">' . $loi['matkhau'] . '</div>' ?>
                    <div class="action_bottom mr">
                        <button class="btn-signin" name="btn-submit" type="submit">Đăng ký</button>
                    </div>
                    <div class="action_bottom">
                        <a class="btn-signin back" href="?mod=user&act=dangnhap">Đã có tài khoản</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

