<?php
if (isset($_POST['update'])) {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama_rs = $_POST['nama_rs'];
    $alamat = $_POST['alamat'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $telepon = $_POST['telepon'];
    $kelas = $_POST['kelas'];
    $pemilik = $_POST['pemilik'];
    $edit = $_POST['edit'];
    $hapus = $_POST['hapus'];   

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

    // Query untuk mengupdate data
    $sql = "UPDATE rumah_sakit_sleman SET 
                nama_rs = '$nama_rs',
                alamat = '$alamat', 
                longitude = $longitude, 
                latitude = $latitude, 
                telepon = '$telepon',
                kelas = '$kelas',
                pemilik = '$pemilik' 
                edit = '$edit'
                hapus = '$hapus'
            WHERE id = $id";

    /// Eksekusi query update
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui";
        header("Location: index.php"); 
        // Arahkan ke halaman index.php setelah update
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
    <title>Edit Data Rumah Sakit</title>
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
            border-radius: 5px;
        }
        button {
            background-color: #9b4d96; /* Purple background */
            color: white;
            padding: 12px;
            margin-top: 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #ff66b2; /* Pink background on hover */
        }
        h2 {
            text-align: center;
            color: #9b4d96;
            font-weight: bold;
        }
        .text-danger {
            color: #ff66b2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// Ambil ID dari URL
$id = $_GET['id'];

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

// Ambil data berdasarkan ID
$sql = "SELECT * FROM rumah_sakit_sleman WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan data dalam form
    $row = $result->fetch_assoc();
    ?>
    <div class="container">
        <h2>Perbarui Data Rumah Sakit</h2>
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

            <label for="nama_rs">Nama Rumah Sakit:</label>
            <input type="text" id="nama_rs" name="nama_rs" value="<?php echo $row['nama_rs']; ?>" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>

            <label for="longitude">Longitude:</label>
            <input type="number" step="any" id="longitude" name="longitude" value="<?php echo $row['longitude']; ?>" required>

            <label for="latitude">Latitude:</label>
            <input type="number" step="any" id="latitude" name="latitude" value="<?php echo $row['latitude']; ?>" required>

            <label for="telpon">Telepon:</label>
            <input type="text" id="telpon" name="telpon" value="<?php echo $row['telpon']; ?>" required>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" value="<?php echo $row['kelas']; ?>" required>

            <label for="pemilik">Pemilik:</label>
            <input type="text" id="pemilik" name="pemilik" value="<?php echo $row['pemilik']; ?>" required>

            <button type="submit" name="update">Update</button>
        </form>
    </div>
    <?php
} else {
    echo "<p class='text-danger'>Data tidak ditemukan</p>";
}
$conn->close();
?>
</body>
</html>
