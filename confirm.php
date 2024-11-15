<?php
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style-create.css">
</head>
<body>
    <div class="cd-popup">
        <div class="cd-popup-container">
        <p>Apakah Anda Yakin Ingin Menghapus Data Ini ?</p>
        <a href="index.php">Tidak</a>
        <a href="delete.php?id=<?= $id; ?>">Ya</a>
    </div>
</div>
</body>
</html>