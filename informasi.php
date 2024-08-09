<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LPKIA</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-5">
                <img class src="img/foto.png" width = "50" height="60"></img>
                </div>
                <div class="sidebar-brand-text mx-3">LPKIA <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Input Data Mahasiswa</span></a>
            </li>

            <!-- Heading -->

             <!-- Divider -->
             <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Data Mahasiswa</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
 
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="persyaratan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Persyaratan</span></a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="informasi.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Informasi</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">PURPESI ADBIS</span>
                                <img class="img-profile rounded-circle"
                                    src="img/foto.png">
                            </a>
                          

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>
                    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Informasi</h1>

            <br><div><br>
            <a href="index.php" class="btn btn-danger">kembali</a>
            </div>
            
            <br><div><br>
            <a href="index.php" class="btn btn-danger">Tambah</a>
            </div>
        </header>
        <?php
        $no = 1;
if (isset($_SESSION["create"])) {
?>
<div class="alert alert-success">
    <?php 
    echo $_SESSION["create"];
    ?>
</div>
<?php
unset($_SESSION["create"]);
}
?>
 <?php
if (isset($_SESSION["update"])) {
?>
<div class="alert alert-success">
    <?php 
    echo $_SESSION["update"];
    ?>
</div>
<?php
unset($_SESSION["update"]);
}
?>
<?php
if (isset($_SESSION["delete"])) {
?>
<div class="alert alert-success">
    <?php 
    echo $_SESSION["delete"];
    ?>
</div>
<?php
unset($_SESSION["delete"]);
}
?>
      
        <br>

        <div class="search-container">
            
            <form action="data_pasien.php" method="GET">
                <input type="text" name="filter" placeholder="Masukkan kata kunci">
                <button type="submit">filter</button>
            </form>
        </div>
        <br>

       

        <table class="table table-bordered">
        <thead class="thead-dark">

            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
               <th>NIM</th>
               <th>Program Studi</th>
               <th>Judul Peneletian</th>
               <th>Nama Pembingbing</th>
               <th>Tanggal Seminar Proposal</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
        
        <?php
             include "koneksi.php";
            
             // Proses pencarian
             if (isset($_GET['cari'])) {
                 $cari = $_GET['cari'];
                 $sqlSelect = "SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%'";
             } else {
                 $sqlSelect = "SELECT * FROM mahasiswa";
             }
            // Proses pencarian
            if (isset($_GET['filter'])) {
                $cari = $_GET['filter'];
                $sqlSelect = "SELECT * FROM mahasiswa WHERE umur LIKE '%$cari%'";
            } else {
                $sqlSelect = "SELECT * FROM mahasiswa";
            }
 
             // Lakukan query SQL
             $result = mysqli_query($conn,$sqlSelect);
 
             // Periksa apakah ada data yang ditemukan
             if (mysqli_num_rows($result) > 0) {
                 $no = 1;
                 while ($data = mysqli_fetch_array($result)) {
                     ?>
            <tr>
            <td><?php echo $no++;?></td>
                <td><?php echo $data['Nama Lengkap']; ?></td>
                <td><?php echo $data['NIM']; ?></td>
                <td><?php echo $data['Program Studi']; ?></td>
                <td><?php echo $data['Judul Penelitian']; ?></td>
                <td><?php echo $data['Nama Pembingbing']; ?></td>
                <td><?php echo $data['Tanggal Seminar Proposal']; ?></td>
              
              <td>
              <a href="hapus.php?id=<?php echo $data['id_antrian'];?>" class="btn btn-danger" >Hapus</a>
                <a href="edit.php?id=<?php echo $data['id_antrian'];?>" class="btn btn-danger" >Edit</a>
              </td>
               
            </tr>
            
        
            
            <?php
            }
             }
        ?>
        </tbody>
        </table>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
        