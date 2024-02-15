<?php
// Include file koneksi database
include 'koneksi.php'; // Ganti 'koneksi.php' dengan file koneksi Anda

// Inisialisasi variabel $toilet
$toilet = array();

// Mendapatkan ID toilet dari parameter GET
$id = $_GET['id'];

// Query untuk mengambil data toilet berdasarkan ID
$sql = "SELECT * FROM toilet WHERE id = $id";

// Eksekusi query
$result = $conn->query($sql);

// Memeriksa apakah query berhasil dieksekusi
if ($result) {
    // Memeriksa apakah ada data toilet yang ditemukan
    if ($result->num_rows == 1) {
        // Mengambil baris data toilet sebagai asosiatif array
        $toilet = $result->fetch_assoc();
    } else {
        // Jika data toilet tidak ditemukan, redirect atau keluarkan pesan kesalahan
        // Misalnya:
        // header("Location: halaman_error.php");
        // exit();
        echo "Data toilet tidak ditemukan.";
    }
} else {
    // Jika query tidak berhasil dieksekusi, keluarkan pesan kesalahan
    echo "Error: " . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Toilet</title>
    <!-- Memuat file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?> 
    <div class="container">
        <h2>Edit Toilet</h2>
        
        <form method="post" action="proses_edit_toilet.php">
            <input type="hidden" name="id" value="<?php echo $toilet['id']; ?>">
            <div class="form-group">
                <label for="lokasi">Lokasi:</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?php echo $toilet['lokasi']; ?>">
            </div>
            <div class="form-group">
                <label for="jumlah_fasilitas">Jumlah Fasilitas:</label>
                <input type="number" class="form-control" id="jumlah_fasilitas" name="jumlah_fasilitas" value="<?php echo $toilet['jumlah_fasilitas']; ?>">
            </div>
            <div class="form-group">
                <label for="kebersihan">Kebersihan:</label>
                <select class="form-control" id="kebersihan" name="kebersihan">
                    <option value="bersih" <?php if ($toilet['kebersihan'] == 'bersih') echo 'selected'; ?>>Bersih</option>
                    <option value="sedang" <?php if ($toilet['kebersihan'] == 'sedang') echo 'selected'; ?>>Sedang</option>
                    <option value="kotor" <?php if ($toilet['kebersihan'] == 'kotor') echo 'selected'; ?>>Kotor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <!-- Memuat file JS Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
