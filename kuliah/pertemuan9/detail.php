<?php
require 'function.php';

//ambil id dari url
$id = $_GET['id'];

// query mahasiswa
$u = query("SELECT * FROM user WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li>Nama : <?= $u['nama']; ?></li>
    <li><a href="latihan1.php">Kembail Ke Daftar Mahasiswa</a></li>
  </ul>
</body>

</html>