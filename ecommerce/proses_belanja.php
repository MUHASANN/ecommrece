<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'conn.php'; // Pastikan file koneksi database (conn.php) sudah di-include di sini

$namaProduk = isset($_POST["namaProduk"]) ? $_POST["namaProduk"] : '';
$hargaProduk = 0;

switch ($namaProduk) {
    case "resident evil":
        $hargaProduk = 758000;
        break;
    case "spiderman":
        $hargaProduk = 669000;
        break;
    case "god of war":
        $hargaProduk = 701000;
        break;
    case "ghost of tsushima":
        $hargaProduk = 680000;
        break;
    case "gta v":
        $hargaProduk = 400000;
        break;
    case "horizon zero dawn":
        $hargaProduk = 599000;
        break;
    case "playstation 5":
        $hargaProduk = 5000000;
        break;
    case "vr playstation":
        $hargaProduk = 2000000;
        break;
    case "stick playstation 5":
        $hargaProduk = 200000;
        break;
}

if (isset($_POST['submit'])) {
    $ttl = $_POST["ttl"];
    $nama = $namaProduk;
    $harga = $hargaProduk;

    $sql = "INSERT INTO `pembelian`(`tanggal`, `namaBarang`, `harga`) 
    VALUES 
    ('$ttl','$nama','$harga')";
    $query = mysqli_query($conn, $sql); 

    if ($query) {
        echo "<script>
        alert('Data berhasil diinput');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diinput');
        window.location.href = 'index.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Form Input pembelian</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Input Barang</h1>
    <form method="post">
      <div class="form-group">
        <label for="nama">TTL:</label>
        <input type="date" name="ttl" class="form-control" id="nama" placeholder="">
      </div>
      <div class="form-group">
        <label for="namaProduk">Nama Barang:</label><br>
        <select name="namaProduk" class="form-nama" id="nama">
          <option value="resident evil">Resident Evil 4</option>
          <option value="spiderman">Spiderman MIles Morales</option>
          <option value="god of war">God Of War</option>
          <option value="ghost of tsushima">Ghost Of Tsushima</option>
          <option value="gta v">GTA V</option>
          <option value="horizon zero dawn">Harizon Zero Dawn</option>
          <option value="playstation 5">Playstation 5</option>
          <option value="vr playstation">Vr playstation</option>
          <option value="stick playstation">Stick Playstation 5</option>
        </select>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <a href="index.php">Kembali</a>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php

?>
