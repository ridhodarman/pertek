<?php
include '../../inc/koneksi.php';
$id = stripslashes(strip_tags(htmlspecialchars(base64_decode($_POST['id']), ENT_QUOTES)));
$file_notulensi = $_POST['file_notulensi'];
$no_sk = $_POST['no_sk'];
$no_sk = preg_replace("/[^a-zA-Z0-9]/", "", $no_sk);
$query = "SELECT notulensi_rapat_persiapan FROM format_pertek WHERE id=?";
$sql = $koneksi->prepare($query);
$sql->bind_param("i", $id);
$sql->execute();
$data = $sql->get_result();
while ($row = $data->fetch_assoc()) {
  $file_notulensi = $row['file_notulensi'];
}

$rand = rand(10,999);
$ekstensi =  array('rtf');
$filename = $_FILES['file_notulensi']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:../../editformat.php?format=".$_POST['id']."&gagal=Gagal input data, File notulensi_rapat_persiapan harus dalam format rtf");
}
else {
	$file="../../assets/format/".$file_notulensi;
	if ($file){
		if (!unlink($file))
		{
		echo ("gagal menghapus file $file");
		}
	}

	$file_notulensi = "_rapat persiapan-notulen___".$no_sk."___".$rand.'.rtf';
	move_uploaded_file($_FILES['file_notulensi']['tmp_name'], '../../assets/format/'.$file_notulensi);

	$query = "UPDATE format_pertek SET notulensi_rapat_persiapan=? WHERE id=?";
	$sql = $koneksi->prepare($query);
	$sql->bind_param("ss", $file_notulensi, $id);

	if ($sql->execute()) {
		header("location:../../editformat.php?format=".$_POST['id']."&alert=File notulensi_rapat_persiapan berhasil di-upload");
	}
}