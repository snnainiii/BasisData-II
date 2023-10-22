<?php

$ambil = $koneksi->query("SELECT * FROM customer WHERE IdCustomer = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM customer WHERE IdCustomer = '$_GET[id]'");

echo "<script>alert('Customer terhapus');</script>";
echo "<script>location='index.php?halaman=customer';</script>";