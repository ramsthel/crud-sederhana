<?php
include 'koneksi.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM dosen WHERE id=$id");
$data = $result->fetch_assoc();

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_dosen'];
    $email = $_POST['email'];
    $nomor_hp = $_POST['nomor_hp'];

    $sql = "UPDATE dosen SET nama_dosen='$nama', email='$email', nomor_hp='$nomor_hp' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui.";
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama_dosen" value="<?= $data['nama_dosen']; ?>" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?= $data['email']; ?>" required><br>
        <label>No HP:</label><br>
        <input type="text" name="nomor_hp" value="<?= $data['nomor_hp']; ?>" required><br>
        <button type="submit" name="submit">Update</button>
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
