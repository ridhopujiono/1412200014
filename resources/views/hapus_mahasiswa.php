<?php
include("data/db/koneksi.php");




$npm =  $_GET["npm"];

// var_dump([$npm, $nama, $alamat, $no_hp, $jenis_kelamin]);
$query = "DELETE FROM `mahasiswa` WHERE npm = '$npm'";

$data = mysqli_query($db, $query);
if ($data) {
    header("Location: mahasiswa.php");
} else {
    echo mysqli_error($db);
}
