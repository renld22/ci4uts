<!-- views/dosen/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
</head>
<body>
    <h1>Edit Dosen</h1>
    <?php if (session()->has('errors')) : ?>
        <div style="color: red;">
            <?php foreach (session('errors') as $error) : ?>
                <?= $error ?><br>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <?php if (session()->has('success')) : ?>
        <div style="color: green;">
            <?= session('success') ?>
        </div>
    <?php endif ?>

    <?php if (session()->has('error')) : ?>
        <div style="color: red;">
            <?= session('error') ?>
        </div>
    <?php endif ?>

    <form action="<?= base_url('dosen/update/' . $dosen['id_dosen']) ?>" method="post">
     <!-- Menambahkan ID dosen ke URL -->
     <label for="nidn">NIDN:</label><br>
        <input type="text" id="nidn" name="nidn" value="<?= $dosen['nidn'] ?>"><br>     
        <label for="nama_dosen">Nama:</label><br>
        <input type="text" id="nama_dosen" name="nama_dosen" value="<?= $dosen['nama_dosen'] ?>"><br>
        <label for="mata_kuliah">Bidang Pekerjaan:</label><br>
        <input type="text" id="mata_kuliah" name="mata_kuliah" value="<?= $dosen['mata_kuliah'] ?>"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" value="<?= $dosen['email'] ?>"><br><br>
        <label for="status_dosen">status dosen:</label><br>
         <select name="status_dosen">
          <option value="">--pilih--</option>
          <option value="tetap">tetap</option>
          <option value="asistendosen">asisten dosen</option>
         </select>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
