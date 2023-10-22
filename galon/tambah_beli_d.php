<h2>Tambah Beli D</h2>

<div class="row">
    <div class="col-md-8">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>ID Barang</label>
                <input type="text" name="id_barang" class="form-control">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <select name="satuan" class="form-control" id="satuan">
                    <option value="">- Pilih Satuan -</option>
                    <option value="tanki">tanki</option>
                    <option value="drum">drum</option>
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga/L</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <button name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<?php 
// fungsi koneksi
function connectToDatabase() {
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'probasdat';

    $connection = new mysqli($host, $username, $password, $database);
    return $connection;
}

function tambahDataBeliD($idbarang, $jumlah, $satuan, $harga) {
    $connection = connectToDatabase();
    
    $query = "CALL p_insbelid(?, ?, ?, ?)";
    $statement = $connection->prepare($query);

    // Bind parameter
    $statement->bind_param("siss", $idbarang, $jumlah, $satuan, $harga);

    // Menjalankan pernyataan
    $statement->execute();

    // Menutup pernyataan
    $statement->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Memeriksa apakah semua field diisi
    if (isset($_POST['id_barang']) && isset($_POST['jumlah']) && isset($_POST['satuan']) && isset($_POST['harga'])) {
    $idBarang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];
    $harga = $_POST['harga'];

    // Memanggil fungsi untuk menambahkan data juald
    tambahDataBeliD($idBarang, $jumlah, $satuan, $harga);

    // Redirect atau tampilkan pesan sukses
    echo "<script>alert('Data berhasil ditambahkan');window.location = 'index.php?halaman=beli_d';</script>";

} else {
    echo "Mohon isi semua field!";
    }
}
?>