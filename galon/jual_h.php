<h2>Data Jual H</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Jual H</th>
            <th>ID Customer</th>
            <th>Tanggal</th>
            <!-- <th>Aksi</th> -->
        </tr>
    </thead>
    <tbody>

        <?php $no=1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM jualh INNER JOIN customer ON jualh.IdCustomer = customer.IdCustomer"); ?>
        <?php while($pecah = $ambil->fetch_assoc()): ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $pecah["IdJualH"]; ?></td>
            <td><?= $pecah["IdCustomer"]; ?></td>
            <td><?= $pecah["Tanggal"]; ?></td>
            <!-- <td>
                <a href="index.php?halaman=ubahjualh&id=<?= $pecah['IdJualH']; ?>"
                    class="btn btn-warning btn-xs">ubah</a>
                |
                <a href="index.php?halaman=hapusjualh&id=<?= $pecah['IdJualH']; ?>"
                    onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>

            </td> -->
        </tr>
        <?php $no++; ?>
        <?php endwhile; ?>

    </tbody>
</table>
<a href="index.php?halaman=tambah_jual_h" class="btn btn-primary">Tambah Data Jual H</a>