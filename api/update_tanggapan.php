<?php 
	require_once('koneksi.php');

	/*$id = $_GET['id'];*/

	$no_online = $_POST['no_online'];
	$rate = $_POST['rate'];

	$sql = mysqli_query($conn, "SELECT `id` FROM `masalah_manual` WHERE no_online=".$no_online." ORDER BY ID DESC LIMIT 1 ");

	$hasil = array();

	while ($baris = mysqli_fetch_array($sql)) {
		$id_string = $baris['id'];
	}


	$sql = "UPDATE `masalah_manual` SET bintang=".$rate.", status='SELESAI' WHERE id=".$id_string."";
	if (mysqli_query($conn, $sql)) {
	    echo json_encode(array('response'=>'success'));
	}else
	{
		echo json_encode(array('response'=>'fail'));
	}
	

 ?>