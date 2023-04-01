<?php

if (isset($_GET['NIP'])) {
    include "databasepegawai.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$NIP = validate($_GET['NIP']);

    $sql = "SELECT * FROM pegawai WHERE NIP=$NIP";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else {
        header("Location: read.php");
    }

}else if(isset($_POST['update'])){
    include "../databasepegawai.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$NIP = validate($_POST['NIP']);
    $nama = validate($_POST['nama']);
    $noHP = validate($_POST['noHP']);
	$email = validate($_POST['email']);

	if (empty($NIP)) {
		header("Location: ../update.php?NIP=$NIP&error=NIP is required");
    }else if (empty($nama)) {
        header("Location: ../update.php?NIP=$NIP&error=Nama is required");
    }else if (empty($noHP)) {
        header("Location: ../update.php?NIP=$NIP&error=No HP is required");
	}else if (empty($email)) {
		header("Location: ../update.php?NIP=$NIP&error=Email is required");
    }else {

       $sql = "UPDATE pegawai 
              SET NIP='$NIP', nama='$nama', noHP='$noHP', email='$email'
              WHERE NIP=$NIP ";
       $result = mysqli_query($koneksi, $sql);
    }if ($result) {
        header("Location: ../read.php?success=berhasil diupdate");
    }else {
        header("Location: ../update.php?NIP=$NIP&error=unknown error occurred&$user_data");
    }
}else {
    header("Location: read.php");
}