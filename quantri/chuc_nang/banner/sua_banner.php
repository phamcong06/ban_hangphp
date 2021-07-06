<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_qc=$_GET['id_qc'];
	$tv="select * from quang_cao where id_qc='$id_qc' ";
	$tv_1=$conn->query($tv); 
	$tv_2 = $tv_1->fetch_assoc();
	$img=$tv_2['img'];
	$link_dong="?thamso=quan_ly_banner";
?>
<form action="" method="post">
	<table width="990px" style="background:  #BDBDBD;">
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Thay Hình Ảnh</b><br><br> </td>
			<td width="810px" align="right" >
				<a href="<?php echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a>
			</td>
		</tr>
		<tr>
			<td >Hình Ảnh : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="img" value="<?php echo $img; ?>" >
			</td>
		</tr>		
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_banner" value="Sửa Banner" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>