<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?mod=page&act=dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- <div class="d-flex justify-content-end">
                <a href="?mod=product&act=add" class="btn btn-primary mb-2">
                    Thêm sản phẩm
                </a>
            </div> -->
            <div class="card-body px-0 pb-2 mt-n4 mx-3">
                <form action="?mod=order&act=filter" method="POST" id="filter-form">
                    <div class="select-wrapper">
                        <select name="locdonhang">
                            <option value="tất cả" selected>Tất cả</option>
                            <option value="chờ xử lý" <?=(isset($_POST['locdonhang'])&&$_POST['locdonhang']=='chờ xử lý') ? 'selected' : ''?>>Đơn hàng đang xử lý</option>
                            <option value="đang giao" <?=(isset($_POST['locdonhang'])&&$_POST['locdonhang']=='đang giao') ? 'selected' : ''?>>Đơn hàng đang giao</option>
                            <option value="thành công" <?=(isset($_POST['locdonhang'])&&$_POST['locdonhang']=='thành công') ? 'selected' : ''?>>Đơn hàng thành công</option>
                            <option value="đã hủy" <?=(isset($_POST['locdonhang'])&&$_POST['locdonhang']=='đã hủy') ? 'selected' : ''?>>Đơn hàng đã hủy</option>
                        </select>
                    </div>
                    <button class="filter-button" type="submit" name="Filter_order">Lọc</button>
                </form>
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
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Tên khách hàng</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Ghi chú</th>
                                        <th scope="col">Ngày đặt hàng</th>
                                        <th scope="col">Tổng tiền thanh toán</th>
                                        <th scope="col">Phương thức thanh toán</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php if (is_array($list_order)) :

                                        foreach ($list_order as $order) :
                                            extract($order);
                                    ?>
                                            <tr>
                                                <form action="?mod=order&act=edit" method="post">
                                                    <td><?= $id ?></td>
                                                    <td><?= $ten ?></td>
                                                    <td><?= $email ?></td>
                                                    <td><?= $sodienthoai ?></td>
                                                    <td><?= $diachi ?></td>
                                                    <td><?= $ghichu ?></td>
                                                    <td><?= $thoi_diem_mua ?></td>
                                                    <td><?= number_format($tongtien, 0, ",", ".") ?> VNĐ</td>
                                                    <td><?= $pttt ?></td>
                                                    <td>
                                                        <select name="trangthai">
                                                            <option value="chờ xử lý" <?php if ($trang_thai == "chờ xử lý")
                                                                                            echo "selected";
                                                                                        ?>>Chờ xử lý</option>
                                                            <option <?php if ($trang_thai == "đang giao")
                                                                        echo "selected";
                                                                    ?> value="đang giao">Đang giao</option>
                                                            <option <?php if ($trang_thai == "thành công")
                                                                        echo "selected";
                                                                    ?> value="thành công">Thành công</option>
                                                            <option <?php if ($trang_thai == "đã hủy")
                                                                        echo "selected";
                                                                    ?> value="đã hủy">Đã hủy</option>

                                                        </select>
                                                    </td>
                                                    <td id="thaotac">
                                                        <input type="hidden" name="idhd" value="<?= $id ?>">
                                                        <input type="submit" name="btn_edit" value="Cập nhật" class="btn btn-primary"></input>
                                                        <a href="?mod=order&act=detail&id=<?= $id ?>" class="btn btn-danger">Chi tiết</a>

                                                    </td>
                                                </form>
                                            </tr>

                                    <?php

                                        endforeach;
                                    endif;
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
                        <div class="paginition">
                            <?php if($currentPage>1){?>
                                
                            <a href="?mod=order&act=list&currentPage=<?=$Prev?>"><</a>
                            <?php }?>
                            <?= $paginition ?>

                            <?php if($currentPage<$tongsotrang){?>
                            <a href="?mod=order&act=list&currentPage=<?=$Next?>">></a>
                            <?php }?>
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

<!-- /.content-wrapper -->

<!-- <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="price2" placeholder="Giá củ sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Hình ảnh</label>
                        <input type="file" name="img" class="col-form-label" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Sản phẩm New</label>
                        <input type="checkbox" name="chknew" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Sản phẩm Hot</label>
                        <input type="checkbox" name="chkhot" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="5" style="width:100%; border:1px #CCC solid" class="col-form-label"></textarea>                        
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="level" class="col-form-label">Chọn danh mục:</label>
                            <select class="form-control select2" name="level">
                                <option selected value="member">Danh mục</option>
                                <option value="admin">Danh mục 1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary">Thêm mới</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </form>

        </div> -->
<!-- /.modal-content -->
<!-- </div> -->
<!-- /.modal-dialog -->
<!-- </div> -->