<?php

include 'conn.php';

if(isset($_GET['data_walet'])){
$dataWalet = $_GET['data_walet'];
urldecode($dataWalet);
str_split($dataWalet);
$dataMasuk = [];
$dataKeluar = [];
$dataPopulasi = [];
$pos = -1;
for ($i = 0; $i < strlen($dataWalet); $i++){
    if($dataWalet[$i] != '#'){
        if($pos == 0){
            array_push($dataMasuk, $dataWalet[$i]);
        } else if($pos == 1){
            array_push($dataKeluar, $dataWalet[$i]);
        } else if($pos == 2){
            array_push($dataPopulasi, $dataWalet[$i]);
        }
    } else {
        $pos++;
        continue;
    }
}

$dataMasuk = implode($dataMasuk);
$dataKeluar = implode($dataKeluar);
$dataPopulasi = implode($dataPopulasi);

$sql = "INSERT INTO data (data_masuk, data_keluar, jumlah_populasi) VALUES ($dataMasuk, $dataKeluar, $dataPopulasi)";
$conn->query($sql);
return http_response_code(200);
}
?>

<?php

$sql = "SELECT * FROM data ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monitoring Populasi Walet | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Monitoring Populasi Walet</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="Macca Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MACCA LAB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-header">Sub-Menu</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Menu 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Menu 2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Menu 3</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="jumlah-populasi"><?= $row['jumlah_populasi']; ?></h3>

                <p>Total Walet</p>
              </div>
              <div class="icon">
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="data-masuk"><?= $row['data_masuk']; ?></h3>

                <p>Masuk</p>
              </div>
              <div class="icon">
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 id="data-keluar"><?= $row['data_keluar']; ?></h3>

                <p>Keluar</p>
              </div>
              <div class="icon">
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        <div class="row">
          <div class="col-lg">

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Camera</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <div class="ml-2 mb-2">
                  <iframe src="http://192.168.0.169:8080" width="1220" height="400"></iframe>
                </div>
              </div>
            </div>
            <!-- /card -->

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2016-2022 <a href="https://maccalab.com">Maccalab.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>
<script>
    //update UI
    $(document).ready(function(){
      setInterval(function(){
        $.ajax({
            url: "http://localhost/monitoring-rbw/getData.php",
            method: 'get',
            dataType: 'json',
            success: function(data){
              $('#data-masuk').html(data.data_masuk);
              $('#data-keluar').html(data.data_keluar);
              $('#jumlah-populasi').html(data.jumlah_populasi);
            }
        });
      }, 1000);
    });
</script>