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

function updateDataBeliD($idBeliD, $idBarang, $jumlah, $satuan, $harga) {
    $connection = connectToDatabase();

    // Menyiapkan pernyataan SQL untuk memanggil stored procedure
    // echo $idBeliD;
    //     echo $idBarang;
    //     echo $jumlah;
    //     echo $satuan;
    //     echo $harga;
        // die;
    //$query = "CALL p_upbelid('$idBeliD', '$idBarang', '$jumlah', '$satuan', '$harga')";
    $query = "UPDATE belid SET  IdBarang = '$idBarang', Jumlah = '$jumlah', Satuan = '$satuan', Harga = '$harga' WHERE IdBeliD = '$idBeliD'";
    
    mysqli_query($connection, $query);


}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah semua field diisi
    // var_dump($_POST);die;
    if (isset($_POST['id_belid'])&& isset($_POST['id_barang']) && isset($_POST['jumlah']) && isset($_POST['satuan']) && isset($_POST['harga'])) {
        $idBeliD = $_POST['id_belid'];
        $idBarang = $_POST['id_barang'];
        $jumlah = $_POST['jumlah'];
        $satuan = $_POST['satuan'];
        $harga = $_POST['harga'];
        
        // Memanggil fungsi untuk memperbarui data juald
        updateDataBeliD($idBeliD, $idBarang, $jumlah, $satuan, $harga);
        

        // Redirect atau tampilkan pesan sukses
        echo "<script>alert('Data berhasil diupdate');window.location = 'index.php?halaman=beli_d';</script>";
    } else {
        echo "Mohon isi semua field!";
    }
}

// Memeriksa apakah ID JualD ada di link
if (isset($_GET['id'])) {
    $idBeliD = $_GET['id'];

    // Fungsi untuk mendapatkan data JualD berdasarkan ID
    function getDataBeliD($idBeliD) {
        $connection = connectToDatabase();

        // Menyiapkan pernyataan SQL
        $query = "SELECT * FROM belid WHERE IdBeliD = $idBeliD";
        $statement = $connection->prepare($query);


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
    $dataBeliD = getDataBeliD($idBeliD);
}
?>



<h2>Form Update Beli D</h2>
<?php if (!empty($dataBeliD)): ?>
<form method="post" action="">
    <div class="form-group">
        <!-- <label for="id_juald">ID JualD</label> -->
        <input type="hidden" id="id_belid" name="id_belid" class="form-control"
            value="<?php echo $dataBeliD['IdBeliD']; ?>">
    </div>
    <div class=" form-group">
        <label for="id_barang">ID Barang</label>
        <input type="text" id="id_barang" name="id_barang" class="form-control"
            value="<?php echo $dataBeliD['IdBarang']; ?>">
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="number" id="jumlah" name="jumlah" class="form-control" value="<?php echo $dataBeliD['Jumlah']; ?>">
    </div>
    <div class="form-group">
        <label for="satuan">Satuan</label>
        <select id="satuan" name="satuan" class="form-control">
            <option value="tanki" <?php echo ($dataBeliD['Satuan'] === 'tanki') ? 'selected' : ''; ?>>Tanki</option>
            <option value="drum" value="liter" <?php echo ($dataBeliD['Satuan'] === 'drum') ? 'selected' : ''; ?>>
                Drum</option>
        </select>
    </div>
    <div class="form-group">
        <label for="harga">Harga/L</label>
        <input type="number" id="harga" name="harga" class="form-control">
    </div>
    <button type=" submit" value="Update BeliD" class="btn btn-primary">Simpan</button>
</form>
<?php else: ?>
<p>Data Beli D tidak ditemukan.</p>
<?php endif; ?>