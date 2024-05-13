<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #007bff; /* Header color */
            margin-bottom: 20px;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333; /* Label color */
        }
        
        input[type="text"] {
            width: calc(100% - 12px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
            transition: border-color 0.3s;
        }
        
        input[type="text"]:focus {
            border-color: #007bff; /* Highlight border color on focus */
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Petugas</h1>
        <form action="<?= base_url('petugas/store') ?>" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama...">
            <label for="jabatan">Jabatan:</label>
            <input type="text" id="jabatan" name="jabatan" placeholder="Masukkan jabatan...">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Masukkan email...">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat...">
            <label for="tugas">Tugas:</label>
            <input type="text" id="tugas" name="tugas" placeholder="Masukkan tugas...">
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>
