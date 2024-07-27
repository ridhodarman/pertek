<?php 
// koneksi database
if (isset($_POST['baru'])) {
	include '../inc/koneksi.php';

	try {
		$no_sk = $_POST['no_sk'];
		$tanggal_sk = $_POST['tanggal_sk'];
		$rand = rand();
		
		$ekstensi =  array('pdf');
		$filename = $_FILES['file_sk']['name'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if(!in_array($ext,$ekstensi) ) {header("location:format.php?alert=Gagal input data, File SK harus dalam format pdf");}

		function cek_format($file) {
			if(isset($_POST[$file])) {
				$ekstensi =  array('rtf');
				$filename = $_FILES[$file]['name'];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				if(!in_array($ext,$ekstensi) ) {header("location:format.php?alert=Gagal input data, Format file ".$file." harus dalam format .rtf");}
			}
		}

		$file_sk = "_SK___".$no_sk."___".$rand.'.pdf';
		move_uploaded_file($_FILES['file_sk']['tmp_name'], '../assets/format/'.$file_sk);

		$query = "insert into format_pertek (no_sk, tanggal_sk, file_sk) 
				VALUES (?, ?, ?)";
		$sql = $koneksi->prepare($query);
		$sql->bind_param("sss", $no_sk, $tanggal_sk, $file_sk);

		if ($sql->execute()) {
	    	echo "<script>alert('Data Berhasil Disimpan');location='../inputformat.php';</script>";
	    	//header("location:../format.php?sukses=Format SK No. ".$no_sk." berhasil dibuat");
		}
	}
	catch (exception $e) {
		// Cek koneksi
		// if (mysqli_connect_errno()){
		// echo "gagal diproses, kendalanyo:<br/>" . mysqli_connect_error();
		// }
		// else {
		// 	echo "ado error, caliak data yang di input lu";
		// }
		echo $e;
		//header("location:../assets/error");
	}
}
else {
	header("location:../");
}
?>