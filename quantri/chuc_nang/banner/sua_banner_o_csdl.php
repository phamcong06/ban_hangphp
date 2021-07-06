<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$img=trim($_POST['img']);
	$img=str_replace("'","&#39;",$img);
	$id_qc=$_GET['id_qc'];
	if($img!="")
	{
		$tv="
		UPDATE quang_cao SET 
		img = '$img'
		WHERE id_qc =$id_qc;
		";
		mysqli_query($conn,$tv);
		 echo '<script language="javascript">';
echo 'alert("Sửa Thành Công")';
echo '</script>';
	}
	else 
	{
		thong_bao_html(" chưa được điền thông tin vào");
	}
?>