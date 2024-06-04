<?php
if (isset($thongbao) && $thongbao !== '') {
    echo "<script>
            alert('" . $thongbao . "');   
        </script>";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tài khoản</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?mod=page&act=dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tài khoản</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <a href="index.php?mod=user&act=add" class="btn btn-primary mb-2">
                    Thêm tài khoản
                </a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center;">Mã tài khoản</th>
                                        <th scope="col" style="text-align: center;">Tên tài khoản</th>
                                        <th scope="col" style="text-align: center;">Email</th>
                                        <th scope="col" style="text-align: center;">Số điện thoại</th>
                                        <th scope="col" style="text-align: center;">Ngày tạo</th>
                                        <th scope="col" style="text-align: center;">Quyền</th>

                                        <th scope="col" style="text-align: center;">Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if (is_array($listuser)) {
                                        foreach ($listuser as $user) {
                                            extract($user);


                                    ?>
                                            <tr>
                                                <td><?= $id ?></td>
                                                <td><?= $ten ?></td>
                                                <td><?= $email ?></td>
                                                <td><?= $sodienthoai ?></td>
                                                <td><?= $ngaydangky ?></td>
                                                <td><?= ($quyen >= 1) ? 'admin' : 'user' ?></td>
                                                <td align="center">
                                                    <?php if ($quyen >= 1) : ?>
                                                        <a href="index.php?mod=user&act=edit&id=<?= $id ?>&quyen=<?= $quyen ?>" class="btn btn-primary">Sửa</a>
                                                    <?php else : ?>
                                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                            Sửa
                                                        </button> -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                            Sửa
                                                        </button>

                                                    <?php endif; ?>

                                                    <a href="?mod=user&act=delete&id=<?= $id ?>" class="btn btn-danger">Xóa</a>
                                                </td>

                                            </tr>
                                    <?php

                                        }
                                    }
                                    ?>


                                </tbody>
                                <!-- <tfoot>

                                <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên chủ đề</th>
                                        <th scope="col">Chế độ</th>
                                        <th scope="col">Số lượng câu hỏi</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </tfoot> -->
                            </table>
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



<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Thông báo</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            Không thể cập nhật tài khoản của người dùng user
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- <script>
        document.location = 'index.php?mod=user&act=list';
    </script> -->
<!-- <script>
        alert('Không thể cập nhật tài khoản của người dùng user');
        document.location = 'index.php?mod=user&act=list';
    </script> -->

<!-- Latest compiled and minified CSS -->
