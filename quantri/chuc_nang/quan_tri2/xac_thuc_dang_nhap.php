<?php 
	if(!isset($bien_bao_mat)){exit();}
	function thong_bao_abc($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
				<style type="text/css">
				a.trang_truoc_c8w{text-decoration:none;color:blue;font-size:36px;margin-left:50px}
				a.trang_truoc_c8w:hover{color:red;}
				</style>
				<br><br><br><br>
				<a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w" >Bấm vào đây để trở về trang trước</a>
				<script type="text/javascript">
					alert("<?php echo $c; ?>");
				</script>
			</body>
			</html>		
		<?php 
		exit();
	}
	function trang_truoc_abc()
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}require_once("connection.php");
	
	if(isset($_POST['sub']))
	{
		$user_name=$_POST['user_name'];
		
		
		$password=$_POST['password'];
	
		
		$tv="select * from dang_nhap where Username='$user_name' and Password='$password' ";
		$tv_1=$conn->query($tv); 
		$tv_2 = $tv_1->fetch_assoc();
		if($tv_2==0)

		{
			$_SESSION['user_name']=$user_name;
			$_SESSION['password']=$password;
			
			
		}
		else 
		{
			thong_bao_abc("Thông tin nhập vào không đúng");


		}
		trang_truoc_abc();
	}
	
	if(isset($_SESSION['user_name']))
	{
		$user_name=$_SESSION['user_name'];
		$password=$_SESSION['password'];
		$tv="select * from dang_nhap where Username='$user_name' and Password='$password' ";
		$tv_1=$conn->query($tv);
		$tv_2 = $tv_1->fetch_assoc();
		if($tv_2==0)
		{
			$xac_dinh_dang_nhap="co";
		}
	}

?>