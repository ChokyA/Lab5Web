<!-- Program memanfaatkan Program 5.2 untuk membuat form inputan sederhana. -->
<?php require('header.php'); ?>
<?php
include "database.php";
$database = new database();

if (isset($_POST['submit'])) {
  $data = [
    'NIM' => $_POST['txtNim'],
    'Nama' => $_POST['txtNama'],
    'Kelas' => $_POST['txtKelas'],
    'Alamat' => $_POST['txtAlamat'],
  ];
  $database->insert('data_mahasiswa', $data);
  // Menampilkan notifikasi jika data berhasil disimpan
  echo "<script>alert('Data berhasil disimpan')</script>";
}
?>
<html>

<head>
  <title>Identitas Mahasiswa</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="form-container">
    <h2 style="margin-left: 80px;">Silahkan isi form berikut ini</h2>
    <?php
    include "form.php";
    $form = new Form("form_input.php", "submit");
    $form->addField("txtNim", "NIM", "form-input");
    $form->addField("txtNama", "Nama", "form-input");
    $form->addField("txtKelas", "Kelas", "form-input");
    $form->addField("txtAlamat", "Alamat", "form-input");
    $form->displayForm();
    ?>
  </div>
  <?php require('footer.php'); ?>
</body>

</html>