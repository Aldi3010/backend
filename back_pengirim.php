<?php 
	if(isset($_POST['bsimpan'])){

		//jika data akan diedit
		if (@$_GET['hal'] == "edit") {
			//perintah edit data

			$ubah = mysqli_query($koneksi, " UPDATE pengirim_surat SET 
				nama_pengirim= '$_POST[nama_pengirim]',
				alamat= '$_POST[alamat]',
				email= '$_POST[email]',
				no_hp= '$_POST[no_hp]'

				where id_pengirim ='$_GET[id]'");

		if($ubah){
			echo "<script> 
				alert ('ubah data sukses');
				document.location='?halaman=guru';
			</script>";
		}else{
			echo "<script> 
				alert ('ubah data gagal');
				document.location='?halaman=guru';
			</script>";
		}
	}else {
			//membuat data baru
			$simpan = mysqli_query($koneksi, " INSERT INTO pengirim_surat VALUES ('' ,
																'$_POST[nama_pengirim]',
																'$_POST[alamat]',
																'$_POST[email]',
																'$_POST[no_hp]'
															)");

		if($simpan){
			echo "<script> 
				alert ('simpan data sukses');
				document.location='?halaman=guru';
			</script>";

		}else{
			echo "<script> 
				alert ('simpan data gagal');
				document.location='?halaman=guru';
			</script>";
		}

		//perintah simpan data baru
			
		
	}
}	//klik edit / hapus
			if (isset($_GET ['hal'])) {

				if ($_GET ['hal'] == "edit") {
					$tampil = mysqli_query($koneksi, " SELECT * FROM pengirim_surat where id_pengirim = '$_GET[id]'");
						$data = mysqli_fetch_array($tampil);
					if ($data) {

					$vnama_pengirim = $data ['nama_pengirim'];
					$valamat = $data ['alamat'];
					$vemail = $data ['email'];
					$vno_hp = $data ['no_hp'];


				}
			}else{
				$hapus = mysqli_query($koneksi, " DELETE FROM pengirim_surat where id_pengirim ='$_GET[id]'");
				echo "<script> 
				alert ('HAPUS data sukses');
				document.location='?halaman=guru';
			</script>";

				
	}
}
	

?>