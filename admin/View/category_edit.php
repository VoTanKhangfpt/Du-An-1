<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?mod=category&act=list">Danh sách danh mục</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
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
                                <?php  
                                    if(is_array($category_list)){
                                        foreach($category_list as $category){
                                        extract($category);
                                ?>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Tên danh mục:</label>
                                        <input type="text" class="form-control" name="tendm" placeholder="Tên danh mục" value="<?=$tendm?>">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="topic-name" class="col-form-label">Ẩn hiện:</label>
                                            
                                            <select class="form-control" name="anhien">
                                                <option <?= $anhien==0 ? 'selected':''?>value="0">Ẩn</option>
                                                <option <?= $anhien==1 ? 'selected':''?> value="1">Hiện</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Hình ảnh</label>
                                            
                                            <input type="file" name="img" class="form-control" value="<?=$anh?>">
                                            <img src="../uploads/images/<?=$anh?>" alt="">
                                            
                                        </div>
                                        <input type="hidden" name="id" value="<?=$id?>">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="btn-submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                            <?php 
                                }
                            }
                            ?>
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