<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Cek apakah tombol kirim sudah ditekan
if (isset($_POST['kirim'])) {
    // Validasi input: cek apakah id, nama, dan email kosong
    if (empty($_POST['nama']) || empty($_POST['email'])) {
        // Jika ada input yang kosong, redirect kembali ke form.php dengan query string error
        echo "Inputan tidak boleh kosong";
    } else {
        // Ambil data dari form
        $nama = ($_POST['nama']);
        $email = ($_POST['email']);

        // Tampilkan hasil inputan
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email . "<br>";
    }
} else {
    // Jika form tidak disubmit, redirect kembali ke form.php
    header('Location: form.php');
    exit();
}
?>
</body>
</html>