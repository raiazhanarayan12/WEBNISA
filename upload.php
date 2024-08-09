<?php
// Pastikan form telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Direktori tempat menyimpan file di server
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Periksa apakah file sudah ada
    if (file_exists($targetFile)) {
        echo "Maaf, file sudah ada.";
        $uploadOk = 0;
    }

    // Periksa ukuran file (misalnya, maksimal 5MB)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Hanya izinkan jenis file tertentu
    if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx" && $fileType != "txt" && $fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
        echo "Maaf, hanya file PDF, DOC, DOCX, TXT, JPG, JPEG, PNG, GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Jika $uploadOk bernilai 0, gagal mengunggah file
    if ($uploadOk == 0) {
        echo "Maaf, file tidak dapat diunggah.";
    } else {
        // Jika semua kondisi terpenuhi, coba unggah file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File " . basename($_FILES["fileToUpload"]["name"]) . " berhasil diunggah.";

            // Simpan informasi file ke dalam database
            $filename = basename($_FILES["fileToUpload"]["name"]);
            $filesize = $_FILES["fileToUpload"]["size"];
            $filetype = $_FILES["fileToUpload"]["type"];

            // Simpan informasi file ke dalam database (contoh menggunakan PDO)
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "pupersi_adbis";

            try {
                $conn = new PDO("mysql:host=$servername;pupersi_adbis=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // Query SQL untuk menyimpan informasi file
                $sql = "INSERT INTO files (filename, filesize, filetype) VALUES (:filename, :filesize, :filetype)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':filename', $filename);
                $stmt->bindParam(':filesize', $filesize);
                $stmt->bindParam(':filetype', $filetype);
                $stmt->execute();

                echo "Informasi file berhasil disimpan ke dalam database.";
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            $conn = null; // Tutup koneksi database
        } else {
            echo "Maaf, terjadi kesalahan saat mengunggah file.";
        }
    }
}
?>
