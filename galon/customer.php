<h2>Data Customer</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Customer</th>
            <th>Nama Customer</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM customer"); ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["IdCustomer"]; ?></td>
            <td><?= $pecah["Nama"]; ?></td>
            <td><?= $pecah["NoTelp"]; ?></td>
            <td><?= $pecah["Alamat"]; ?></td>
            <td>
                <a href="index.php?halaman=ubah_customer&id=<?= $pecah['IdCustomer']; ?>"
                    class="btn btn-warning btn-xs">ubah</a> |
                <a href="index.php?halaman=hapus_customer&id=<?= $pecah['IdCustomer']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>
            </td>
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>
<a href="index.php?halaman=tambah_customer" class="btn btn-primary">Tambah Data customer</a>