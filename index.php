<?php
require 'functions.php';
$praktikum = query("SELECT * FROM tbpraktikum")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD PWL</title>
  <link rel="stylesheet" type="text/css" href="style-index.css">
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
 
  <br><br>
  <div class="container">
  <div>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Hari</th>
        <th>Waktu</th>
        <th>Materi</th>
        <th>Instruktur</th>
        <th>Lokasi</th>
        <th>Action</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($praktikum as $row): ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $row["jurusan"]; ?></td>
          <td><?= $row["kelas"]; ?></td>
          <td><?= $row["hari"]; ?></td>
          <td><?= $row["waktu"]; ?></td>
          <td><?= $row["materi"]; ?></td>
          <td><?= $row["instruktur"]; ?></td>
          <td><?= $row["lokasi"]; ?></td>
          <td>
            <button id="update"><a href="update.php?id=<?= $row["id"]; ?>">Update</a></button>
            <button id="delete"><a href="confirm.php?id=<?= $row["id"]; ?>">Delete</a></button>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach ?>
    </table> 
    <br>
    <button><a href="create.php">ADD DATA</a></button>
    </div>
  </div>
  <br>
  <br>
</body>

</html>