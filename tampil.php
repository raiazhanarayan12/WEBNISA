<?php
// Koneksi ke database (contoh menggunakan PDO)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pupersi_adbis";

try {
    $conn = new PDO("mysql:host=$servername;pupersi_adbis=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Query SQL untuk mengambil informasi file
    $sql = "SELECT * FROM files";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Menampilkan hasil query
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li><a href='uploads/" . $row['filename'] . "' target='_blank'>" . $row['filename'] . "</a></li>";
    }
    echo "</ul>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null; // Tutup koneksi database
?>
