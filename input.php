<?php
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $nama_rs = $_POST['nama_rs'];
    $alamat = $_POST['alamat'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $telpon = $_POST['telpon'];
    $kelas = $_POST['kelas'];
    $pemilik = $_POST['pemilik'];

    // Pengaturan koneksi database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webgis";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk menambahkan data baru
    $sql = "INSERT INTO rumah_sakit_sleman (nama_rs, alamat, longitude, latitude, telpon, kelas, pemilik) VALUES ('$nama_rs', '$alamat', $longitude, $latitude, '$telepon', '$kelas', '$pemilik')";

    // Eksekusi query insert
    if ($conn->query($sql) === TRUE) {
        echo "<p>Data berhasil ditambahkan</p>";
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Rumah Sakit</title>
    <style>
        body {
            background-color: #f3e5f5;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            color: #9b4d96; /* Purple color for label text */
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #9b4d96; /* Purple border */
            border-radius: 8px; /* Konsisten dengan edit data */
        }
        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #ab6bc0;
            box-shadow: 0 0 5px rgba(171, 107, 192, 0.6);
        }
        button {
            background-color: #ab6bc0; /* Konsisten dengan edit data */
            color: white;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 8px; /* Konsisten dengan edit data */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #9b4d96; /* Konsisten dengan edit data */
        }
        h2 {
            text-align: center;
            color: #9b4d96;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Data Rumah Sakit</h2>
        <form action="input.php" method="post">
            <label for="nama_rs">Nama Rumah Sakit:</label>
            <input type="text" id="nama_rs" name="nama_rs" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="longitude">Longitude:</label>
            <input type="number" step="any" id="longitude" name="longitude" required>

            <label for="latitude">Latitude:</label>
            <input type="number" step="any" id="latitude" name="latitude" required>

            <label for="telpon">Telepon:</label>
            <input type="text" id="telpon" name="telpon" required>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="pemilik">Pemilik:</label>
            <input type="text" id="pemilik" name="pemilik" required>

            <button type="submit" name="submit">Tambah Data</button>
        </form>
    </div>
</body>
</html>
