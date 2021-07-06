<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<h1><center>Sản Phẩm</center></h1>
<table width="1200px"   border="1">
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>Id Sản Phẩm</b></td>
		<td width="550px" ><b>Hình Ảnh</b></td>
		<td width="550px" ><b>Tên Sản Phẩm</b></td>
		<td width="550px" ><b>Giá Khuyến Mãi</b></td>
		<td width="550px" ><b>Giá Gốc</b></td>
		<td width="550px" ><b>Tỷ Lệ Giảm</b></td>
		<td width="550px" ><b>Tình Trạng</b></td>
		<td width="550px" ><b>Đường Link</b></td>
		<td align="center" width="220px" ><b>Sửa</b></td>
		<td align="center" width="220px" ><b>Xóa</b></td>
	</tr>
	<?php 
	$tv="select * from san_pham";
	$tv_1=$conn->query($tv); 

		while($tv_2 = $tv_1->fetch_assoc())
		{
			$id_sp=$tv_2['id_sp'];
			$img="../img/img-sp/".$tv_2['img'];
			$ten_sp=$tv_2['ten_sp'];
			$gia=$tv_2['gia'];
			$gia_goc=$tv_2['gia_goc'];
			$tyle_giam=$tv_2['tyle_giam'];
			$tinh_trang=$tv_2['tinh_trang'];
			$link=$tv_2['link'];
			

			$link_sua="?thamso=sua_sp&id_sp=".$id_sp."";
			$link_xoa="?xoa_sp=co&id_sp=".$id_sp;
			?>
				<tr >
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $id_sp; ?></a>
					</td>
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $img; ?>" style="width:100px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $ten_sp; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $gia; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $gia_goc; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $tyle_giam; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $tinh_trang; ?></a>
					</td>
					<td>
						<a href="<?php echo $link_sua; ?>"  ><?php echo $link; ?></a>
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