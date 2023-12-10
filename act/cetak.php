<?php
if (isset($_POST['und-rapat'])) {
    include 'update-berkas.php';
} else {
	header("location:../");
}
?>