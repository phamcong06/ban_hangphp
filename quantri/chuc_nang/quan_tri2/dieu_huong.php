<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	if(!isset($_GET['thamso'])){$thamso="";}else{$thamso=$_GET['thamso'];}
	
	switch($thamso)
	{
		
			
		
		case "quan_ly_banner":
			include("chuc_nang/banner/quan_ly_banner.php");
		break;
		case "sua_banner":
			include("chuc_nang/banner/sua_banner.php");
		break;
		
		case "them_sp":
			include("chuc_nang/san_pham/them_sp.php");
		break;
		case "quan_ly_san_pham":
			include("chuc_nang/san_pham/quan_ly_san_pham.php");
		break;
		case "sua_tour":
			include("chuc_nang/menu_doc/sua_menu_doc.php");
		break;
		case "quan_ly_kh":
			include("chuc_nang/khachhang/quan_ly_kh.php");
		break;
		case "sua_kh":
			include("chuc_nang/khachhang/sua_kh.php");
		break;
		case "quan_ly_doanh_so":
			include("chuc_nang/doanhso/quan_ly_doanh_so.php");
		break;
		case "quan_ly_dat_sp":
			include("chuc_nang/datsp/quan_ly_dat_sp.php");//làm tới đây
		break;
		case "quan_ly_ct_hoa_don":
			include("chuc_nang/cthoadon/quan_ly_ct_hoa_don.php");
		break;
		case "xem_hoa_don":
			include("chuc_nang/hoa_don/xem_hoa_don.php");
		break;
		case "san_pham_trang_chu":
			include("chuc_nang/san_pham_trang_chu/san_pham_trang_chu.php");
		break;
		case "san_pham_noi_bat":
			include("chuc_nang/san_pham_noi_bat/san_pham_noi_bat.php");
		break;
		case "slideshow":
			include("chuc_nang/slideshow/lien_ket_slideshow.php");
		break;
		case "them_slideshow":
			include("chuc_nang/slideshow/them_slideshow.php");
		break;
		case "quan_ly_slideshow":
			include("chuc_nang/slideshow/quan_ly_slideshow.php");
		break;
		case "sua_slideshow":
			include("chuc_nang/slideshow/sua_slideshow.php");
		break;
		case "sua_banner":
			include("chuc_nang/banner/sua_banner.php");
		break;
		case "sua_footer":
			include("chuc_nang/footer/sua_footer.php");
		break;
		case "them_quang_cao_trai":
			include("chuc_nang/quang_cao_trai/them_quang_cao_trai.php");
		break;
		case "quan_ly_quang_cao_trai":
			include("chuc_nang/quang_cao_trai/quan_ly_quang_cao_trai.php");
		break;
		case "sua_quang_cao_trai":
			include("chuc_nang/quang_cao_trai/sua_quang_cao_trai.php");
		break;
		case "them_quang_cao_phai":
			include("chuc_nang/quang_cao_phai/them_quang_cao_phai.php");
		break;
		case "quan_ly_quang_cao_phai":
			include("chuc_nang/quang_cao_phai/quan_ly_quang_cao_phai.php");
		break;
		case "sua_quang_cao_phai":
			include("chuc_nang/quang_cao_phai/sua_quang_cao_phai.php");
		break;
		case "sua_thong_tin_quan_tri":
			include("chuc_nang/quan_tri_2/sua_thong_tin_quan_tri.php");
		break;
		default: 
			
	}
?>