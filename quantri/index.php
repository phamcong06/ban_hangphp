<?php
	session_start();
	$bien_bao_mat="co";
   
	include("chuc_nang/quan_tri2/xac_thuc_dang_nhap.php");
	include("chuc_nang/quan_tri2/ham.php");
	if(isset($xac_dinh_dang_nhap))
	{
		if($xac_dinh_dang_nhap=="co")
		{
			include("chuc_nang/quan_tri2/xu_ly_chuc_nang.php");
		}   
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Quản trị</title>
		<link rel="stylesheet" type="text/css" href="phan_bo_tro/css/index.css">
		<script src='phan_bo_tro/tinymce/js/tinymce/tinymce.min.js'></script>
		<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
		<!--===============================================================================================-->	

			<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
			<link rel="icon" type="image/png" href="phan_bo_tro/images/icons/favicon.ico"/>
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/vendor/animate/animate.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/vendor/select2/select2.min.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/css/util.css">
			<link rel="stylesheet" type="text/css" href="phan_bo_tro/css/main.css">
	</head>
	<body>
		<?php 
			if(!isset($xac_dinh_dang_nhap))
			{
				include("chuc_nang/quan_tri2/khung_dang_nhap.php");
			}
			else 
			{
				if($xac_dinh_dang_nhap=="co")
				{
					echo "<center>";
						include("chuc_nang/quan_tri2/trangchu.php");
					echo "</center>";
				}
			}
		?>
		<!--===============================================================================================-->
	<script src="phan_bo_tro/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="phan_bo_tro/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="phan_bo_tro/vendor/bootstrap/js/popper.js"></script>
	<script src="phan_bo_tro/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="phan_bo_tro/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="phan_bo_tro/vendor/daterangepicker/moment.min.js"></script>
	<script src="phan_bo_tro/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="phan_bo_tro/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="phan_bo_tro/js/main.js"></script>
	</body>

</html>