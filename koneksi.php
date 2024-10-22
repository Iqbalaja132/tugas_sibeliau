<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "hotel";

$conn = mysqli_connect($server, $username, $password, $database);

$sql = "INSERT INTO tamu(id, nama, email)
        VALUES ('', 'Ini', 'ini@gmail.com')";


if (mysqli_query($conn, $sql)) {
    echo "Data ditambahkan";
} else {
    echo "Data gagal ditambahkan";
}
mysqli_close($conn);

?>