<h2>Tambah Jual D</h2>

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
                    <option value="galon">galon</option>
                    <option value="liter">liter</option>
                </select>
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

function tambahDataJualD($idbarang, $jumlah, $satuan) {
    $connection = connectToDatabase();
    
    $query = "CALL p_insjuald(?, ?, ?)";
    $statement = $connection->prepare($query);

    // Bind parameter
    $statement->bind_param("sis", $idbarang, $jumlah, $satuan);

    // Menjalankan pernyataan
    $statement->execute();

    // Menutup pernyataan dan koneksi
    $statement->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Memeriksa apakah semua field diisi
    if (isset($_POST['id_barang']) && isset($_POST['jumlah']) && isset($_POST['satuan'])) {
    $idBarang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $satuan = $_POST['satuan'];

    // Memanggil fungsi untuk menambahkan data juald
    tambahDataJualD($idBarang, $jumlah, $satuan);

    // Redirect atau tampilkan pesan sukses
    echo "<script>alert('Data berhasil ditambahkan');window.location = 'index.php?halaman=jual_d';</script>";

} else {
    echo "Mohon isi semua field!";
    }
}
?>