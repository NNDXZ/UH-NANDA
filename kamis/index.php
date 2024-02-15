<?php
session_start();
if(!isset($_SESSION["session_username"])) {
    header("Location: login.php");
    exit(); // Pastikan untuk keluar setelah mengarahkan pengguna ke halaman login
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem WC Umum</title>
    <!-- Memuat file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?> 

    <!-- Carousel -->
    <center>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width: 750px;" data-interval="1500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.toiletuntuknegeri.id/wp-content/uploads/2022/10/about-01.png" class="d-block w-100 " alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="https://www.shutterstock.com/image-vector/please-keep-toilet-clean-sign-260nw-2227872451.jpg" class="d-block w-100 img-fluid" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="https://media.istockphoto.com/id/1307736928/id/vektor/hari-toilet-sedunia-merayakan-19-november-kartu-ucapan-poster-spanduk-selebaran-desain.jpg?s=1024x1024&w=is&k=20&c=4zMtP3VHBmGk5m_90gxdST1GmdA9WbTwGmKAT1LK-V4=" class="d-block w-100 img-fluid" alt="Gambar 3">
            </div>
        </div>
    </div>
    </center>
    </div>

    <!-- Card di atas -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Selamat Datang di Sistem WC Umum</h5>
                <p class="card-text">Kelola informasi tentang toilet umum dengan mudah dan efisien.</p>
                <a href="tambah_toilet.php" class="btn btn-primary">Tambah Data Toilet Baru</a>
            </div>
        </div>
    </div>

    <!-- Card di bawah -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Lokasi</h5>
                        <p class="card-text">Lokasi: Taman Mini,Ragunan,MPL Arena,Gelora Bungkarno,Kemayoran,pasar nangka</p>
                        <p class="card-text">Total Fasilitas: 50 perlokasi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Tambahkan card lainnya di sini jika diperlukan -->
            </div>
        </div>
    </div>

    <!-- Memuat file JS Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
