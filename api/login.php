<?php 
	require_once('koneksi.php');

	/*$id = $_GET['id'];*/

	$user = $_POST['no_online'];
	$jenis_perizinan = $_POST['jenis_perizinan'];

	$sql = mysqli_query($conn, "SELECT * FROM `berkas` WHERE `no_online` = '$user' AND `jenis_perizinan` = '$jenis_perizinan'");

	$hasil = array();

	while ($baris = mysqli_fetch_array($sql)) {
		array_push($hasil, array(
				'ID' => $baris['ID'],
				'no_online' => $baris['no_online'],
				'jenis_perizinan' => $baris['jenis_perizinan'],
				'bentuk_usaha' => $baris['bentuk_usaha'],
				'perusahaan' => $baris['perusahaan'],
				'posisi_berkas' => $baris["posisi_berkas"],
				'status_berkas' => $baris["status_berkas"],
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