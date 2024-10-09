<?php
session_start();

// Koneksi ke database dan pemrosesan data
$username = filter_input(INPUT_POST, 'nama');
$email = filter_input(INPUT_POST, 'email');
$pesan = filter_input(INPUT_POST, 'pesan');

if (!empty($username) && !empty($email) && !empty($pesan)) {
    $host = 'localhost';
    $dbusername = "root"; // Nama pengguna untuk MySQL
    $dbpassword = ""; // Jika ada password, masukkan di sini
    $dbname = "portofolio_dara";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_errno()) {
        die('Connect error (' . mysqli_connect_error() . ') ' . mysqli_connect_error());
    } else {
        $sql = "INSERT INTO kontak (nama, email, pesan) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $email, $pesan); // 'sss' berarti semua parameter bertipe string

        if ($stmt->execute()) {
            // Menyimpan pesan sukses dalam session
            $_SESSION['success_message'] = "Pesan Anda telah berhasil dikirim.";
            header('Location: index.php'); // Redirect ke halaman index.php
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required.";
    die();
}
