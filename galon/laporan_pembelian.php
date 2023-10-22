<h2>Laporan Pembelian</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Id Barang</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM vlap_pembelian") ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["Tanggal"]; ?></td>
            <td><?= $pecah["IdBarang"]; ?></td>
            <td><?= $pecah["Jumlah"]; ?></td>
            <td><?= $pecah["Satuan"]; ?></td>
            <td>Rp. <?= number_format($pecah["harga"]); ?>,-</td>
            <!-- <td>
                <a href="index.php?halaman=ubahproduk&id=<?= $pecah['IdBarang']; ?>"
                    class="btn btn-warning btn-xs">ubah</a> |
                <a href="index.php?halaman=hapusproduk&id=<?= $pecah['IdBarang']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>
            </td> -->
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>