<!DOCTYPE HTML>
<!--
	Concept by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<html>

<?php
	require_once('api/koneksi.php');
?>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Pengaduan Perizinan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="scrolled">
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="text-left">
					<div id="fh5co-logo"><a href="index.php">Admin Pengaduan Perizinan<span>.</span></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li class=""><a href="login.php">Logout</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
		<table border="1" width="95%" cellpadding="5" cellspacing="2" >
			<tr align="center" bgcolor="black">
				<td>Nomer Online</td>
				<td>Jenis Perijinan</td>
				<td>Nama Perusahaan</td>
				<td>Status</td>
			</tr>
			<?php
				$id = $_GET['id'];
				$data = mysqli_query($conn, "SELECT keluhan.id, keluhan.no_online, berkas.jenis_perizinan, berkas.perusahaan, keluhan.keluhan, keluhan.status
			FROM `masalah_manual` as keluhan
			INNER JOIN `berkas` as berkas ON keluhan.no_online = berkas.no_online
            WHERE keluhan.id=$id");
				while($row = mysqli_fetch_array($data)){
					echo "<tr align='center'>";
					echo "<td>".$row['no_online']."</td>";
					echo "<td>".$row['jenis_perizinan']."</td>";
					echo "<td>".$row['perusahaan']."</td>";
					echo "<td>".$row['status']."</td>";	
					echo "</tr>";
				}
			?>
		</table><br>
		<form action="insert_tanggapan.php" method="post">
			<table  width="50%" cellpadding="5" cellspacing="2" >
				<?php
					$id = $_GET['id'];
					$data = mysqli_query($conn, "select * from masalah_manual where id=$id");
					while($row = mysqli_fetch_array($data)){
						echo"<td style='vertical-align: top;'>Keluhan</td>";
						echo"<td><textarea rows='4' cols='50' disabled>".$row['keluhan']."</textarea></td>";
						echo "<input type='hidden' name='id' value='".$row['id']."'>";
					}
				?>
				<tr >
					<td style="vertical-align: top;">Perda</td>
					<td><input type="text" name="perda"></td>
				</tr>
				<tr>
					<td > &nbsp</td>
					<td> &nbsp</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">Tanggapan</td>
					<td><textarea rows="4" cols="50" name="tanggapan"></textarea></td> 
				</tr>
				<tr>
					<td></td>
					<td><button>Verifikasi</button></td>
				</tr>
			</table>
		</form>
		<div class="bottom-control" style="text-align: left; padding: 30px;">
		
	</div>
		
	</div>
	<div class="container">
			<div class="row row-pb-md">
				<div class="text-center "><br><br><br>
					<h3>Pengaduan Perizinan</h3>
					
				</div>
				
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy;2018.</small> 
						<small class="block">Admin Pengaduan Perizinan </small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

