<?php 

if (isset($_POST['create'])) {
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

    $user_data = 'NIP='.$NIP. 'nama='.$nama. 'noHP='.$noHP. '&email='.$email;

	if (empty($NIP)) {
		header("Location: ../index.php?error=NIP is required&$user_data");
    }else if (empty($nama)) {
        header("Location: ../index.php?error=Nama is required&$user_data");
    }else if (empty($noHP)) {
        header("Location: ../index.php?error=No HP is required&$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?error=Email is required&$user_data");
    }else {

       $sql = "INSERT INTO pegawai(NIP, nama, noHP, email) 
              VALUES ('$NIP','$nama','$noHP','$email')";
       $result = mysqli_query($koneksi, $sql);
    }if ($result) {
        header("Location: ../read.php?success=berhasil dibuat");
    }else {
        header("Location: ../index.php?error=unknown error occurred&$user_data");
    }
}




