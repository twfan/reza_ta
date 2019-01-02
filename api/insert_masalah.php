<?php 
	require('koneksi.php');

	$no_online = $_POST['no_online'];
	$keluhan = $_POST['keluhan'];

	$sql = mysqli_query($conn, "INSERT INTO masalah_manual (no_online, keluhan, status) VALUES('$no_online','$keluhan', 'PENGAJUAN ADUAN')");

	if($sql){
		
		$sql = mysqli_query($conn, "SELECT * FROM `masalah_manual` WHERE no_online=".$no_online." ORDER BY ID DESC LIMIT 1 ");

		$hasil = array();

		while ($baris = mysqli_fetch_array($sql)) {
			array_push($hasil, array(
					'ID' => $baris['ID'],
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
	}else
	{
		echo json_encode(array('response'=>'fail'));
	}



 ?>