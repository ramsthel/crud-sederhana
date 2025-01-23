<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_dosen'];
    $email = $_POST['email'];
    $nomor_hp = $_POST['nomor_hp'];

    $sql = "INSERT INTO dosen (nama_dosen, email, nomor_hp) VALUES ('$nama', '$email', '$nomor_hp')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan.";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Dosen</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form method="POST" action="create.php">
        <label>Nama:</label><br>
        <input type="text" name="nama_dosen" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>No HP:</label><br>
        <input type="text" name="nomor_hp" required><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
