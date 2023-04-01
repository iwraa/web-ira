<?php

include "databasepegawai.php";

$sql = "SELECT * FROM pegawai ORDER BY NIP DESC";
$result = mysqli_query($koneksi, $sql);