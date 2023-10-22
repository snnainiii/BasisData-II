<h2>Data Beli D</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Beli D</th>
            <th>ID Beli H</th>
            <th>ID Barang</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM belid INNER JOIN belih ON belid.IdBeliH = belih.IdBeliH INNER JOIN barang ON belid.IdBarang = barang.IdBarang"); ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["IdBeliD"]; ?></td>
            <td><?= $pecah["IdBeliH"]; ?></td>
            <td><?= $pecah["IdBarang"]; ?></td>
            <td><?= $pecah["Jumlah"]; ?></td>
            <td><?= $pecah["Satuan"]; ?></td>
            <td>Rp. <?= number_format($pecah["Harga"]); ?>,-</td>

            <td>
                <a href="index.php?halaman=ubah_beli_d&id=<?= $pecah['IdBeliD']; ?>"
                    class="btn btn-warning btn-xs">ubah</a>
                |
                <a href="index.php?halaman=hapus_beli_d&id=<?= $pecah['IdBeliD']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>

            </td>
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>
<a href="index.php?halaman=tambah_beli_d" class="btn btn-primary">Tambah Data Beli D</a>