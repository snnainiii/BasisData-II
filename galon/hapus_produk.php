<?php

$ambil = $koneksi->query("SELECT * FROM barang WHERE IdBarang = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM barang WHERE IdBarang = '$_GET[id]'");

echo "<script>alert('Produk terhapus');</script>";
echo "<script>location='index.php?halaman=produk';</script>";