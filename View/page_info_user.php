<div class="container light-style flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-4">
        Quản lý tài khoản
    </h4>
    <form action="?mod=user&act=info" method="post">
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Thông tin tài khoản</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="?mod=user&act=doimatkhau">Đổi mật khẩu</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Thông tin đơn hàng</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt class="d-block ui-w-80">

                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Tên khách hàng</label>
                                    <input name="ten" type="text" class="form-control mb-1" value="<?= $_SESSION['user']['ten'] ?>">
                                </div>
                                <?php if(isset($loi['hoten'])){?>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        <?=$loi['hoten']?>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="form-group">
                                    <label class="form-label">Số điện thoại</label>
                                    <input name="sodienthoai" type="tel" class="form-control" value="<?= $_SESSION['user']['sodienthoai'] ?>">
                                </div>
                                <?php if(isset($loi['sodienthoai'])){?>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        <?=$loi['sodienthoai']?>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="email" name="email" class="form-control mb-1" value="<?= $_SESSION['user']['email'] ?>">

                                </div>
                                <?php if(isset($loi['email'])){?>
                                <div class="alert alert-danger d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    <div>
                                        <?=$loi['email']?>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="form-group">
                                    <label class="form-label">Vai trò:</label>
                                    <?php if ($_SESSION['user']['quyen'] == 0) { ?>
                                        <span>Khách hàng</span>
                                    <?php } else { ?>
                                        <span>Admin</span>
                                    <?php } ?>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="text-right d-flex flex-row-reverse px-4">
                <button type="submit" name="btn-submit" class="btn btn-primary">Cập nhật tài khoản</button>&nbsp;
                <button type="reset" class="btn btn-default">Quay lại</button>
            </div>
        </div>
    </form>
</div>