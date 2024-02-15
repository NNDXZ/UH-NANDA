<!DOCTYPE html>
<html>
<head>
    <title>Hapus Toilet</title>
    <!-- Memuat file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?> 
    <div class="container">
    <?php
        // Cek apakah ada pesan sukses yang dikirim dari proses hapus
        if(isset($_GET['hapus']) && $_GET['hapus'] == 'sukses'){
            echo '<div class="alert alert-success" role="alert">
                    Toilet berhasil dihapus!
                  </div>';
        }
        ?>
        <h2>Hapus Toilet</h2>
        <p>Apakah Anda yakin ingin menghapus toilet ini?</p>
        <?php $id = $_GET['id'];?>
        <form method="post" action="proses_hapus_toilet.php?id=<?php echo $id; ?>">
            <!-- Tambahkan fungsi confirm di sini -->
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus toilet ini?')">Hapus</button>
            <a href="hasil.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    <!-- Memuat file JS Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
