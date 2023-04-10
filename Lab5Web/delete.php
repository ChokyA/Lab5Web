<?php
require_once 'database.php';
$database = new database();
$Nim = $_GET["Nim"];
echo $Nim;

if (isset($_GET["Nim"])) {
    $database->delete("data_mahasiswa", "where Nim=" . $Nim);
    header("location: Home");
}
