<?php
require 'functions.php';
$id = $_GET["id"];

if (delete($id) > 0) {
  echo '
    <div class="cd-popup">
      <div class="cd-popup-container">
        <p>Data Berhasil Dihapus</p>
        <a href="index.php">OK</a>
      </div>
    </div>
  ';
} else {
  echo '
    <div class="cd-popup">
      <div class="cd-popup-container">
        <p>Data Gagal Dihapus</p>
        <a href="index.php">OK</a>
      </div>
    </div>
  ';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
  <link rel="stylesheet" type="text/css" href="style-create.css">
</head>
<body>
  
</body>
</html>