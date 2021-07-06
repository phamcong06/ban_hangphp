<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	$id_kh=$_GET['id_kh'];
	$tv="select * from kh where id_kh='$id_kh' ";
	$tv_1=$conn->query($tv); 
	$tv_2 = $tv_1->fetch_assoc();
	$ten_kh=$tv_2['ten_kh'];
	$sdt=$tv_2['sdt'];
	$dia_chi=$tv_2['dia_chi'];
	$gmail=$tv_2['gmail'];
	$link_dong="?thamso=quan_ly_kh";
?>
<form action="" method="post">
	<table width="990px" style="background:  #BDBDBD;">
		<tr>
			<td width="180px" ><b style="color:blue;font-size:20px" >Sửa Thông Tin Khách Hàng</b><br><br> </td>
			<td width="810px" align="right" >
				<a href="<?php echo $link_dong; ?>" class="lk_a1" style="margin-right:30px" >Đóng</a>
			</td>
		</tr>
		<tr>
			<td >Tên : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ten_kh" value="<?php echo $ten_kh; ?>" >
			</td>
		</tr>	
		<tr>
			<td >Số Điện Thoại : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="sdt" value="<?php echo $sdt; ?>" >
			</td>
		</tr>
		<tr>
			<td >Địa chỉ : </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="dia_chi" value="<?php echo $dia_chi; ?>" >
			</td>
		</tr>
		<tr>
			<td >Gmail: </td>
			<td >
				<input style="width:400px;margin-top:3px;margin-bottom:3px;" name="gmail" value="<?php echo $gmail; ?>" >
			</td>
		</tr>	
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_sua_kh" value="Sửa menu" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>