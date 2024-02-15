<?php
include 'fungsi_crud.php';

// Tangkap data dari form
$id = $_POST['id'];
$lokasi = $_POST['lokasi'];
$jumlah_fasilitas = $_POST['jumlah_fasilitas'];
$kebersihan = $_POST['kebersihan'];

// Update toilet di database
if (update_toilet($id, $lokasi, $jumlah_fasilitas, $kebersihan)) {
    header("Location: hasil.php"); // Redirect ke halaman utama
} else {
    echo "Gagal mengedit toilet";
}
?>
