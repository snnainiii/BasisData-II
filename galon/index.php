<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "probasdat");

// if(!isset($_SESSION['admin'])){
// 	// echo "<script>location='login.php';</script>";
// 	header('location:login.php');
// }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <link rel="" type="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div>
                <h4 style="color:white;"> &nbsp;&nbsp; Toko Galon</h4>
            </div>
        </nav>

        <!-- /. NAV TOP  -->
        <nav class=" navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li> -->
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i>Home</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=produk"><i class="fa fa-cube"></i>Tabel Produk</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=customer"><i class="fa fa-tags"></i>Tabel Customer</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=suplier"><i class="fa fa-tags"></i>Tabel Suplier</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=jual_h"><i class="fa fa-tags"></i>Tabel Jual H</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=jual_d"><i class="fa fa-tags"></i>Tabel Jual D</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=beli_h"><i class="fa fa-tags"></i>Tabel Beli H</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=beli_d"><i class="fa fa-tags"></i>Tabel Beli D</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=laporan_pembelian"><i class="fa fa-shopping-cart"></i>Laporan
                            Pembelian</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=laporan_penjualan"><i class="fa fa-shopping-cart"></i>Laporan
                            Penjualan</a>
                    </li>
                    <li>
                        <a href="index.php?halaman=laporan_laba"><i class="fa fa-shopping-cart"></i>Laporan
                            Laba</a>
                    </li>
                    <!-- <li>
                        <a href="index.php?halaman=laporan_pembelian"><i class="fa fa-file"></i>Laporan</a>
                    </li> -->
                    <!-- <li>
                        <a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i>Logout</a>
                    </li> -->
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->

        <!-- konten -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
					if(isset($_GET["halaman"])){
						if($_GET["halaman"] == "produk"){
							include 'produk.php';
						}
						elseif($_GET["halaman"] == "customer"){
							include 'customer.php';
						}
						elseif($_GET["halaman"] == "suplier"){
							include 'suplier.php';
						}
						elseif($_GET["halaman"] == "jual_h"){
							include 'jual_h.php';
						}
						elseif($_GET["halaman"] == "jual_d"){
							include 'jual_d.php';
						}
						elseif($_GET["halaman"] == "beli_h"){
							include 'beli_h.php';
						}
						elseif($_GET["halaman"] == "beli_d"){
							include 'beli_d.php';
						}
						elseif($_GET["halaman"] == "tambah_produk"){
							include 'tambah_produk.php';
						}
						elseif($_GET["halaman"] == "hapus_produk"){
							include 'hapus_produk.php';
						}
						elseif($_GET["halaman"] == "ubah_produk"){
							include 'ubah_produk.php';
						}
						elseif($_GET["halaman"] == "tambah_customer"){
							include 'tambah_customer.php';
						}
						elseif($_GET["halaman"] == "hapus_customer"){
							include 'hapus_customer.php';
						}
						elseif($_GET["halaman"] == "ubah_customer"){
							include 'ubah_customer.php';
						}
						elseif($_GET["halaman"] == "tambah_suplier"){
							include 'tambah_suplier.php';
						}
						elseif($_GET["halaman"] == "hapus_suplier"){
							include 'hapus_suplier.php';
						}
						elseif($_GET["halaman"] == "ubah_suplier"){
							include 'ubah_suplier.php';
						}
						elseif($_GET["halaman"] == "tambah_beli_h"){
							include 'tambah_beli_h.php';
						}
						elseif($_GET["halaman"] == "tambah_jual_h"){
							include 'tambah_jual_h.php';
						}
						elseif($_GET["halaman"] == "tambah_jual_d"){
							include 'tambah_jual_d.php';
						}
						elseif($_GET["halaman"] == "ubah_jual_d"){
							include 'ubah_jual_d.php';
						}
						elseif($_GET["halaman"] == "hapus_jual_d"){
							include 'hapus_jual_d.php';
						}
						elseif($_GET["halaman"] == "tambah_beli_d"){
							include 'tambah_beli_d.php';
						}
						elseif($_GET["halaman"] == "ubah_beli_d"){
							include 'ubah_beli_d.php';
						}
						elseif($_GET["halaman"] == "hapus_beli_d"){
							include 'hapus_beli_d.php';
						}
						elseif($_GET["halaman"] == "laporan_pembelian"){
							include 'laporan_pembelian.php';
						}
						elseif($_GET["halaman"] == "laporan_penjualan"){
							include 'laporan_penjualan.php';
						}
						elseif($_GET["halaman"] == "laporan_laba"){
							include 'laporan_laba.php';
						}
						elseif($_GET["halaman"] == "cr_juald"){
							include 'cr_juald.php.php';
						}
						// elseif($_GET["halaman"] == "logout"){
						// 	include 'logout.php';
						// }
					}
					else{
						include 'home.php';
					}
				?>
            </div>
        </div>
        <!-- akhir konten -->

    </div>
    <!-- /. WRAPPER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>