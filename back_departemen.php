<?php 
	if(isset($_POST['bsimpan'])){

		//jika data akan diedit
		if ($_GET['hal'] == "edit") {
			//perintah edit data

			$ubah = mysqli_query($koneksi, " UPDATE tbl_departemen SET nama_departemen = '$_POST[nama_departemen]' where id_departemen ='$_GET[id]'");

		if($ubah){
			echo "<script> 
				alert ('ubah data sukses');
				document.location='?halaman=siswa';
			</script>";
		}
	}else {
			//membuat data baru
			$simpan = mysqli_query($koneksi, " INSERT INTO tbl_departemen VALUES ('' ,'$_POST[nama_departemen]')");

		if($simpan){
			echo "<script> 
				alert ('simpan data sukses');
				document.location='?halaman=siswa';
			</script>";

		}

		//perintah simpan data baru
			
		
	}
}	//klik edit / hapus
			if (isset($_GET ['hal'])) {

				if ($_GET ['hal'] == "edit") {
					$tampil = mysqli_query($koneksi, " SELECT * FROM tbl_departemen where id_departemen = '$_GET[id]'");
						$data = mysqli_fetch_array($tampil);
					if ($data) {

					$vnama_departemen = $data ['nama_departemen'];

				}
			}else{
				$hapus = mysqli_query($koneksi, " DELETE FROM tbl_departemen where id_departemen ='$_GET[id]'");
				echo "<script> 
				alert ('HAPUS data sukses');
				document.location='?halaman=siswa';
			</script>";

				
	}
}
	

?>