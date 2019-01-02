<?php
	require_once('api/koneksi.php');

	$perda = $_POST['perda'];
	$tanggapan = $_POST['tanggapan'];
	$id = $_POST['id'];
	$data = mysqli_query($conn,"UPDATE masalah_manual SET perda='$perda', tanggapan='$tanggapan', status='MENDAPAT TANGGAPAN' WHERE id='$id'");

	if(!$data)
	{
		echo "salah query";
	}else
	{
		header('Location: index.php');
	}
?>