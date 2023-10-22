<h2>Data Suplier</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Suplier</th>
            <th>Nama Suplier</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM supplier"); ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["IdSupplier"]; ?></td>
            <td><?= $pecah["Nama"]; ?></td>
            <td><?= $pecah["NoTelp"]; ?></td>
            <td><?= $pecah["Alamat"]; ?></td>
            <td>
                <a href="index.php?halaman=ubah_suplier&id=<?= $pecah['IdSupplier']; ?>"
                    class="btn btn-warning btn-xs">ubah</a> |
                <a href="index.php?halaman=hapus_suplier&id=<?= $pecah['IdSupplier']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>
<a href="index.php?halaman=tambah_suplier" class="btn btn-primary">Tambah Data Suplier</a>