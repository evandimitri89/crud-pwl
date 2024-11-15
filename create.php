<?php
require 'functions.php';

$listkelas = [
  'XTKJ1', 'TKJ2', 'XTKJ3', 'XAKL1', 'XPM',
  'XITKJ1', 'XITKJ2', 'XITKJ3', 'XIAKL1', 'XIAKL2', 'XIPM',
  'XIITKJ1', 'XIITKJ2', 'XIITKJ3', 'XIIAKL1', 'XIIAKL2', 'XIIPM',
];

$error = '';
$success = '';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
  // validasi kelas
  $kelas = trim($_POST['kelas']);
  if (in_array($kelas, $listkelas)) {
    $waktu = $_POST['waktu'];

    // Validasi waktu
    if (preg_match('/^(2[0-3]|[01]?[0-9]).[0-5][0-9]-(2[0-3]|[01]?[0-9]).[0-5][0-9]$/', $waktu)) {

      //validasi input
      if (add($_POST) > 0) {
        echo '
          <div class="cd-popup">
            <div class="cd-popup-container">
              <p>Data Berhasil ditambahkan</p>
              <a href="index.php">OK</a>
            </div>
          </div>
        ';
      } else {
        echo '
          <div class="cd-popup">
            <div class="cd-popup-container">
              <p>Data Gagal ditambahkan</p>
              <a href="">OK</a>
            </div>
          </div>
        ';
      }
    }
    else {
      echo '
        <div class="cd-popup">
          <div class="cd-popup-container">
            <p>Data Gagal ditambahkan</p>
            <a href="">OK</a>
          </div>
        </div>
      ';
    }
  } else {
    echo '
      <div class="cd-popup">
        <div class="cd-popup-container">
          <p>Data Gagal ditambahkan</p>
          <a href="">OK</a>
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
  <title>Add Data</title>
  <link rel="stylesheet" type="text/css" href="style-create.css">
</head>

<body>
  <br>
  <br>
  <h1>Add Data</h1>
  <br>

  <div id="form-container">
    <form action="" method="post">
      <ul>
        <li>
          <label for="jurusan">Jurusan : </label>
          <select name="jurusan" id="jurusan">
            <option value="TKJ">TKJ</option>
            <option value="AKL">AKL</option>
            <option value="PM">PM</option>
          </select>
        </li>
        <li>
          <label for="kelas">Kelas : </label>
          <input type="text" name="kelas" id="kelas" placeholder=" Contoh: XITKJ1" required>
        </li>
        <li>
          <label for="hari">Hari : </label>
          <select name="hari" id="hari">
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
          </select>
        </li>
        <li>
          <label for="waktu">Waktu : </label>
          <input type="text" name="waktu" id="waktu" placeholder=" Contoh: 14.00-17.00" required>
        </li>
        <li>
          <label for="materi">Materi : </label>
          <input type="text" name="materi" id="materi" required>
        </li>
        <li>
          <label for="instruktur">Instruktur : </label>
          <input type="text" name="instruktur" id="instruktur" required>
        </li>
        <li>
          <label for="lokasi">Lokasi : </label>
          <input type="text" name="lokasi" id="lokasi" required>
        </li>

        <br>

        <li>
          <button type="submit" name="submit" style="color: white;">Tambah Data</button>
        </li>

      </ul>
    </form>
  </div>
  
</body>

</html>