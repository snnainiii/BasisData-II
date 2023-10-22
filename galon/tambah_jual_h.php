<?php
// $datacustomer = [];
// $ambil = $koneksi->query("SELECT * FROM customer");
// while($tiap = $ambil->fetch_assoc()){
// 	$datacustomer[] = $tiap;
// }

?>


<h2>Tambah Jual H</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>ID Customer</label>
                <input type="text" name="id_customer" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
            </div>
            <button name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php  
if(isset($_POST["submit"])){
	
	$result = $koneksi->query("CALL P_insjualh('".$_POST["id_customer"]."', '".$_POST["tanggal"]."')");

	// Mendapatkan id_produk barusan
	$id_produk_barusan = $koneksi->insert_id;

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=jual_h';</script>";
	}
}
?>