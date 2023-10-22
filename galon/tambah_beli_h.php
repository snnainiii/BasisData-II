<?php
// $datacustomer = [];
// $ambil = $koneksi->query("SELECT * FROM customer");
// while($tiap = $ambil->fetch_assoc()){
// 	$datacustomer[] = $tiap;
// }

?>


<h2>Tambah Beli H</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>ID Suplier</label>
                <input type="text" name="id_suplier" class="form-control">
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
	
	$result = $koneksi->query("CALL P_insbelih('".$_POST["id_suplier"]."', '".$_POST["tanggal"]."')");

	// Mendapatkan id_produk barusan
	$id_produk_barusan = $koneksi->insert_id;

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=beli_h';</script>";
	}
}
?>