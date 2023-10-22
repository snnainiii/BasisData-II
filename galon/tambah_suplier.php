<?php

?>


<h2>Tambah Suplier</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <!-- <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control">
            </div> -->
            <div class="form-group">
                <label>Nama Suplier</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="notel" class="form-control">
            </div>

            <button name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php  
if(isset($_POST["submit"])){
	
	$result = $koneksi->query("INSERT INTO supplier VALUES('', '$_POST[nama]',  '$_POST[alamat]', '$_POST[notel]')");

	// Mendapatkan id_produk barusan
	$id_produk_barusan = $koneksi->insert_id;

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=suplier';</script>";
	}
}
?>