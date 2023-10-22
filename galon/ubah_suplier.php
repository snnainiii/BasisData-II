<?php
$ambil = $koneksi->query("SELECT * FROM supplier WHERE IdSupplier = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


if(isset($_POST['ubah'])){

    $result=$koneksi->query("UPDATE supplier SET Nama = '$_POST[nama]', Alamat ='$_POST[alamat]',NoTelp ='$_POST[notel]' WHERE IdSupplier ='$_GET[id]'");
    
    if($result){
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>location='index.php?halaman=suplier';</script>";
        }   
}



?>


<h2>Ubah Produk</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Suplier</label>
                <input type="text" name="nama" class="form-control" value="<?= $pecah['Nama']; ?>">
            </div>
            <div class="form-group">
                <label for="">No Telpon</label>
                <input type="number" name="notel" class="form-control" value="<?= $pecah['NoTelp']; ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?= $pecah['Alamat']; ?>">
            </div>
            <button name="ubah" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</div>