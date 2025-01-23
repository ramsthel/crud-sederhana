<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM dosen WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
