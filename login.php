<?php
session_start();
include 'coneksi.php'; // Pastikan file koneksi.php berfungsi

// Ambil data dari form
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query untuk mengambil data pengguna berdasarkan username
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

// Cek apakah ada hasil
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Verifikasi password
    if (password_verify($password, $row['password'])) {
        // Simpan data sesi
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $row['role']; // Misalkan Anda punya kolom role

        // Arahkan ke halaman yang sesuai berdasarkan peran
        if ($row['role'] == 'admin') {
            header("Location: admin/indexadmin.php"); // Ganti dengan halaman admin yang sesuai
        } else {
            header("Location: index.php"); // Ganti dengan halaman user yang sesuai
        }
        exit();
    } else {
        echo "Username atau Password salah";
    }
} else {
    echo "Username atau Password salah";
}

// Tutup koneksi
mysqli_close($conn);
?>
