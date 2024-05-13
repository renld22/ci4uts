<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       body {
    animation: animatedBackground 20s linear infinite alternate;
}

@keyframes animatedBackground {
    0% {
        background-position: 0% 0%;
    }
    100% {
        background-position: 100% 0%;
    }
}

        .content-wrapper {
            margin: 50px auto;
            width: 50%;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .logo {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .page-title {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-dosen {
            background-color: #28a745;
        }

        .btn-petugas {
            background-color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <img src="https://umbanten.ac.id/images/2023/02/17/logo-umbanten.png" alt="Universitas UMB" class="logo">
        <h1 class="page-title">Sistem Informasi Universitas Muhammadiyah Banten</h1>
        <div class="btn-container">
            <a href="<?= base_url('dosen') ?>" class="btn btn-dosen"><i class="fas fa-user-tie mr-2"></i>Data Dosen</a>
            <a href="<?= base_url('petugas') ?>" class="btn btn-petugas"><i class="fas fa-user-shield mr-2"></i>Data Petugas</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
