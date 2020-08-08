<?php
include '../../config/conn.php';
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
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php">App Kursus</a>
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
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../../images/user_image/sidik.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Sidik Mulyana</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <!--View Nilai-->
        <li><a class="app-menu__item active" href="../../index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>

        <!--Data Nilai-->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Data Nilai</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--View Nilai-->
            <li><a class="treeview-item" href="../view_nilai.php"><i class="icon fa fa-circle-o"></i> View Data Nilai</a></li>
          </ul>
        </li>

        <!--Data Siswa-->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Data Siswa</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--View Siswa-->
            <li><a class="treeview-item" href="../view_siswa.php"><i class="icon fa fa-circle-o"></i> View Data Siswa</a></li>
          </ul>
        </li>

        <!--Data Kelas-->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Data Kelas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <!--View Kelas-->
            <li><a class="treeview-item" href="../view_kelas.php"><i class="icon fa fa-circle-o"></i> View Data Kelas</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Edit Data Kelas</h1>
          <p>Halaman untuk edit data Kelas</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><a href="../../index.php"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item">Data Kelas</li>
          <li class="breadcrumb-item active"><a href="../view_kelas.php">View Data Kelas</a></li>
          <li class="breadcrumb-item active"><a href="#">Edit Data Kelas</a></li>
        </ul>
      </div>
      <div class="row">
          <div class="col-md-6">
            <div class="tile">
              <h3 class="tile-title">Form Kelas</h3>
              <div class="tile-body">

                <!--[AWAL] CREATE Kelas-->
                <?php

                $edit = $_GET['edit'];

                $query_edit = mysqli_query($conn, "SELECT * FROM t_kelas WHERE id_kelas='$edit'");

                while ($result = mysqli_fetch_array($query_edit)) 
                {
                ?>

                <form action="update_kelas.php" method="POST">
                  <div class="form-group">
                    <input class="form-control" type="hidden" name="idKelas" value="<?php echo $result['id_kelas']; ?>">
                  </div>

                  <div class="form-group">
                    <label class="control-label">Nama Kelas</label>
                    <input class="form-control" type="text" name="namaKelas" placeholder="Ketikan Nama Kelas Anda" value="<?php echo $result['nama_kelas']; ?>">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Tahun Ajar</label>
                    <input class="form-control" type="text" name="thAjar" value="<?php echo $result['th_ajar']; ?>">
                  </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="Submit" name="submit" value="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-warning" type="reset" value="Reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Reset</button>
                  </div>
                </form>

                <?php
                }
                ?>
                <!--[AKHIR] CREATE Kelas-->

              </div>
            </div>
          </div>

          <!--[AWAl] JENIS KELAS-->
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
    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../../js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="../../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
  </body>
</html>