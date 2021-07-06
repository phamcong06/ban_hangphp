<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_loai_tour=$_GET['id_loai_tour'];
	$tv="select * from loai_tour where id_loai_tour='$id_loai_tour' ";
$tv_1=$conn->query($tv);
	$tv_2 = $tv_1->fetch_assoc();
	if($tv_2[0]==0)
	{
		$truy_van_xoa="DELETE FROM loai_tour WHERE id_loai_tour = '$id_loai_tour' ";
	mysqli_query($conn,$truy_van_xoa);
		 echo '<script language="javascript">';
echo 'alert("Xoá Thành Công")';
echo '</script>';
	}
	else 
	{
		thong_bao_html("Menu này vẫn còn dữ liệu nên không thể xóa");
	}
?>