<!DOCTYPE html>
<html>
<head>
    <title>Tambah Toilet Baru</title>
    <!-- Memuat file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?> 
    <div class="container">
        <h2>Tambah Toilet Baru</h2>
        <form method="post" action="proses_tambah_toilet.php">
            <div class="form-group">
                <label for="lokasi">Lokasi:</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi">
            </div>
            <div class="form-group">
                <label for="jumlah_fasilitas">Jumlah Fasilitas:</label>
                <input type="number" class="form-control" id="jumlah_fasilitas" name="jumlah_fasilitas">
            </div>
            <div class="form-group">
                <label for="kebersihan">Kebersihan:</label>
                <select class="form-control" id="kebersihan" name="kebersihan">
                    <option value="bersih">Bersih</option>
                    <option value="sedang">Sedang</option>
                    <option value="kotor">Kotor</option>
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
