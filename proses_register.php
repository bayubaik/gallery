<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];

try {
    $sql = mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password','$email','$namalengkap','$alamat')");

    if ($sql) {
        // Jika penambahan data berhasil
        echo "<script>alert('Data berhasil ditambahkan');</script>";
    } else {
        // Jika terjadi kesalahan, tetapi bukan kesalahan duplikat
        echo "<script>alert('Gagal menambahkan data');</script>";
    }
} catch (mysqli_sql_exception $e) {
    // Tangani kesalahan jika terjadi duplikat pada kolom email
    if ($e->getCode() == 1062) {
        echo "<script>alert('Email sudah terdaftar, silakan gunakan email lain');</script>";
    } else {
        // Tangani kesalahan lainnya
        echo "<script>alert('Terjadi kesalahan: " . $e->getMessage() . "');</script>";
    }
}

// Redirect ke halaman login.php setelah selesai
echo "<script>window.location='login.php';</script>";
?>
