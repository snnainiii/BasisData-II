<?php

$ambil = $koneksi->query("SELECT * FROM belid WHERE IdBeliD = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("CALL p_delbelid('".$_GET["id"]."')");


echo "<script>alert('Data Beli D terhapus');</script>";
echo "<script>location='index.php?halaman=beli_d';</script>";