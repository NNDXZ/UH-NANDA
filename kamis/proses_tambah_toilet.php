<?php
include 'fungsi_crud.php';

// Tangkap data dari form
$lokasi = $_POST['lokasi'];
$jumlah_fasilitas = $_POST['jumlah_fasilitas'];
$kebersihan = $_POST['kebersihan'];

// Tambah toilet ke database
if (tambah_toilet($lokasi, $jumlah_fasilitas, $kebersihan)) {
    header("Location: hasil.php"); // Redirect ke halaman utama
} else {
    echo "Gagal menambahkan toilet";
}
?>
