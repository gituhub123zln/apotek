<?php


$dataobat = array(
    array("Paracetamol", "paracetamol obat untuk meredakan demam dan nyeri ringan hingga sedang, seperti sakit kepala atau pegal-pegal", 10000, "paracetamol.jpg"),
    array("IbuProfen", "Ibuprofen adalah obat untuk meredakan nyeri dan menurunkan demam", 2600, "ibuprofen.jpg"),
    array("Asam Mefenamat", "Asam Mefenamat adalah obat untuk meredakan nyeri dan menurunkan demam", 2600, "asammefenamat.jpg"),
    array("CTM", "CTM adalah obat yang digunakan untuk mengatasi gejala alergi atau rhinitis alergi", 6000, "ctm.jpg"),
);
?>

<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apotek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            font-size: 18px;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.2s ease-in-out;
        }

        .btn-dark {
            background-color: #343a40;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-dark:hover {
            background-color: #23272b;
        }

        .banner {
            height: 500px;
            object-fit: cover;
        }


        .text-shadow {
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="beranda.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="container-fluid p-0 position-relative text-center">
        <img src="img/banner.png" class="img-fluid w-100 banner" alt="Banner">
        <h1 class="position-absolute top-50 start-50 translate-middle text-white fw-bold text-shadow">Apotek SMK ISFI</h1>
    </div>

    <!-- Daftar Produk -->
    <div class="container my-5">
        <h2 class="fw-bold mb-4 text-start">Daftar Obat Apotek SMK ISFI BANJARMASIN</h2>
        <div class="row">
            <!-- $dataobat dipecah menjadi satu persatu, $index tempat utk menampung nomor array nya,
                 $data utk menampung data yang ada di array -->
            <?php foreach ($dataobat as $index => $data) { ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow border-0">
                        <img src="img/<?= $data[3] ?>" class="card-img-top" alt="<?= $data[0] ?>" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="fw-bold"><?= $data[0] ?></h5>
                            <p class="text-muted small"><?= $data[1] ?></p>
                            <p class="fw-bold">Rp <?= number_format($data[2], 0, ',', '.') ?></p>
                        </div>
                        <div class="card-footer bg-white border-0 text-center">
                            <!-- mengirimkan id sesuai index yang dipilih -->
                            <a href="transaksi.php?id=<?= $index ?>" class="btn btn-dark w-100">Pilih Obat</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>