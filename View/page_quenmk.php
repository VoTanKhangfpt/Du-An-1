<div class="noindex">
    <div class="containerr" id="layout-page-login">
        <div id="customer-login">
            <h1 id="title-login">QUÊN MẬT KHẨU</h1>
            <div id="login">
                <form action="" method="post" type="submit">
                
                    <div class="input-group">
                        
                        <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                        <input value="<?php if(isset($email)) echo $email; else echo '';?>" type="email" id="email" name="email" placeholder="Email" class="form-control" autofocus>
                    </div>
                    <?php if (isset($thongbao)&&$thongbao!="") {
                        echo '<div class="input-group">
                        <div class="alert alert-success" role="alert">
                        <p>' . $thongbao . '</p>
                            
                        </div>
                    </div>';
                    }
                    ?>
                    <?php if (isset($loi['email'])) {
                        echo '<div class="input-group">
                        <div class="alert alert-danger" role="alert">
                        <p>' . $loi['email'] . '</p>
                            
                        </div>
                    </div>';
                    }
                    ?>
                    <div class="action_bottom">
                        <input class="btn-signin" name="btn-quenmk" type="submit" value="Khôi phục">
                    </div>
                    <div class="req_pass">
                    Bạn đã nhớ mật khẩu? Trở về đăng nhập<a href="?mod=user&act=dangnhap">Trở về đăng nhập</a>
                        hoặc 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>