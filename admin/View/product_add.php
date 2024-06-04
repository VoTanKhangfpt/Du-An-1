<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?mod=product&act=list">Danh sách sản phẩm</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
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
                                        <input type="text" class="form-control" name="ten" placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="gia" placeholder="Giá củ sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="gia_km" placeholder="Giá khuyến mãi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Hình ảnh</label>
                                        <input type="file" name="hinh" class="col-form-label" id="hinh">
                                    </div>
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Sản phẩm Hot:</label><br>

                                        <input type="radio" id="hot" name="hot" value="1">
                                        <label for="hot">Hot</label><br>
                                        <input type="radio" id="binhthuong" name="hot" value="0">
                                        <label for="binhthuong">Bình thường</label><br>



                                    </div>

                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Mô tả</label>
                                        <textarea name="mota" id="" cols="30" rows="5" style="width:100%; border:1px #CCC solid" class="col-form-label"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Ẩn/Hiện</label>
                                            <select class="form-control select2" name="an_hien">

                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiện</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Chọn danh mục:</label>
                                            <select class="form-control select2" name="iddm">
                                                <?php foreach ($category_list as $category) :
                                                    extract($category) ?>
                                                    <option value="<?= $id ?>"><?= $tendm ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Chọn nhà sản xuất:</label>
                                            <select class="form-control select2" name="id_nhasx">
                                                <?php foreach ($nhaxs_list as $nhaxs) :
                                                    extract($nhaxs);
                                                ?>
                                                    <option value="<?= $id ?>"><?= $ten ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Khối lượng:</label>
                                            <input type="text" class="form-control" name="can_nang" placeholder="Khối lượng">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Màu sắc:</label>
                                            <input type="text" class="form-control" name="mau_sac" placeholder="Màu sắc">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary" name="btn-submit">Thêm</button>

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
<!-- /.content-wrapper -->