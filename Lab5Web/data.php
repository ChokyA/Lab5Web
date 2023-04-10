<?php
require('header.php');
include "database.php";
$database = new database();

// Mengambil data dari tabel 'tb_latihan' di database
$data = $database->data('data_mahasiswa');

?>
<html>

<head>
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="table-container">
    <h2>Daftar Mahasiswa</h2>
    <table class="my-table">
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
      </tr>
      <?php
      // Menampilkan data dalam tabel
      foreach ($data as $row) {
      ?>
        <tr>
          <td> <?= $row['Nim']; ?></td>
          <td> <?= $row['Nama']; ?></td>
          <td> <?= $row['Kelas']; ?></td>
          <td> <?= $row['Alamat']; ?></td>
          <td>
            <a href="update.php?Nim=<?= $row['Nim']; ?>"><input type='button' class='btn-update'></a>
            <a href="delete.php?Nim=<?= $row['Nim']; ?>"><input type='button' class='btn-delete'></a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
  <?php require('footer.php'); ?>
</body>

</html>