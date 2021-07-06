<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$ten_kh=trim($_POST['ten_kh']);
	$ten_kh=str_replace("'","&#39;",$ten_kh);

	$sdt=trim($_POST['sdt']);
	$sdt=str_replace("'","&#39;",$sdt);

	$dia_chi=trim($_POST['dia_chi']);
	$dia_chi=str_replace("'","&#39;",$dia_chi);

	$gmail=trim($_POST['gmail']);
	$gmail=str_replace("'","&#39;",$gmail);
	$id_kh=$_GET['id_kh'];
	if($ten_kh!="")
	{
		$tv="
		UPDATE kh SET 
		ten_kh = '$ten_kh',
		sdt = '$sdt',
		dia_chi = '$dia_chi',
		gmail = '$gmail'
		WHERE id_kh =$id_kh;
		";
		mysqli_query($conn,$tv);
		 echo '<script language="javascript">';
echo 'alert("Sửa Thành Công")';
echo '</script>';
	}
	else 
	{
		thong_bao_html(" chưa được điền vào");
	}
?>