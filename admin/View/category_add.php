<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Chuyên mục</li>
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
                            <form action="?mod=category&act=add" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Tên danh mục:</label>
                                        <input type="text" class="form-control" name="tendm" placeholder="Tên danh mục">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="topic-name" class="col-form-label">Ẩn hiện:</label>

                                            <select class="form-control select2" name="anhien">
                                                <option selected value="0">Ẩn</option>
                                                <option value="1">Hiện</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label"></label>

                                            <input type="file" class="form-control" name="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
                                    <button type="submit" name="btn-submit" class="btn btn-primary">Thêm sản phẩm</button>
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