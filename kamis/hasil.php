<!DOCTYPE html>
<html>
<head>
    <title>CRUD Toilet Umum</title>
    <!-- Memuat file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Menambahkan navbar -->

    <div class="container mt-5">
        <h2>Data Toilet Umum</h2>
        <?php
        // Cek apakah ada pesan sukses yang dikirim dari proses hapus
        if(isset($_GET['hapus']) && $_GET['hapus'] == 'sukses'){
            echo '<div class="alert alert-success" role="alert">
                    Toilet berhasil dihapus!
                  </div>';
        }
        ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Lokasi</th>
                    <th>Jumlah Fasilitas</th>
                    <th>Kebersihan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'fungsi_crud.php';

                // Menampilkan data toilet
                $toilets = semua_toilet();
                foreach ($toilets as $toilet) {
                    echo "<tr>";
                    echo "<td>" . $toilet['id'] . "</td>";
                    echo "<td>" . $toilet['lokasi'] . "</td>";
                    echo "<td>" . $toilet['jumlah_fasilitas'] . "</td>";
                    echo "<td>" . $toilet['kebersihan'] . "</td>";
                    echo "<td>
                            <a href='edit_toilet.php?id=" . $toilet['id'] . "' class='btn btn-primary btn-sm'>Edit</a> 
                            <a href='hapus_toilet.php?id=" . $toilet['id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus toilet ini?\")'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="tambah_toilet.php" class="btn btn-success">Tambah Data Toilet Baru</a>
    </div>

    <!-- Memuat file JS Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
