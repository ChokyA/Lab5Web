<!DOCTYPE html>
<html>

<head>
  <title>OOP Motor</title>
</head>

<body>
  <?php
  require('header.php');
  // Program sederhana pendefinisian class dan pemanggilan class
  class Motor
  {
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
      $this->warna = "Hitam";
      $this->merk = "NMAX";
      $this->harga = "35000000";
    }

    public function gantiWarna($warnaBaru)
    {
      $this->warna = $warnaBaru;
    }

    public function gantiMerk($merkBaru)
    {
      $this->merk = $merkBaru;
    }

    public function tampilWarna()
    {
      echo "Warna motornya adalah : " . $this->warna;
    }

    public function tampilMerk()
    {
      echo "Merk motornya adalah : " . $this->merk;
    }

    public function hargaMotor()
    {
      echo "Harga motornya sekitar : " . $this->harga;
    }
  }

  // membuat objek motor
  $a = new Motor();
  $b = new Motor();

  // memanggil objek warna motor pertama
  echo "<b> Motor pertama </b><br>";
  $a->tampilWarna();
  echo "<br> Motor pertama ganti warna <br>";
  $a->gantiWarna("Putih <br><br>");
  $a->tampilWarna();

  // memanggil objek merk motor pertama
  echo "<b> Merk motor pertama </b><br>";
  $a->tampilMerk();
  echo "<br>";
  $b->hargaMotor();
  echo "<br>";

  // memanggil objek warna motor kedua
  echo "<br><b> Motor kedua </b><br>";
  $b->gantiWarna("Abu-Abu");
  $b->tampilWarna();
  echo "<br> Motor kedua ganti warna <br>";
  $a->gantiWarna("Merah <br>");
  $a->tampilWarna();

  // memanggil objek merk motor kedua
  echo "<br><b> Merk motor kedua </b><br>";
  $b->gantiMerk("XMAX");
  $b->tampilMerk();
  echo "<br>";
  $b->hargaMotor();

  require('footer.php');
  ?>
</body>

</html>