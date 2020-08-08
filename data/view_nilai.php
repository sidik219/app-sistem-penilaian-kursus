<?php
include '../config/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Sistem Penilaian Kursus</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="../index.php">App Kursus</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../images/user_image/sidik.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Sidik Mulyana</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <!--View Nilai-->
        <li><a class="app-menu__item active" href="../index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>

        <!--Data Nilai-->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Data Nilai</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--View Nilai-->
            <li><a class="treeview-item" href="view_nilai.php"><i class="icon fa fa-circle-o"></i> View Data Nilai</a></li>
          </ul>
        </li>

        <!--Data Siswa-->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Data Siswa</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--View Siswa-->
            <li><a class="treeview-item" href="view_siswa.php"><i class="icon fa fa-circle-o"></i> View Data Siswa</a></li>
          </ul>
        </li>

        <!--Data Kelas-->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Kelas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--View Kelas-->
            <li><a class="treeview-item" href="view_kelas.php"><i class="icon fa fa-circle-o"></i> View Data Kelas</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> View Data Nilai</h1>
          <p>Table untuk menampilkan jumlah data nilai</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item">Data Nilai</li>
          <li class="breadcrumb-item active"><a href="view_nilai.php">View Data Nilai</a></li>
        </ul>
      </div>
      <!--Add Kelas-->
      <div class="row">
        <div class="col-lg-7">
          <p class="bs-component">
            <button class="btn btn-primary" type="button">
              <a href="nilai_siswa.php" style="color: white;"> Data Nilai Siswa</a>
            </button>
            <button class="btn btn-primary" type="button">
              <a href="cetak_data/cetak_nilai.php" style="color: white;"> Cetak Data Nilai</a>
            </button>
          </p>
        </div>
      </div>
      
      <!--DATATABLE KELAS-->
      <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-10">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <div class="table-responsive">
              <table class="table">
                <thead>
                    <tr style="color: white; background-color: #148f86;">
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Nama Kelas</th>
                      <th>Nilai Reading</th>
                      <th>Nilai Writing</th>
                      <th>Nilai Listening</th>
                      <th>Aksi</th>
                      <th style="display:none;"></th>
                    </tr>
                  </thead>

                  <!--[AWAL] SQL VIEW-->
                  <?php
                    $sql_view = mysqli_query($conn, 'SELECT id_nilai,nama_siswa,nama_kelas,nilai_reading,nilai_writing,nilai_listening FROM t_nilai,t_siswa,t_kelas WHERE t_nilai.id_siswa=t_siswa.id_siswa AND t_nilai.id_kelas=t_kelas.id_kelas');

                    $no = 1;
                    while ($result = mysqli_fetch_row($sql_view)){
                  ?>

                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td style="display:none;"><?php echo $result[0]; ?></td>
                      <td><?php echo $result[1]; ?></td>
                      <td><?php echo $result[2]; ?></td>
                      <td><?php echo $result[3]; ?></td>
                      <td><?php echo $result[4]; ?></td>
                      <td><?php echo $result[5]; ?></td>
                      <td>
                          <button class="btn btn-success" type="button">
                            <a href='proses/edit_nilai.php?edit=<?php echo $result[0];?>' style="color: white;">Edit</a>
                          </button>
                          <button class="btn btn-danger" type="button">
                            <a href='proses/delete_nilai.php?delete=<?php echo $result[0];?>' style="color: white;">Delete</a>
                          </button>
                      </td>
                    </tr>
                  </tbody>

                  <?php
                    }
                  ?>
                  <!--[AKHIR] SQL VIEW-->

              </table>
            </div>
          </div>
        </div>

        <!--[AWAl] ENIS KELAS-->
        <div class="col-md-2">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <table class="table table-striped">
              <thead>
                <tr style="color: white; background-color: #148f86;">
                  <th style="text-align: center;">Kelas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-size: x-small;">[E] Elemmentary </td>
                </tr>
                <tr>
                  <td style="font-size: x-small;">[I] Intermediate</td>
                </tr>
                <tr>
                  <td style="font-size: x-small;">[A] Advance</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!--[AKHIR] JENIS KELAS-->

      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    </script>
  </body>
</html>