<?php
require 'function.php';
$user = query("SELECT * FROM user");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>nama</th>
      <th>jurusan</th>
      <th>aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($user as $u) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $u['nama']; ?></td>
        <td><?= $u['jurusan']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
          <a href="detail.php?id=<?= $u['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>