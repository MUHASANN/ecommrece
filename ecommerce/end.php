<?php

$conn =  mysqli_connect("localhost", "root", "", "ecommerce");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

$sql = mysqli_query($conn, "INSERT INTO pembelian (Date_, Name_goods, Price,)
    VALUES ('$tanggal', '$nama', '$harga')");
}

echo "<h2>Struk Belanja</h2>";
echo "<p>Tanggal: " . $tanggal . "</p>";
echo "<p>jenis: " . $jenis . "</p>";
echo "<p>Harga Barang: " . $harga . "</p>";
?>