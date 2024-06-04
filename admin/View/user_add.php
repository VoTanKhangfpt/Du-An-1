<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm tài khoản</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?mod=user&act=list">Danh sách tài khoản</a></li>
                        <li class="breadcrumb-item active">Tài khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Tên tài khoản:</label>
                                        <input value="<?=isset($_POST['ten']) ? $_POST['ten'] : ''?>"  type="text" class="form-control" name="ten" placeholder="Tên tài khoản">
                                    </div>
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Email:</label>
                                        <input value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>" type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <?php if (!empty($err) && isset($err['email'])) : ?>
                                        <div class="alert alert-danger">
                                            <strong>Danger!</strong> <?= $err['email'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Số điện thoại</label>

                                            <input value="<?=isset($_POST['sodienthoai']) ? $_POST['sodienthoai'] : ''?>" type="text" class="form-control" name="sodienthoai" placeholder="Số điện thoại">
                                        </div>

                                    </div>
                                    <?php if (!empty($err) && isset($err['sodienthoai'])) : ?>
                                        <div class="alert alert-danger">
                                            <strong>Danger!</strong> <?= $err['sodienthoai'] ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Mật khẩu</label>

                                            <input value="<?=isset($_POST['matkhau']) ? $_POST['matkhau'] : ''?>" type="password" class="form-control" name="matkhau" placeholder="Mật khẩu">
                                        </div>
                                    </div>
                                    <?php if (!empty($err) && isset($err['matkhau'])) : ?>
                                        <div class="alert alert-danger">
                                            <strong>Danger!</strong> <?=$err['matkhau']?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <b>Quyền:</b>
                                        <div class="form-group">
                                            <label for="topic-name" class="col-form-label">
                                                <input <?php if(isset($_POST['quyen'])&&$_POST['quyen']==0) echo 'checked'; else echo '';?> type="radio" name="quyen" id="" value="0" checked>
                                                <span>User</span>
                                            </label>
                                            <label for="topic-name" class="col-form-label">
                                                <input <?php if(isset($_POST['quyen'])&&$_POST['quyen']==1) echo 'checked'; else echo '';?> type="radio" name="quyen" id="" value="1">
                                                <span>Admin</span>
                                            </label>


                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
                                    <button type="submit" name="btn-submit" class="btn btn-primary">Thêm tài khoản</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>