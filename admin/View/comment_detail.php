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
                    <h1><?php if (isset($product_list)) echo $product_list['ten']; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?mod=comment&act=list">Danh sách bình luận theo sản phẩm</a></li>
                        <li class="breadcrumb-item active">Bình luận</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- <div class="d-flex justify-content-end">
                <a  href="index.php?mod=category&&act=add" class="btn btn-primary mb-2">
                    Thêm danh mục
                </a>
            </div> -->
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
                                        <th scope="col" style="text-align: center;">Mã bình luận</th>
                                        <th scope="col" style="text-align: center;">Nội dung bình luận</th>
                                        <th scope="col" style="text-align: center;">Ngày bình luận</th>
                                        <th scope="col" style="text-align: center;">Người bình luận</th>
                                        <th scope="col" style="text-align: center;">Phê duyệt</th>

                                        <th scope="col" style="text-align: center;">Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if (is_array($comment_list)) {
                                        foreach ($comment_list as $commnet) {

                                            extract($commnet);


                                    ?>
                                            <tr>
                                                <td><?= $idbl ?></td>
                                                <td><?= $noidung ?></td>
                                                <td><?= $thoigianbinhluan ?></td>
                                                <td><?= $ten ?></td>
                                                <td style="text-align: center;">
                                                    <label class="switch">
                                                        <input type="checkbox" class="toggle-comment" data-id="<?php echo $idbl ?>" <?php if ($trangthai == 1) echo 'checked' ?>>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td align="center">


                                                    <a href="?mod=comment&act=delete&id=<?= $idbl ?>&idsp=<?= $product_list['id'] ?>" class="btn btn-secondary">Xóa</a>
                                                </td>

                                            </tr>
                                    <?php

                                        }
                                    }
                                    ?>


                                </tbody>

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
<!-- /.content-wrapper -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function toggleStatus(idbl) {
        var id = idbl;
        var status = $('#toggle-' + id).is(':checked') ? 1 : 0; // Lấy trạng thái của checkbox

        $.ajax({
            url: "index.php?mod=comment&act=edit",
            type: "post",
            data: {
                catId: id,
                status: status
            }, // Gửi id và trạng thái mới tới server
            success: function(result) {
                if (result == 1) {
                    swal("Done!", "status is ON", "success");
                } else {
                    swal("Error!", "status is OFF", "error");
                }
            }
        });
    }
</script> -->


<script>
    $(document).ready(function() {
        $(".toggle-comment").click(function() {
            var diachi = "http://localhost/Git_Hub/Du-An-1/admin/index.php?mod=comment&act=edit";
            var status = $(this).is(':checked') ? 1 : 0;
            var id = $(this).attr('data-id');
            $.ajax({
                url: diachi,
                data: {
                    catId: id
                },
                method: "POST",
                cache: false,
                success: function(data) {
                    console.log(data);
                }
            });
        })
    })
</script>