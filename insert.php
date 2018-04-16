<?php
    if($_SERVER['REQUEST_METHOD']=='POST') {
    
		$response = array();
		
		//Get Data
		$cabang = $_POST['cabang'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$hp = $_POST['hp'];
		$email = $_POST['email'];
		$pekerjaan = $_POST['pekerjaan'];
		$sosmed = $_POST['sosmed'];
		$member = $_POST['member'];
		$cif = $_POST['cif'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$usia = $_POST['usia'];
		$kelompok = $_POST['kelompok'];
		$kelas = $_POST['kelas'];
		$paket = $_POST['paket'];
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
		$d = $_POST['d'];
		$e = $_POST['e'];
		$f = $_POST['f'];
		$g = $_POST['g'];
		$h = $_POST['h'];
		$puas = $_POST['puas'];
		$rekom = $_POST['rekom'];
		$kritik = $_POST['kritik'];

		require_once('conn.php');
		
		$sql = "INSERT INTO surveypaket (cabang, nik, nama,jk,hp, email, pekerjaan, sosmed, member, cif, tgl_lahir, usia, kelompok, kelas, paket, a, b, c, d, e, f, g, h, puas, rekom, kritik) VALUES('$cabang','$nik','$nama','$jk','$hp','$email','$pekerjaan','$sosmed','$member','$cif','$tgl_lahir','$usia','$kelompok','$kelas','$paket', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$puas', '$puas', '$kritik')";
		
		
		if(mysqli_query($con,$sql)) {
		   $response["value"] = 1;
		   $response["message"] = "Data Survey Tersimpan";
		   echo json_encode($response);
		} else {
		   $response["value"] = 0;
		   $response["message"] = "oops injeksi! Coba lagi!";
		   echo json_encode($response);
		 }
		 
		// Close DB
		mysqli_close($con);
		} else {
		$response["value"] = 0;
		$response["message"] = "oops belegag! Coba lagi!";
		echo json_encode($response);
		}
?>
