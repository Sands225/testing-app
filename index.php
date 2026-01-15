<?php
$judul = "Kelompok MJS F";

$anggota = [
    "Eka Darma",
    "Sandi Wijaya",
    "Eri Widura",
    "Wiswan"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $judul; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            width: 420px;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,.2);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            color: #2a5298;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 30px;
        }

        .member {
            background: #f3f6ff;
            padding: 12px;
            margin: 10px 0;
            border-radius: 10px;
            font-weight: 500;
            color: #333;
            transition: .3s;
        }

        .member:hover {
            background: #2a5298;
            color: white;
            transform: scale(1.05);
        }

        footer {
            margin-top: 25px;
            font-size: 13px;
            color: #999;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(30px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

<div class="card">
    <h1><?php echo $judul; ?></h1>
    <div class="subtitle">Manajemen Jaringan Server Introduction</div>

    <?php foreach($anggota as $nama): ?>
        <div class="member">
            <?php echo $nama; ?>
        </div>
    <?php endforeach; ?>

    <footer>
        &copy; <?php echo date("Y"); ?> Kelompok MJS F
    </footer>
</div>

</body>
</html>