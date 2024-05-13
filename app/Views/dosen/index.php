<?= $this->extend('tampilan') ?>
<?= $this->section('isi_content')?>
    <h1>List Dosen</h1>
    
    <div class="btn-container">
        <a href="<?= base_url('dosen/create') ?>" class="btn">Tambah Dosen</a>
        
    </div>
    <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Email</th>
                <th>Status Dosen</th>
                <th>Aksi</th>
            </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($dosen as $item): ?>
            <tr>
                <td><?= $item['nidn'] ?></td>
                <td><?= $item['nama_dosen'] ?></td>
                <td><?= $item['mata_kuliah'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['status_dosen'] ?></td>
                <td>
                    <a href="<?= base_url('dosen/edit/'.$item['id_dosen']) ?>">Edit</a>
                    <a href="<?= base_url('dosen/delete/'.$item['id_dosen']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div> </div>
<?= $this->endSection()?>