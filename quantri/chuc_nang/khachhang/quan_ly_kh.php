<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<h1><center>Thông Tin Khách Hàng</center></h1>
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>ID Khách Hàng</b></td>
		<td width="550px" ><b>Tên Khách Hàng</b></td>
		<td width="550px" ><b> Số Điện Thoại</b></td>
		<td width="550px" ><b> Điạ Chỉ</b></td>
		<td width="550px" ><b> Email</b></td>
		<td align="center" width="220px" ><b>Sửa</b></td>
		<td align="center" width="220px" ><b>Xóa</b></td>
	</tr>
	<?php 
	$tv="select * from kh";
	$tv_1=$conn->query($tv); 
	
		while($tv_2 = $tv_1->fetch_assoc())
		{
			$id_kh=$tv_2['id_kh'];
			$ten_kh=$tv_2['ten_kh'];
			$sdt=$tv_2['sdt'];
			$dia_chi=$tv_2['dia_chi'];
			$gmail=$tv_2['gmail'];
			$link_sua="?thamso=sua_kh&id_kh=".$id_kh."";
			$link_xoa="?xoa_kh=co&id_kh=".$id_kh;
			?>
				<tr >
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $id_kh; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $ten_kh; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $sdt; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $dia_chi; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $gmail; ?></a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >Sửa</a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" >Xóa</a>
					</td>
				</tr>
			<?php 
		}
	?>
	
</table>