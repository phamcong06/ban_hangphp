<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_sp=$_GET['id_sp'];
	

		$truy_van_xoa="DELETE FROM san_pham WHERE id_sp = '$id_sp' ";
	mysqli_query($conn,$truy_van_xoa);
		 echo '<script language="javascript">';
echo 'alert("Xoá Thành Công")';
echo '</script>';
	
?>