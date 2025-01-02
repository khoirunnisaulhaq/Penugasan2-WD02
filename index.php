<!DOCTYPE html>
<html lang="en">

<style>
    .client_section {
        padding: 50px 0;
        background-color: #f7f7f7;
        color: #333;
    }

    .heading_container {
        text-align: center;
        margin-bottom: 40px;
    }

    .heading_container h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .testimonial-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 20px;
    }

    .card {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-content {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 20px;
        padding: 20px;
    }

    .img-box {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-box img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .text-content {
        text-align: left;
    }

    .text-content h6 {
        font-size: 18px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .location {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .testimonial-text {
        font-size: 14px;
        line-height: 1.6;
    }

    @media (max-width: 768px) {
        .card-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .img-box {
            justify-content: center;
            margin-bottom: 15px;
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Cepat Lancar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="hold-transition login-page">
    <?php
    session_start();
    include_once 'navbar.php';

    // Fungsi untuk redirect ke halaman login jika belum login
    function redirectToLoginIfNotLoggedIn()
    {
        if (!isset($_SESSION['username'])) {
            header("Location: loginAdmin.php");
            exit;
        }
    }

    ?>
    <div class="container-fluid flex flex-col justify-center items-center text-white p-5"
        style="height: 400px; background-image: url('assets/images/bg1.jpg'); background-size: cover; background-position: center; position: relative;">
        
        </div>
        </h5>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-lg-center">
            <div class="col-md-6">
                <div class="card">
                <i class=""></i>
                    <div class="card-body">
                        <i class="fas fa-hospital fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Pasien</h3>
                        <p class="card-text">Sebagai Pasien, Anda dapat melakukan registrasi terlebih dahulu sebelum dapat mendaftar untuk layanan kesehatan</p>
                        <a href="loginPasien.php" class="btn btn-primary btn-block">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fas fa-user-md fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                        <h3 class="">Dokter</h3>
                        <p class="card-text">Sebagai Dokter, Anda dapat melakukan login terlebih dahulu untuk dapat memberikan pelayanan kepada pasien</p>
                        <div class="d-grid">
                            <a href="loginUser.php" class="btn btn-primary btn-block">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login-box -->
        <section class="client_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>Testimoni Pelayanan</h2>
                </div>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f5f5f5;
                        margin: 0;
                        padding: 0;
                    }

                    .container {
                        max-width: 1200px;
                        margin: 0 auto;
                        padding: 20px;
                    }

                    .heading_container {
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .heading_container h2 {
                        font-size: 24px;
                        color: #333;
                    }

                    .testimonial-card {
                        background: white;
                        border-radius: 8px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        overflow: hidden;
                        margin-bottom: 15px;
                        max-width: 500px;
                        padding: 15px;
                        margin-left: auto;
                        margin-right: auto;
                    }

                    .card-content {
                        display: grid;
                        grid-template-columns: auto 1fr;
                        gap: 15px;
                        padding: 15px;
                    }

                    .img-box img {
                        width: 60px;
                        /* Ukuran gambar lebih kecil */
                        height: 60px;
                        border-radius: 50%;
                        object-fit: cover;
                    }

                    .text-content h6 {
                        font-size: 16px;
                        /* Nama lebih kecil */
                        margin-bottom: 5px;
                        font-weight: 600;
                    }

                    .text-content .location {
                        font-size: 14px;
                        /* Lokasi lebih kecil */
                        color: #666;
                        margin-bottom: 5px;
                    }

                    .text-content .testimonial-text {
                        font-size: 14px;
                        /* Teks testimoni lebih kecil */
                        color: #444;
                    }
                </style>
                <!-- Customer 1 -->
                <div class="testimonial-card my-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="img-box">
                                <img src="assets/images/bakti.jpg" alt="Client 1">
                            </div>
                            <div class="text-content">
                                <h6>Bakti</h6>
                                <p class="location">Jakarta</p>
                                <p class="testimonial-text">☆☆☆☆☆</p>
                                <p class="testimonial-text">Sekarang mau periksa jadi lebih mudah. Terimakasih PECEL</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Customer 2 -->
                <div class="testimonial-card my-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="img-box">
                                <img src="assets/images/wowo.jpeg" alt="Client 2">
                            </div>
                            <div class="text-content">
                                <h6>Wowo</h6>
                                <p class="location">Magelang</p>
                                <p class="testimonial-text">☆☆☆☆☆</p>
                                <p class="testimonial-text">Pelayanannya bagus rekomen buat yang mau periksa</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>



        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>