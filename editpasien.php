

<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['simpan'])) {
    $NamaL = $_POST['nama_lengkap'];
    $Nim= $_POST['nim'];
    $Prodi = $_POST['program_studi'];
    $Judul = $_POST['judul_penelitian'];
    $NamaP = $_POST['nama_pembingbing'];
    $tanggal = $_POST['tanggal_sempro'];


    // update user data
    $result = mysqli_query($conn, "UPDATE mahasiswa SET nama_lengkap='$NamaL',nim='$Nim',program_studi='$Prodi,judul_penelitian='$Judul',nama_pembingbing='$Namap',tanggal_sempro='$tanggal' WHERE nim=$Nim");

    // Redirect to homepage to display updated user in list
    header("Location: tabel.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$Nim = $_GET['nim'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim=$Nim");

while ($user_data = mysqli_fetch_array($result)) {
    $NamaL= $user_data['nama_lengkap'];
    $Nim = $user_data['nim'];
    $Prodi = $user_data['program_studi'];
    $Judul = $user_data['judul_penelitian'];
    $NamaP = $user_data['nama_pembingbing'];
    $tanggal= $user_data['tanggal_sempro'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HALLO.DOC!</title>

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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hallo.Doc! <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">