<html>

<head>
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="form-container">
        <h2 style="margin-left: 80px;">Silahkan isi form berikut ini</h2>
        <?php
        require_once 'database.php';
        $database = new database();
        $Nim = $_GET["Nim"];

        if (isset($_POST['submit'])) {
            $data = [
                'Nim' => $_POST['txtNim'],
                'Nama' => $_POST['txtNama'],
                'Kelas' => $_POST['txtKelas'],
                'Alamat' => $_POST['txtAlamat'],
            ];
            $database->update("data_mahasiswa", $data, "Nim=" . $Nim);
            header("location: Home");
        }

        $data = $database->get("data_mahasiswa", "Nim=" . $Nim);

        include "form.php";
        $form = new Form("update.php", "submit");
        $form->addField("txtNim", "Nim", $data["Nim"], "form-input");
        $form->addField("txtNama", "Nama", $data["Nama"], "form-input");
        $form->addField("txtKelas", "Kelas", $data["Kelas"], "form-input");
        $form->addField("txtAlamat", "Alamat", $data["Alamat"], "form-input");
        $form->displayForm();
        ?>
    </div>
</body>

</html>