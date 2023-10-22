<?php

$ambil = $koneksi->query("SELECT * FROM juald WHERE IdJualD = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("CALL p_deljuald('".$_GET["id"]."')");


echo "<script>alert('Data Jual D terhapus');</script>";
echo "<script>location='index.php?halaman=jual_d';</script>";