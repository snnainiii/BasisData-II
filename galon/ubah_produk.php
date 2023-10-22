<?php
$ambil = $koneksi->query("SELECT * FROM barang WHERE IdBarang = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();


if(isset($_POST['ubah'])){

    //$result=$koneksi->query("UPDATE barang SET Nama = '$_POST[nama]', Harga/L ='$_POST[harga]', Stok(L) ='$_POST[stok]', Deskripsi ='$_POST[deskripsi]' WHERE IdBarang ='$_GET[id]'");
    $result=$koneksi->query("UPDATE barang SET Nama = '$_POST[nama]', Deskripsi ='$_POST[deskripsi]' WHERE IdBarang ='$_GET[id]'");
    
    if($result){
        echo "<script>alert('Data berhasil diubah');</script>";
        echo "<script>location='index.php?halaman=produk';</script>";
        }   
}



?>


<h2>Ubah Produk</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama" class="form-control" value="<?= $pecah['Nama']; ?>">
            </div>
            <div class="form-group">
                <label for="">Harga Rp.</label>
                <input type="number" name="harga" class="form-control" value="<?= $pecah['Harga/L']; ?>">
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="number" name="stok" class="form-control" value="<?= $pecah['Stok(L)']; ?>">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" rows="10">
          <?= $pecah['Deskripsi']; ?>
        </textarea>
            </div>

            <button name="ubah" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</div>