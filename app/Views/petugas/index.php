<?= $this->extend('tampilan') ?>
<?= $this->section('isi_content')?>
    <div class="header">
        <h1>List Petugas</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Tugas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($petugas as $item): ?>
                <tr>
                    <td><?= $item['nama'] ?></td>
                    <td><?= $item['jabatan'] ?></td>
                    <td><?= $item['email'] ?></td>
                    <td><?= $item['alamat'] ?></td>
                    <td><?= $item['tugas'] ?></td>
                    <td>
                        <a href="<?= base_url('petugas/edit/'.$item['id_petugas']) ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="<?= base_url('petugas/delete/'.$item['id_petugas']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="<?= base_url('petugas/create') ?>" class="btn btn-success">Tambah Petugas</a>
        
    </div>
    <?= $this->endSection()?>
