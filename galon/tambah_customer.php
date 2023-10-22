<?php

?>


<h2>Tambah Customer</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Customer</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="number" name="notel" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <button name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php  
if(isset($_POST["submit"])){
	
	$result = $koneksi->query("INSERT INTO customer VALUES('','$_POST[nama]', '$_POST[notel]', '$_POST[alamat]')");

	// Mendapatkan id_produk barusan
	$id_produk_barusan = $koneksi->insert_id;

	if($result){
		echo "<script>alert('Data berhasil ditambahkan');window.location='index.php?halaman=customer';</script>";
	}
}
?>