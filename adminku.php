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

                    



<?php
$servername = "localhost"; // Ganti sesuai konfigurasi Anda
$username = "root"; // Ganti sesuai konfigurasi Anda
$password = ""; // Ganti sesuai konfigurasi Anda
$dbname = "pupersi_adbis"; // Ganti sesuai nama database Anda

// Buat koneksi
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

// Proses pengiriman informasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    $is_checked = isset($_POST['is_checked']) ? 1 : 0; // Ambil status checkbox

    // Siapkan dan jalankan pernyataan
    $stmt = $mysqli->prepare("INSERT INTO notifications (message, is_checked) VALUES (?, ?)");
    $stmt->bind_param("si", $message, $is_checked);
    if ($stmt->execute()) {
        echo "Informasi berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Kirim Informasi</title>
</head>
<body>
    <h5>Kirim Informasi ke Pengguna</h5>
    <form method="POST" action="">
        <textarea name="message" rows="4" cols="50" placeholder="Masukkan informasi..." required></textarea><br>
        <label>
            <input type="checkbox" name="is_checked"> Tandai sebagai dibaca
        </label><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>