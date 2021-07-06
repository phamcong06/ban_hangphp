<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<h1><center>Thông Tin Hoá ĐƠn</center></h1>
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>Số Hoá Đơn</b></td>
		<td width="550px" ><b> Id Khách Hàng</b></td>
		<td width="550px" ><b> Ngày Đặt</b></td>
		<td width="550px" ><b> Tiền</b></td>
		
		<td align="center" width="220px" ><b>Xóa</b></td>
	</tr>
	<?php 
	$tv="select * from hd";
	$tv_1=$conn->query($tv); 
	
		while($tv_2 = $tv_1->fetch_assoc())
		{
			$id_hd=$tv_2['id_hd'];
			$id_kh=$tv_2['id_kh'];
			$date=$tv_2['date'];
			$so_tien=$tv_2['so_tien'];
		
			
			$link_xoa="?xoa_hd=co&id_hd=".$id_hd;
			?>
	
		
				<tr >
					<td>
						<a ><?php echo $id_hd; ?></a>
					</td>
					<td>
						<a  ><?php echo $id_kh; ?></a>
					</td>
					<td>
					 <a ><?php echo $date; ?></a>
					</td>
					<td>
						<a  ><?php echo $so_tien; ?></a> 
					
					<td align="center" >
						<a href="<?php echo $link_xoa; ?>" >Xóa</a>
					</td>
				</tr>
	
	<?php 
		}
	?>
</table>