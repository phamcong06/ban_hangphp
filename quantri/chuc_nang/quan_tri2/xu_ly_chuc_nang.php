<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
	if(isset($_POST['bieu_mau_sua_banner']))
	{
		include("chuc_nang/banner/sua_banner_o_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_them_sp']))
	{
		include("chuc_nang/san_pham/them_sp_vao_csdl.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_sp']))
	{
		include("chuc_nang/san_pham/sua_sp_o_trong_csdl.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_sp']))
	{
		include("chuc_nang/san_pham/xoa_sp.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_sua_kh']))
	{
		include("chuc_nang/khachhang/sua_kh_o_trong_csdl.php");//đang làm tới đây 23/13/2020
		trang_truoc_html();
	}
	if(isset($_GET['xoa_kh']))
	{
		include("chuc_nang/khachhang/xoa_kh.php");
		trang_truoc_html();
	}
	if(isset($_GET['xoa_hd']))
	{
		include("chuc_nang/datsp/xoa_hd.php");
		trang_truoc_html();
	}
	if(isset($_POST['bieu_mau_them_san_pham']))
	{
		include("chuc_nang/san_pham/them_san_pham_vao_csdl.php");
		trang_truoc_html();
	}
	
	// if(isset($_GET['xoa_san_pham']))
	// {
	// 	include("chuc_nang/san_pham/xoa_san_pham.php");
	// 	trang_truoc_html();
	// }
	
	if(isset($_GET['thamso']))
	{
		if($_GET['thamso']=="thoat")
		{
			include("chuc_nang/quan_tri2/thoat.php");
			trang_truoc_html();
		}
	}
?>