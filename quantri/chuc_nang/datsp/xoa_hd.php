<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_hd=$_GET['id_hd'];
// 	$tv="select * from hd where id_hd='$id_hd' ";
    
// $tv_1=$conn->query($tv);
// 	$tv_2 = $tv_1->fetch_assoc();
// 	if($tv_2[0]==0)
// 	{
		$truy_van_xoa="DELETE FROM hd WHERE id_hd = '$id_hd' ";
	mysqli_query($conn,$truy_van_xoa);
		 echo '<script language="javascript">';
echo 'alert("Xoá Thành Công")';
echo '</script>';
	// }
	// else 
	// {
	// 	thong_bao_html("Menu này vẫn còn dữ liệu nên không thể xóa");
	// }
?>