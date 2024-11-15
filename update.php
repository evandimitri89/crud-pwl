<?php
require 'functions.php';
$id = $_GET["id"];
$ptk = query("SELECT * FROM tbpraktikum WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  // cek data

  if (update($_POST) > 0) {
    echo '
      <div class="cd-popup">
        <div class="cd-popup-container">
          <p>Data Berhasil Diubah</p>
          <a href="index.php">OK</a>
        </div>
      </div>
    ';
  } else {
    echo '
      <div class="cd-popup">
        <div class="cd-popup-container">
          <p>Data Berhasil Diubah</p>
          <a href="index.php">OK</a>
        </div>
      </div>
    ';
  }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data</title>
  <link rel="stylesheet" type="text/css" href="style-create.css">
</head>

<body>
  <br>
  <br>
  <h1>Update Data</h1>

  <div id="form-container">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $ptk['id']; ?>">
      <ul>
        <br>
        <li>
          <label for="jurusan">Jurusan : </label>
          <select name="jurusan" id="jurusan" >
            <option value="TKJ" <?= $ptk["jurusan"] == "TKJ" ? "selected" : "";?>>TKJ</option>
            <option value="AKL" <?= $ptk["jurusan"] == "AKL" ? "selected" : "";?>>AKL</option>
            <option value="PM" <?= $ptk["jurusan"] == "PM" ? "selected" : "";?>>PM</option>
          </select>
        </li>
        <li>
          <label for="kelas">Kelas : </label>
          <input type="text" name="kelas" id="kelas" required value="<?= $ptk["kelas"]; ?>">
        </li>
        <li>
          <label for="hari">Hari : </label>
          <select name="hari" id="hari" >
            <option value="Senin" <?= $ptk["hari"] == "Senin" ? "selected" : "";?>>Senin</option>
            <option value="Selasa" <?= $ptk["hari"] == "Selasa" ? "selected" : "";?>>Selasa</option>
            <option value="Rabu" <?= $ptk["hari"] == "Rabu" ? "selected" : "";?>>Rabu</option>
            <option value="Kamis" <?= $ptk["hari"] == "Kamis" ? "selected" : "";?>>Kamis</option>
            <option value="Jumat" <?= $ptk["hari"] == "Jumat" ? "selected" : "";?>>Jumat</option>
            <option value="Sabtu" <?= $ptk["hari"] == "Sabtu" ? "selected" : "";?>>Sabtu</option>
            <option value="Minggu" <?= $ptk["hari"] == "Minggu" ? "selected" : "";?>>Minggu</option>
          </select>
        </li>
        <li>
          <label for="waktu">Waktu : </label>
          <input type="text" name="waktu" id="waktu" required value="<?= $ptk["waktu"]; ?>">
        </li>
        <li>
          <label for="materi">Materi : </label>
          <input type="text" name="materi" id="materi" required value="<?= $ptk["materi"]; ?>">
        </li>
        <li>
          <label for="instruktur">Instruktur : </label>
          <input type="text" name="instruktur" id="instruktur" required value="<?= $ptk["instruktur"]; ?>">
        </li>
        <li>
          <label for="lokasi">Lokasi : </label>
          <input type="text" name="lokasi" id="lokasi" required value="<?= $ptk["lokasi"]; ?>">
        </li>
        <br>
        <li>
          <button type="submit" name="submit" style="color: white;">Ubah Data</button>
        </li>

      </ul>
    </form>
  </div>
  
</body>

</html>