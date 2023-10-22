<?php

$ambil = $koneksi->query("SELECT * FROM supplier WHERE IdSupplier = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM supplier WHERE IdSupplier= '$_GET[id]'");

echo "<script>alert('Suplier terhapus');</script>";
echo "<script>location='index.php?halaman=suplier';</script>";