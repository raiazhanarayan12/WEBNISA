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
        <ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-5">
                    <img class src="img/foto.png" width = "50" height="60"></img>
                </div>
                <div class="sidebar-brand-text mx-3">LPKIA <sup></sup></div>
            </a>

             <!-- Heading -->


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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">PUPERSI ADBIS</span>
                                <img class="img-profile rounded-circle"
                                    src="img/fotoadbis.png">
                            </a>
                           

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">



<div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Ubah Data</h1>
            <div>
            <a href="data_mahasiswa.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="index1.php" method="post">
            <?php 
            

            if (isset($_GET['nim'])) {
                include("koneksi.php");
                $Nim = $_GET['nim'];
                $sql = "SELECT * FROM mahasiswa WHERE nim=$Nim";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>

<br>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="nama_lengkap" placeholder="nama:"value="<?php echo $row["nama_lengkap"]; ?>">
            </div>
         
            <div class="form-element my-4">
            <input type="text" class="form-control" name="program_studi" placeholder="Author Name:" value="<?php echo $row["program_studi"]; ?>">
            </div>
             <div class="form-element my-4">
            <input type="text" class="form-control" name="judul_penelitian" placeholder="Author Name:" value="<?php echo $row["judul_penelitian"]; ?>">
            </div>
            <div class="form-element my-4">
            <input type="text" class="form-control" name="nama_pembingbing" placeholder="Author Name:" value="<?php echo $row["nama_pembingbing"]; ?>">
            </div>
            <div class="form-element my-4">
            <input type="date" class="form-control" name="tanggal_sempro" placeholder="tanggal_sempro:" value="<?php echo $row["tanggal_sempro"]; ?>">
            </div>
            <input type="hidden" value="<?php echo $Nim; ?>" name="nim">
            <div class="form-element my-4">
                <input type="submit" name="simpan" value="Ubah" class="btn btn-success">
            </div>
                <?php
            }else{
                echo "<h3>Book Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>


            