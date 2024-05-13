<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Dosen</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Dosen</h1>
        <form action="<?= base_url('dosen/store') ?>" method="post" class="mt-4">
            <div class="form-group">
                <label for="nidn">NIDN:</label>
                <input type="text" id="nidn" name="nidn" class="form-control">
            </div>

            <div class="form-group">
                <label for="nama_dosen">Nama:</label>
                <input type="text" id="nama_dosen" name="nama_dosen" class="form-control">
            </div>

            <div class="form-group">
                <label for="mata_kuliah">Mata Kuliah:</label>
                <input type="text" id="mata_kuliah" name="mata_kuliah" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="status_dosen">Status Dosen:</label>
                <select name="status_dosen" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="tetap">Tetap</option>
                    <option value="asistendosen">Asisten Dosen</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
