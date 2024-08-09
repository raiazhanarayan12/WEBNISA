<?php
include('koneksi.php');
if (isset($_POST["create"])) {
    $NamaL = mysqli_real_escape_string($conn, $_POST["nama_lengkap"]);
    $Nim = mysqli_real_escape_string($conn, $_POST["nim"]);
    $Tahun = mysqli_real_escape_string($conn, $_POST["tahun"]);
    $Prodi = mysqli_real_escape_string($conn, $_POST["program_studi"]);
    $Judul= mysqli_real_escape_string($conn, $_POST["judul_penelitian"]);
    $NamaP = mysqli_real_escape_string($conn, $_POST["nama_pembingbing"]);
    $Tanggal = mysqli_real_escape_string($conn, $_POST["tanggal_sempro"]);
   
    $sqlInsert = "INSERT INTO mahasiswa(nama_lengkap, nim , tahun , program_studi , judul_penelitian , nama_pembingbing , tanggal_sempro) VALUES ('$NamaL','$Nim','$Tahun','$Prodi', '$Judul','$NamaP','$Tanggal')";
    
    if(mysqli_query($conn,$sqlInsert)){ 
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:data_mahasiswa.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["simpan"])) {
  
    $NamaL= mysqli_real_escape_string($conn, $_POST["nama_lengkap"]);
    $Tahun= mysqli_real_escape_string($conn, $_POST["tahun"]);
    $Prodi= mysqli_real_escape_string($conn, $_POST["program_studi"]);
    $Judul= mysqli_real_escape_string($conn, $_POST["judul_penelitian"]);
    $NamaP= mysqli_real_escape_string($conn, $_POST["nama_pembingbing"]);
    $Tanggal= mysqli_real_escape_string($conn, $_POST["tanggal_sempro"]);
  
   
    $id = mysqli_real_escape_string($conn, $_POST["nim"]);
    $sqlUpdate = "UPDATE mahasiswa SET nama_lengkap=  '$Prodi', tahun= '$Tahun', program_studi= '$Judul',judul_penelitian= '$NamaP', nama_pembingbing= '$Tanggal', tanggal_sempro= '$Tanggal'WHERE nama_lengkap='$NamaL'";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Book Updated Successfully!";
        header("Location:data_mahasiswa.php");
    }else{
        die("Something went wrong");
    }
}

?>