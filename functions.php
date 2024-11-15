<?php
$db = mysqli_connect("localhost", "root", "", "dbujian");

function query($query)
{
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function add($data)
{
  global $db;
  $jurusan = htmlspecialchars($data["jurusan"]);
  $kelas = htmlspecialchars($data["kelas"]);
  $hari = htmlspecialchars($data["hari"]);
  $waktu = htmlspecialchars($data["waktu"]);
  $materi = htmlspecialchars(ucwords($data["materi"]));
  $instruktur = htmlspecialchars(ucwords($data["instruktur"]));
  $lokasi = htmlspecialchars($data["lokasi"]);

  $query = "INSERT INTO tbpraktikum VALUES ('', '$jurusan','$kelas','$hari','$waktu','$materi','$instruktur','$lokasi')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function update($data)
{
  global $db;
  $id = $data["id"];
  $jurusan = htmlspecialchars($data["jurusan"]);
  $kelas = htmlspecialchars($data["kelas"]);
  $hari = htmlspecialchars($data["hari"]);
  $waktu = htmlspecialchars($data["waktu"]);
  $materi = htmlspecialchars(ucwords($data["materi"]));
  $instruktur = htmlspecialchars(ucwords($data["instruktur"]));
  $lokasi = htmlspecialchars($data["lokasi"]);

  $query = "UPDATE tbpraktikum SET jurusan = '$jurusan', kelas = '$kelas', hari = '$hari', waktu = '$waktu', materi = '$materi', instruktur = '$instruktur', lokasi = '$lokasi' WHERE id = $id";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function delete($id)
{
  global $db;
  mysqli_query($db, "DELETE FROM tbpraktikum WHERE id = $id");
  return mysqli_affected_rows($db);
}