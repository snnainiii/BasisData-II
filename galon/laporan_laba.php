<h2>Laporan Laba</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Id Jual D</th>
            <th>Id Jual H</th>
            <th>Id Barang</th>
            <th>Jumlah</th>
            <th>Satuan</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Laba</th>
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM vlap_laba") ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["Tanggal"]; ?></td>
            <td><?= $pecah["IdJualD"]; ?></td>
            <td><?= $pecah["IdJualH"]; ?></td>
            <td><?= $pecah["IdBarang"]; ?></td>
            <td><?= $pecah["Jumlah"]; ?></td>
            <td><?= $pecah["Satuan"]; ?></td>
            <td>Rp. <?= number_format($pecah["Harga Jual"]); ?>,-</td>
            <td>Rp. <?= number_format($pecah["Harga Beli"]); ?>,-</td>
            <td>Rp. <?= number_format($pecah["Laba"]); ?>,-</td>
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>