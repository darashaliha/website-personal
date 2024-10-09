<?php
$koneksi = mysqli_connect("localhost", "root", "", "portofolio_dara");

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    // Menggunakan prepared statements untuk mencegah SQL Injection
    $query = $koneksi->prepare("INSERT INTO kontak (nama, email, pesan) VALUES (?, ?, ?)");
    $query->bind_param("sss", $nama, $email, $pesan);

    if ($query->execute()) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Error: " . $query->error; // Menampilkan error jika ada
    }

    $query->close();
} else {
    echo "Metode tidak diizinkan.";
}

$koneksi->close();
?>
