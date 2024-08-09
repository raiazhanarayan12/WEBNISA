<?php
include('koneksi.php');
include('koneksii.php');

if (isset($_POST["create"])) {
   
    $nama= mysqli_real_escape_string($conn, $_POST["nama_lengkap"]);
    $prodi = mysqli_real_escape_string($conn, $_POST["prodi"]);
    $seminar = mysqli_real_escape_string($conn, $_POST["serti_seminar"]);
    $workshop = mysqli_real_escape_string($conn, $_POST["serti_workshop"]);
    $internasional = mysqli_real_escape_string($conn, $_POST["serti_internasional"]);
    $nasional = mysqli_real_escape_string($conn, $_POST["serti_nasional"]);
    $pkkmb= mysqli_real_escape_string($conn, $_POST["pkkmb"]);
    $makrab= mysqli_real_escape_string($conn, $_POST["makrab"]);
    $tambahan = mysqli_real_escape_string($conn, $_POST["tambahan"]);
    
   
    $sqlInsert = "INSERT INTO pengumpulan(nama_lengkap,prodi, serti_seminar , serti_workshop, serti_internasional , serti_nasional, pkkmb, makrab, tambahan) VALUES ('$nama','$prodi','$seminar', '$workshop','$internasional','$nasional','$pkkmb','$makrab','$tambahan')";
    if(mysqli_query($conn,$sqlInsert)){ 
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:informasiku.php");
    }else{
        die("Something went wrong");
    }
}
