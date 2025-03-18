<?php
session_start(); // Memulai session untuk menyimpan dan mengambil data sesi pengguna

// Ambil data transaksi dari URL menggunakan metode GET
$no_transaksi = $_GET['no_transaksi']; // Nomor transaksi
$tanggal = $_GET['tanggal']; // Tanggal transaksi
$nama_cus = $_GET['nama_cus']; // Nama customer
$id = $_GET['id']; // ID produk yang dipilih
$jumlah_produk = $_GET['jumlah_produk']; // Jumlah produk yang dibeli
$total_harga = $_GET['total_harga']; // Total harga berdasarkan jumlah dan harga satuan produk
$pembayaran = $_GET['pembayaran']; // Jumlah uang yang dibayarkan oleh customer
$kembalian = $_GET['kembalian']; // Kembalian jika pembayaran lebih dari total harga
$gambar = $_GET['gambar']; // Nama file gambar produk

// Ambil nama kasir dari session, jika tidak ada gunakan default "userlsp"
$kasir = isset($_SESSION['username']) ? $_SESSION['username'] : 'userlsp';


// Daftar produk dalam bentuk array (berisi nama produk dan gambar)
$dataobat = array(
    array("Paracetamol", "paracetamol.jpg"),
    array("Ibuprofen", "ibuprofen.jpg"),
    array("Asam Mefenamat", "asammefenamat.jpg"),
    array("CTM", "ctm.jpg"),
);

// Mengambil nama produk berdasarkan ID yang dipilih
$produk_nama = $dataobat[$id][0];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8"> <!-- Menentukan karakter set yang digunakan -->
    <title>Invoice</title> <!-- Judul halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Memuat Bootstrap untuk tampilan yang lebih menarik -->
</head>

<body>

    <body>
        <div class="container mt-5"> <!-- Membuat container dengan margin atas 5 (mt-5) untuk memberi jarak -->
            <div class="card"> <!-- Membuat kartu (card) Bootstrap untuk membungkus isi nota -->

                <div class="card-header text-center"> <!-- Bagian header kartu, teks di tengah -->
                    <h3>Nota Pembelian</h3> <!-- Judul nota pembelian -->
                </div>

                <div class="card-body"> <!-- Bagian isi dari kartu -->
                    <!-- Menampilkan detail transaksi -->
                    <p><strong>No. Transaksi:</strong> <?= $no_transaksi; ?></p> <!-- Menampilkan nomor transaksi -->
                    <p><strong>Tanggal:</strong> <?= $tanggal; ?></p> <!-- Menampilkan tanggal transaksi -->
                    <p><strong>Nama Customer:</strong> <?= $nama_cus; ?></p> <!-- Menampilkan nama pelanggan -->
                    <p><strong>Nama Kasir:</strong> <?= $kasir; ?></p> <!-- Menampilkan nama kasir yang diambil dari session -->
                    <hr> <!-- Garis pemisah antara info pelanggan dan info produk -->

                    <!-- Menampilkan detail produk yang dibeli -->
                    <p><strong>Produk:</strong> <?= $produk_nama; ?></p> <!-- Menampilkan nama produk yang dibeli -->
                    <p><strong>Jumlah Produk:</strong> <?= $jumlah_produk; ?></p> <!-- Menampilkan jumlah produk yang dibeli -->

                    <!-- Menampilkan total harga dalam format mata uang (Rp) -->
                    <p><strong>Total Harga:</strong> Rp <?= number_format($total_harga, 0, ',', '.'); ?></p>

                    <!-- Menampilkan jumlah pembayaran dalam format mata uang -->
                    <p><strong>Pembayaran:</strong> Rp <?= number_format($pembayaran, 0, ',', '.'); ?></p>

                    <!-- Menampilkan kembalian dalam format mata uang -->
                    <p><strong>Kembalian:</strong> Rp <?= number_format($kembalian, 0, ',', '.'); ?></p>

                    <!-- Bagian untuk menampilkan gambar produk yang dipilih -->
                    <div class="text-center"> <!-- Membuat gambar berada di tengah -->
                        <img src="img/<?= $gambar; ?>" width="100"> <!-- Menampilkan gambar produk dengan lebar 100px -->
                    </div>
                </div>

                <div class="card-footer text-center"> <!-- Bagian footer dari kartu -->
                    <!-- Tombol untuk mencetak nota menggunakan JavaScript -->
                    <button onclick="window.print()" class="btn btn-primary">Cetak Nota</button>

                    <!-- Tombol kembali ke halaman beranda -->
                    <a href="beranda.php" class="btn btn-secondary">Kembali</a>
                </div>

            </div> <!-- Penutup div.card -->
        </div> <!-- Penutup div.container -->
    </body>

</body>

</html>