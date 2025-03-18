<?php
session_start(); // Tambahkan ini di baris pertama untuk memulai session

// Mendeklarasikan variabel untuk username dan password default
$defaultusername = "userlsp";  // Username default yang benar
$defaultpassword = "smkisfibjm"; // Password default yang benar

// Proses login ketika tombol login ditekan
if (isset($_POST['login'])) { // Mengecek apakah form login sudah disubmit (tombol login ditekan)

    // Mengambil nilai dari input username dan password yang dimasukkan oleh pengguna
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mengecek apakah username dan password yang dimasukkan sesuai dengan default
    if ($username === $defaultusername && $password === $defaultpassword) {

        $_SESSION['username'] = $username; // Simpan username ke session

        echo "<script>alert('Login berhasil!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=beranda.php'>"; // Redirect ke beranda
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>"; // Redirect ke login
    }
}
