<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Rumah Sakit Kabupaten Sleman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        /* Styling umum */
        body {
            background-color: #f8f0f6;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #9b4d96;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: 600;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #ff66b2;
        }

        .navbar-nav {
            margin-left: auto;
            text-align: center;
        }

        .container {
            margin-top: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            color: #9b4d96;
            font-weight: bold;
            font-size: 36px;
            text-align: center;
        }

        h3 {
            color: #9b4d96;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
        }

        p {
            color: #333333;
            font-size: 18px;
            line-height: 1.8;
            text-align: justify;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .gallery img:hover {
            transform: scale(1.05);
            transition: 0.3s ease;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WebGIS Persebaran Titik Rumah Sakit pada Kabupaten Sleman</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Data Rumah Sakit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Tentang Rumah Sakit Kabupaten Sleman</h2>
        <p>
            Kabupaten Sleman adalah sebuah kabupaten yang terletak di Provinsi Daerah Istimewa Yogyakarta, Indonesia.
            Kabupaten ini berada di sebelah utara Kota Yogyakarta dan merupakan bagian dari kawasan metropolitan
            Yogyakarta. Sleman memiliki letak yang strategis, berbatasan langsung dengan Provinsi Jawa Tengah di sebelah
            utara dan dikelilingi oleh pegunungan, seperti Gunung Merapi di sebelah utara dan Gunung Sumbing di sebelah
            timur. Kabupaten ini juga memiliki berbagai tempat wisata alam yang menarik, seperti kawasan Candi
            Prambanan, Taman Nasional Gunung Merapi, dan berbagai area wisata lainnya.
        </p>
        <p>
            Sebagai wilayah yang berkembang pesat, Sleman memiliki berbagai fasilitas publik, termasuk rumah sakit yang
            tersebar di seluruh wilayahnya. Rumah sakit di Sleman melayani berbagai kebutuhan kesehatan, mulai dari
            layanan umum hingga spesialis. Beberapa rumah sakit di Sleman dilengkapi dengan fasilitas modern yang
            mendukung pengobatan serta pemulihan pasien. Lokasi rumah sakit di Sleman pun mudah dijangkau oleh
            masyarakat, baik yang tinggal di daerah perkotaan maupun yang berada di kawasan pedesaan.
        </p>
        <p>
            Jenis rumah sakit yang ada di Sleman bervariasi, mulai dari rumah sakit pemerintah yang dikelola oleh Pemkab
            Sleman hingga rumah sakit swasta yang memiliki layanan lebih spesifik atau kelas pelayanan tertentu. Setiap
            rumah sakit juga dilengkapi dengan berbagai fasilitas medis seperti ruang rawat inap, ruang operasi, layanan
            darurat, dan fasilitas penunjang lainnya yang memastikan pasien mendapatkan perawatan yang optimal.
        </p>
        <p>
            Dengan adanya berbagai rumah sakit di Sleman, masyarakat dapat dengan mudah mengakses layanan kesehatan yang
            memadai dan mendapatkan pengobatan dengan cepat dan efisien. Selain itu, rumah sakit di Sleman juga berperan
            penting dalam memberikan edukasi kesehatan kepada masyarakat setempat dan meningkatkan kualitas kesehatan
            secara keseluruhan.
        </p>

        <h3 class="mt-5">Galeri Rumah Sakit</h3>
        <div class="gallery mt-4">
            <img src="icon/img1.jpg" alt="Rumah Sakit A">
            <img src="icon/img2.jpg" alt="Rumah Sakit B">
            <img src="icon/img3.jpg" alt="Rumah Sakit C">
            <img src="icon/img4.jpg" alt="Rumah Sakit D">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
