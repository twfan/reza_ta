<?php 
	require_once('koneksi.php');

	/*$id = $_GET['id'];*/

	$no_online = $_POST['no_online'];

	$sql = mysqli_query($conn, "SELECT * FROM `masalah_manual` WHERE no_online=".$no_online." ORDER BY ID DESC LIMIT 1 ");

	$hasil = array();

	while ($baris = mysqli_fetch_array($sql)) {
		array_push($hasil, array(
				'id' => $baris['id'],
				'tanggapan' => $baris['tanggapan'],
		));
	}

	if($sql){
		if(count($hasil)){
			echo json_encode(array('hasil'=>$hasil, 'response'=>'success'));
		}else
		{
			echo json_encode(array('response'=>'fail'));
		}
		
	}else
	{
		echo json_encode(array('response'=>'fail'));
	}

 ?>