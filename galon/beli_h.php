<h2>Data Beli H</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Beli H</th>
            <th>ID Suplier</th>
            <th>Tanggal</th>
            <!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM belih INNER JOIN supplier ON belih.IdSupplier = supplier.IdSupplier"); ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["IdBeliH"]; ?></td>
            <td><?= $pecah["IdSupplier"]; ?></td>
            <td><?= $pecah["Tanggal"]; ?></td>
            <!-- <td>
                <a href="index.php?halaman=ubahbelih&id=<?= $pecah['Idbelih']; ?>"
                    class="btn btn-warning btn-xs">ubah</a>
                |
                <a href="index.php?halaman=hapusbelih&id=<?= $pecah['Idbelih']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>

            </td> -->
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>
<a href="index.php?halaman=tambah_beli_h" class="btn btn-primary">Tambah Data Beli H</a>