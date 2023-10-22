<?php
// $databarang = [];
// $ambil = $koneksi->query("SELECT * FROM barang");
// while($tiap = $ambil->fetch_assoc()){
// 	$databarang[] = $tiap;
// }

// echo "<pre>";
// print_r($databarang);
// echo "</pre>";

?>


<h2>Tambah Barang</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>
            <button name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php  
if(isset($_POST["submit"])){
	
	$result = $koneksi->query("INSERT INTO barang VALUES('$_POST[id]', '$_POST[nama]', '$_POST[deskripsi]', '$_POST[stok]','$_POST[harga]')");

	// Mendapatkan id_produk barusan
	$id_produk_barusan = $koneksi->insert_id;

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=produk';</script>";
	}
}
?>