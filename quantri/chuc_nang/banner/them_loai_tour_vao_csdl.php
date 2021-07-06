<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ten_loai_tour=trim($_POST['ten_loai_tour']);
	$ten_loai_tour=str_replace("'","&#39;",$ten_loai_tour);
	if($ten_loai_tour!="")
	{
		$sql="
		INSERT INTO loai_tour (
		
		ten_loai_tour 
		)
		VALUES (
		
		'$ten_loai_tour'
		);";
		   mysqli_query($conn,$sql);
		   echo '<script language="javascript">';
echo 'alert("Đã Thêm Thành Công")';
echo '</script>';
	}
	else 
	{
		thong_bao_html("Tên menu chưa được điền vào");
	}
?>