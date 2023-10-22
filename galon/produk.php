<h2>Data Produk</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM barang") ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["IdBarang"]; ?></td>
            <td><?= $pecah["Nama"]; ?></td>
            <td>Rp. <?= number_format($pecah["Harga/L"]); ?>,-</td>
            <td><?= $pecah['Stok(L)']; ?></td>
            <td><?= $pecah['Deskripsi']; ?></td>
            <td>
                <a href="index.php?halaman=ubah_produk&id=<?= $pecah['IdBarang']; ?>"
                    class="btn btn-warning btn-xs">ubah</a> |
                <a href="index.php?halaman=hapus_produk&id=<?= $pecah['IdBarang']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>

<a href="index.php?halaman=tambah_produk" class="btn btn-primary">Tambah Data Produk</a>