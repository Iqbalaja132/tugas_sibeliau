<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Form ini mengirimkan data ke form_action.php -->
    <form action="form_action.php" method="post">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" placeholder="Nama" id="nama">
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" placeholder="Email" id="email">
        <br>
        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>

</html>
