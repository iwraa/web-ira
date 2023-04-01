<?php
   if(isset($_GET['NIP'])){
      include "../databasepegawai.php";
       function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
      }

   $NIP = validate($_GET['NIP']);

	// QUERY UNTUK MENGHAPUS DATA
	$sql = "DELETE FROM pegawai WHERE NIP=$NIP";
   $result = mysqli_query($koneksi, $sql);

	// NOTIF HASIL DELETE
	if ($sql) {
		// jika berhasil tampilkan pesan berhasil delete data
		header("Location: ../read.php?success=berhasil dihapus");
	} else {
		// jika gagal tampilkan pesan kesalahan
		header("Location: ../read.php?error=unknown error occurred&$user_data");
	}	
}			
?>