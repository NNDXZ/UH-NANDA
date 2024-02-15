<?php
include 'fungsi_crud.php';

// Tangkap ID toilet dari URL
$id = $_GET['id'];

// Hapus toilet dari database
if (hapus_toilet($id)) {
    header("Location: hasil.php"); // Redirect ke halaman utama
} else {
    echo "Gagal menghapus toilet";
}
?>
