<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_kh=$_GET['id_kh'];

		$truy_van_xoa="DELETE FROM kh WHERE id_kh = '$id_kh' ";
	mysqli_query($conn,$truy_van_xoa);
		 echo '<script language="javascript">';
echo 'alert("Xoá Thành Công")';
echo '</script>';

?>