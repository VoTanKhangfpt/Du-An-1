<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="?mod=page&act=dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php if (!empty($countProduct)) echo $countProduct ?></h3>

              <p>Tổng sản phẩm</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php if (!empty($countCategory)) echo $countCategory ?><sup style="font-size: 20px"></sup></h3>

              <p>Tổng danh mục</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php if (!empty($countUser)) echo $countUser ?></h3>

              <p>Tài khoản đã đăng ký</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php if (!empty($sumTotalOrders)) echo number_format($sumTotalOrders, 0, ",", ".") ?> VNĐ</h3>

              <p>Tổng doanh thu</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <div class="row">
    <div class="col-md-6">

      <div class="card">
        <div class="card-header">
          <strong>Thống kê sản phẩm theo chủ đề</strong>
        </div>
        <div class="card-body">
          <div id="myChart" style="height:500px;">
          </div>
          <table>
            <thead>
              <tr>
                <th class="text-start">Chủ đề</th>
                <th>Số lượng sách</th>
                <th>Giá trung bình</th>
                <th>Giá cao nhất</th>
                <th>Giá thất nhất</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($getAll_Cate_byProduct as $dssp) : extract($dssp) ?>
                <tr>

                  <td class="text-start"><?= $TenCD ?></td>
                  <td><?= $SoLuong ?></td>
                  <td><?= number_format(round(max(500, $TrungBinh * 0.5 / 100))) ?> đ</td>
                  <td><?= number_format(round(max(500, $CaoNhat * 0.5 / 100))) ?> đ</td>
                  <td><?= number_format(round(max(500, $ThapNhat * 0.5 / 100))) ?> đ</td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <strong>Thống kê doanh thu</strong>
        </div>
        <div class="card-body">
          <div id="myChart2" style="height:500px;">
          </div>
          <table>
            <thead>
              <tr>
                <th class="text-start pe-3">Tháng/Năm</th>
                <th class="px-3">Số lượng người mua</th>
                <th class="pe-3">Số lượt mua</th>
                <th class="text-end">Doanh thu</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tkThangNam as $dssp) : ?>
                <tr>

                  <td class="text-start"><?= $dssp['Thang'] . '/' . $dssp['Nam'] ?></td>
                  <td class="text-center"><?= $dssp['SoNguoiMua'] . ' bạn' ?></td>
                  <td class="text-center"><?= $dssp['SoLuotMua'] . ' lượt' ?></td>
                  <td class="text-end"><?= number_format($dssp['DoanhThu']) ?> VND</td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /.content-wrapper -->
<script>
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    // Set Data
    const data = google.visualization.arrayToDataTable([

      ['Chủ đề', 'Số lượng'],
      <?php foreach ($getAll_Cate_byProduct as $dssp) : ?>['<?= $dssp['TenCD'] ?>', <?= $dssp['SoLuong'] ?>],
      <?php endforeach; ?>

    ]);

    // Set Options
    const options = {
      title: 'Biểu đồ thống kê sản phẩm theo danh mục',
      is3D: true
    };

    // Draw
    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);

  }
</script>
<script>
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    const data = google.visualization.arrayToDataTable([
      ['Tháng/Năm', 'Doanh thu'],
      <?php foreach ($tkThangNam as $dssp) : ?>['<?= $dssp['Thang'] . '/' . $dssp['Nam'] ?>', <?= $dssp['DoanhThu'] ?>],
      <?php endforeach; ?>
    ]);

    const options = {
      title: 'Biểu đồ thống kê doanh thu theo tháng năm'
    };

    const chart = new google.visualization.ColumnChart(document.getElementById('myChart2'));
    chart.draw(data, options);
  }
</script>