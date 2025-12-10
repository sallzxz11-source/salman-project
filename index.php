<?php
session_start();

$nama = $_SESSION['nama'];
$alamat = $_SESSION['alamat'];
$hp = $_SESSION['hp'];
?>

<h2>Selamat Datang <?= $nama ?></h2>
Alamat Anda : <?= $alamat ?><br>
No HP : <?= $hp ?><br><br>

<a href="form.php">Input Data</a>
<a href="keluar.php">Keluar</a>
<?php
if (isset($_POST['kirim'])) {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['alamat'] = $_POST['alamat'];
    $_SESSION['hp'] = $_POST['hp'];

    header("Location: index.php");
}
?>