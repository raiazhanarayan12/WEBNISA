<?php
if (isset($_GET['nim'])) {
include("koneksi.php");
$Nim = $_GET['nim'];
$sql = "DELETE FROM mahasiswa WHERE nim='$Nim'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:data_mahasiswa.php");
} else {
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>