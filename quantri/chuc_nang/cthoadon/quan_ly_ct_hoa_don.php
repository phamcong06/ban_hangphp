<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<h1><center>Thông Tin Chi Tiết Hoá ĐƠn</center></h1>
<table width="990px" border="1">
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>Số Hoá Đơn</b></td>
		<td width="550px" ><b> Mã Sản Phẩm</b></td>
		<td width="550px" ><b> Số Lượng</b></td>
		
	</tr>
	<?php 
	$tv="select * from cthd";
	$tv_1=$conn->query($tv); 
	
		while($tv_2 = $tv_1->fetch_assoc())
		{
			$id_hd=$tv_2['id_hd'];
			$id_sp=$tv_2['id_sp'];
			$so_luong=$tv_2['so_luong'];
		
		
			
			?>
	
		
				<tr >
					<td>
						<?php echo $id_hd; ?>
					</td>
					<td>
						<?php echo $id_sp; ?>
					</td>
					<td>
					<?php echo $so_luong; ?>
					</td>
					
				</tr>
	
	<?php 
		}
	?>
</table>