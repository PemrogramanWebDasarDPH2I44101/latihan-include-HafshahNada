<?php
session_start();
$nama = $_SESSION['nama']; 

$akses = $_SESSION ['akses'];

include 'header.php';
if ($akses!='admin') {
	echo "Halaman 3";
}else{
	header('location: form.html');
}

include 'footer.php';
?>