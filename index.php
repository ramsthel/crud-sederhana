<?php
include 'koneksi.php';

$sql = "SELECT * FROM dosen";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Sederhana</title>
</head>
<body>
    <h2>Data Dosen</h2>
    <a href="create.php">Tambah Data</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama_dosen']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['nomor_hp']; ?></td>
            <td>
                <a href="update.php?id=<?= $row['id']; ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

