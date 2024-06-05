
<div class="noindex">
    <div class="containerr" id="layout-page-login">
        <div id="customer-login">
            <h1 id="title-login">Đăng nhập</h1>
            <div id="login">
                <form action="" method="post" type="submit">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                        <input <?php if (isset($email)) echo $email;
                                else echo ''; ?> type="email" id="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input <?php if (isset($password)) echo $password;
                                else echo ''; ?> type="password" id="password" placeholder="Mật khẩu" name="password" class="form-control">
                    </div>
                    <?php if (!empty($err)) {
                        echo '<div class="input-group">
                        <div class="alert alert-danger" role="alert">
                            ' . $err . '
                        </div>
                    </div>';
                    }
                    ?>
                    <div class="action_bottom">
                        <input class="btn-signin" name="btn-sign" type="submit" value="Đăng nhập">
                    </div>
                    <div class="req_pass">
                        <a href="?mod=user&act=quenmk">Quên mật khẩu?</a>
                        hoặc <a href="?mod=user&act=dangky">Đăng ký</a>
                    </div>

                    <?php
                    if (isset($_SESSION['thongbao'])) { ?>
                        <div class="req_pass">
                            <h4><a href="#layout-page-login" class="text-danger"><?=$_SESSION['thongbao']?></a></h4>
                        </div>
                    <?php } ?>

                    
                </form>
            </div>
        </div>
    </div>
</div>