<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web-GIS dengan Tabel Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Styling umum untuk halaman */
        body {
            background-color: #f8f0f6;
            /* Latar belakang halaman dengan warna lembut pink */
            font-family: 'Arial', sans-serif;
        }

        /* Styling navbar */
        .navbar {
            background-color: #9b4d96;
            /* Warna ungu gelap untuk navbar */
        }

        .navbar-brand {
            color: white;
        }

        .navbar-brand:hover {
            color: #ff66b2;
            /* Warna pink terang saat hover */
        }

        /* Styling umum untuk tabel */
        .table {
            background-color: #ffffff;
            /* Warna putih untuk latar belakang tabel */
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Styling untuk header tabel */
        .table-dark {
            background-color: #9b4d96;
            /* Warna ungu untuk header tabel */
            color: white;
        }

        /* Styling untuk baris data */
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f4b6d3;
            /* Warna pink lembut untuk baris ganjil */
        }

        .table-striped tbody tr:nth-child(even) {
            background-color: #e4a1d1;
            /* Warna ungu muda untuk baris genap */
        }

        /* Styling untuk border tabel */
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ff66b2;
            /* Border pink terang untuk sel tabel */
        }

        /* Styling untuk kolom header */
        .table th {
            padding: 12px;
            text-align: center;
            background-color: #9b4d96;
            color: white;
            font-weight: bold;
        }

        /* Styling untuk kolom data */
        .table td {
            padding: 10px;
            text-align: center;
        }

        /* Styling untuk judul tabel */
        h2 {
            color: #9b4d96;
            /* Warna ungu gelap untuk judul */
            font-weight: bold;
            font-size: 24px;
        }

        /* Styling untuk teks yang tidak ada data */
        .table tbody td.text-center {
            color: #ff66b2;
            /* Warna pink untuk teks "Tidak ada data" */
            font-weight: bold;
        }

        /* Styling untuk responsive */
        .container {
            margin-top: 40px;
        }

        .container-fluid {
            margin-top: 20px;
        }

        /* Styling untuk tombol-tombol di tabel */
        .btn-custom {
            background-color: #9b4d96;
            color: white;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .btn-custom:hover {
            background-color: #ff66b2;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WebGIS dengan Database</a>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-center">Data Rumah Sakit Kabupaten Sleman</h2>
            <a href="input.php" class="btn btn-custom">Tambah Data</a>
        </div>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Rumah Sakit</th>
                    <th>Alamat</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Telpon</th>
                    <th>Kelas</th>
                    <th>Pemilik</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi ke database MySQL
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "webgis";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Proses hapus data
                if (isset($_GET['hapus'])) {
                    $id_hapus = $_GET['hapus'];
                    $sql_hapus = "DELETE FROM rumah_sakit_sleman WHERE id = $id_hapus";
                    if ($conn->query($sql_hapus) === TRUE) {
                        echo "alert('Data dengan ID $id_hapus berhasil dihapus.');";
                    } else {
                        echo "alert('Error: " . $conn->error . "');";
                    }
                }

                // Query data
                $sql = "SELECT * FROM rumah_sakit_sleman";
                $result = $conn->query($sql);

                // Tampilkan tabel data dari database
                if ($result->num_rows > 0) {
                    // Output setiap baris data
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["nama_rs"] . "</td>
                        <td>" . $row["alamat"] . "</td>
                        <td>" . $row["longitude"] . "</td>
                        <td>" . $row["latitude"] . "</td>
                        <td>" . $row["telpon"] . "</td>
                        <td>" . $row["kelas"] . "</td>
                        <td>" . $row["pemilik"] . "</td>
                        <td><a href='edit.php?id=" . $row["id"] . "' class='btn btn-custom'>Edit</a></td>
                        <td><a href='?hapus=" . $row["id"] . "' class='btn btn-custom' onclick='return confirm(\"Serius mau hapus data ini?\")'>Hapus</a></td>
                    </tr>";
                    }
                } else {
                    echo "<tr><td colspan='10' class='text-center'>Tidak ada data</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
