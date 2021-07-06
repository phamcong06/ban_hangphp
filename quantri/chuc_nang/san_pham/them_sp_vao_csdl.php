<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	
	$img=trim($_POST['img']);
	$img=str_replace("'","&#39;",$img);

	$ten_sp=trim($_POST['ten_sp']);
	$ten_sp=str_replace("'","&#39;",$ten_sp);

	$gia=trim($_POST['gia']);
	$gia=str_replace("'","&#39;",$gia);

	$gia_goc=trim($_POST['gia_goc']);
	$gia_goc=str_replace("'","&#39;",$gia_goc);

	$tyle_giam=trim($_POST['tyle_giam']);
	$tyle_giam=str_replace("'","&#39;",$tyle_giam);

	$tinh_trang=trim($_POST['tinh_trang']);
	$tinh_trang=str_replace("'","&#39;",$tinh_trang);

	$link=trim($_POST['link']);
	$link=str_replace("'","&#39;",$link);


	
                    $sql = "insert into san_pham(img,ten_sp,gia,gia_goc,tyle_giam,tinh_trang,link) 
                    values
                    ('$img','$ten_sp','$gia','$gia_goc','$tyle_giam','$tinh_trang','$link')";
                    mysqli_query($conn,$sql);
                    
              
		  
		   echo '<script language="javascript">';
echo 'alert("Đã Thêm Thành Công")';
echo '</script>';

?>