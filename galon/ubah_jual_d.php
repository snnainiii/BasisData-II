<?php
// echo isset($_GET['id']);die;
// fungsi koneksi
function connectToDatabase() {
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'probasdat';

$connection = mysqli_connect($host, $username, $password, $database);
return $connection;
}

function updateDataJualD($idJualD,$idBarang, $jumlah, $satuan) {
    $connection = connectToDatabase();

    // Menyiapkan pernyataan SQL untuk memanggil stored procedure
    // echo $idJualD;
    //     echo $idBarang;
    //     echo $jumlah;
    //     echo $satuan;
    //     die;
    $query = "CALL p_upjuald('$idJualD', '$idBarang', '$jumlah', '$satuan')";
    //$query = "UPDATE juald SET  IdBarang = '$idBarang', Jumlah = '$jumlah', satuan = '$satuan' WHERE IdJualD = '$idJualD'";
    
    mysqli_query($connection, $query);
    // $statement = $connection->prepare($query);

    // // Bind parameter
    // //$statement->bind_param("iiis", $idJualD, $idBarang, $jumlah, $satuan);

    // // Menjalankan pernyataan
    // $statement->execute();

    // // Menutup pernyataan
    // $statement->close();

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah semua field diisi
    // var_dump($_POST);die;
    if (isset($_POST['id_juald'])&& isset($_POST['id_barang']) && isset($_POST['jumlah']) && isset($_POST['satuan'])) {
        $idJualD = $_POST['id_juald'];
        $idBarang = $_POST['id_barang'];
        $jumlah = $_POST['jumlah'];
        $satuan = $_POST['satuan'];
        
        // Memanggil fungsi untuk memperbarui data juald
        updateDataJualD($idJualD, $idBarang, $jumlah, $satuan);
        

        // Redirect atau tampilkan pesan sukses
        echo "<script>alert('Data berhasil diupdate');window.location = 'index.php?halaman=jual_d';</script>";
    } else {
        echo "Mohon isi semua field!";
    }
}

// Memeriksa apakah ID JualD ada di link
if (isset($_GET['id'])) {
    $idJualD = $_GET['id'];

    // Fungsi untuk mendapatkan data JualD berdasarkan ID
    function getDataJualD($idJualD) {
        $connection = connectToDatabase();

        // Menyiapkan pernyataan SQL
        $query = "SELECT * FROM juald WHERE IdJualD = $idJualD";
        $statement = $connection->prepare($query);

        // Bind parameter
        // $statement->bind_param("i", $idJualD);

        // Menjalankan pernyataan
        $statement->execute();

        // Mengambil hasil query
        $result = $statement->get_result();

        // Menutup pernyataan dan koneksi
        $statement->close();
        $connection->close();

        // Mengembalikan data JualD
        return $result->fetch_assoc();
    }

    // Mendapatkan data JualD berdasarkan ID
    $dataJualD = getDataJualD($idJualD);
}
?>



<h2>Form Update Jual D</h2>
<?php if (!empty($dataJualD)): ?>
<form method="post" action="">
    <div class="form-group">
        <!-- <label for="id_juald">ID JualD</label> -->
        <input type="hidden" id="id_juald" name="id_juald" class="form-control"
            value="<?php echo $dataJualD['IdJualD']; ?>">
    </div>
    <div class=" form-group">
        <label for="id_barang">ID Barang</label>
        <input type="text" id="id_barang" name="id_barang" class="form-control"
            value="<?php echo $dataJualD['IdBarang']; ?>">
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" id="jumlah" name="jumlah" class="form-control" value="<?php echo $dataJualD['Jumlah']; ?>">
    </div>
    <div class="form-group">
        <label for="satuan">Satuan</label>
        <select id="satuan" name="satuan" class="form-control">
            <option value="galon" <?php echo ($dataJualD['Satuan'] === 'galon') ? 'selected' : ''; ?>>Galon</option>
            <option value="liter" value="liter" <?php echo ($dataJualD['Satuan'] === 'liter') ? 'selected' : ''; ?>>
                Liter</option>
        </select>
    </div>
    <button type="submit" value="Update JualD" class="btn btn-primary">Simpan</button>
</form>
<?php else: ?>
<p>Data Jual D tidak ditemukan.</p>
<?php endif; ?>