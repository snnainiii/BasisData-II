<h2>Data Jual D</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Jual D</th>
            <th>ID Jual H</th>
            <th>ID Barang</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM juald INNER JOIN jualh ON juald.IdJualH = jualh.IdJualH INNER JOIN barang ON juald.IdBarang = barang.IdBarang"); ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["IdJualD"]; ?></td>
            <td><?= $pecah["IdJualH"]; ?></td>
            <td><?= $pecah["IdBarang"]; ?></td>
            <td><?= $pecah["Jumlah"]; ?></td>
            <td><?= $pecah["Satuan"]; ?></td>
            <td>Rp. <?= number_format($pecah["Harga"]); ?>,-</td>

            <td>
                <a href="index.php?halaman=ubah_jual_d&id=<?= $pecah['IdJualD']; ?>"
                    class="btn btn-warning btn-xs">ubah</a>
                |
                <a href="index.php?halaman=hapus_jual_d&id=<?= $pecah['IdJualD']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>

            </td>
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>
<a href="index.php?halaman=tambah_jual_d" class="btn btn-primary">Tambah Data Jual D</a>