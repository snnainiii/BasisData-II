<?php
$ambil = $koneksi->query("SELECT * FROM customer WHERE IdCustomer = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


if(isset($_POST['ubah'])){

    //$result=$koneksi->query("UPDATE barang SET Nama = '$_POST[nama]', Harga/L ='$_POST[harga]', Stok(L) ='$_POST[stok]', Deskripsi ='$_POST[deskripsi]' WHERE IdBarang ='$_GET[id]'");
    $result=$koneksi->query("UPDATE customer SET Nama = '$_POST[nama]', NoTelp ='$_POST[notel]', Alamat ='$_POST[alamat]' WHERE IdCustomer ='$_GET[id]'");
    
    if($result){
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>location='index.php?halaman=customer';</script>";
        }   
}



?>


<h2>Ubah Produk</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Customer</label>
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