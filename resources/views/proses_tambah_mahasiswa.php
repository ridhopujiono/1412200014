<?php
include("data/db/koneksi.php");




$npm =  $_POST["npm"];
$nama =  $_POST["nama"];
$alamat =  $_POST["alamat"];
$jenis_kelamin =  $_POST["jenis_kelamin"];
$no_hp =  $_POST["no_hp"];

// var_dump([$npm, $nama, $alamat, $no_hp, $jenis_kelamin]);
$query = "INSERT INTO `mahasiswa` VALUES ('$npm','$nama','$alamat','$jenis_kelamin','$no_hp')";

$data = mysqli_query($db, $query);
if ($data) {
    header("Location: mahasiswa.php");
} else {
    echo mysqli_error($db);
}
