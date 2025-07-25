<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pemerintahan</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body style="background: #f0f0f0">

    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <nav class="navbar navbar-inverse" style="border-radius: 0px">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">E-GOVERNMENT</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php">
                        <i class="glyphicon glyphicon-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="pegawai.php">
                        <i class="glyphicon glyphicon-user"></i> Data Pegawai
                    </a>
                </li>
                <li>
                    <a href="instansi.php">
                        <i class="glyphicon glyphicon-briefcase"></i> Data Instansi
                    </a>
                </li>
                <li>
                    <a href="laporan.php">
                        <i class="glyphicon glyphicon-folder-open"></i> Laporan
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="glyphicon glyphicon-wrench"></i>
                        Pengaturan <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="ganti_password.php">
                                <i class="glyphicon glyphicon-lock"></i>
                                Ganti Password
                            </a>
                        </li>
                        <li>
                            <a href="pengaturan_laporan.php">
                                <i class="glyphicon glyphicon-file"></i>
                                Pengaturan Laporan
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="logout.php">
                        <i class="glyphicon glyphicon-log-out"></i> Logout
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <p class="navbar-text">Halo, Yang Mulia <b><?= $_SESSION['username']; ?></b>!</p>
                </li>
            </ul>
        </div>
    </nav>

<div class="container">
  <div class="alert alert-info text-center">
    <h4>Selamat datang Yang Mulia <?= $_SESSION['username']; ?>!</h4>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Pegawai</h3>  
        </div>
        <div class="panel-body">
          <h1 class="text-center">
            
          <?php
         include "koneksi.php";
        
        // mengambil data pegawai
        $sql = "SELECT COUNT(*) AS jumlah FROM data_pegawai";  
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        echo number_format($row['jumlah']);
      ?>

         </h1>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Instansi</h3>
          </div>
        <div class="panel-body">
          <h1 class="text-center">
            
          <?php

// mengambil data instansi 
$sql = "SELECT COUNT(*) AS jumlah FROM data_instansi";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
echo number_format($row['jumlah']);
?>

          </h1>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Laporan Bulan Ini</h3>
        </div>
        <div class="panel-body">
          <h1 class="text-center">

          <?php

// mengambil jumlah laporan bulan ini
$sql =  "SELECT COUNT(*) AS jumlah FROM data_laporan 
         WHERE MONTH(tanggal_lapor) = MONTH(CURRENT_DATE())"; 
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
echo number_format($row['jumlah']);
?>
          </h1>
        </div>
      </div>  
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
        <center>
      <b>Selamat Datang di Sistem Informasi Pemerintahan</b>
      </center>
    </div>
    <div class="panel-body">
      Silakan pilih menu di bagian atas untuk mengelola data pemerintahan.
    </div>
  </div>
</div>
</body>
</html>