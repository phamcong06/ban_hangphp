<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<h1><center>Banner</center></h1>
<table width="990px" class="tb_a1" >
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>Hình Ảnh</b></td>
		<td align="center" width="220px" ><b>Sửa</b></td>
		
	</tr>
	<?php 
	$tv="select * from quang_cao";
	$tv_1=$conn->query($tv); 
	
		while($tv_2 = $tv_1->fetch_assoc())
		{
			$id_qc=$tv_2['id_qc'];
			$img="../img/img-qc/".$tv_2['img'];
			
			$link_sua="?thamso=sua_banner&id_qc=".$id_qc."";
		
			?>
				<tr >
				
					<td>
					<a href="<?php echo $link_sua; ?>" >
							<img src="<?php echo $img; ?>" style="width:300px;margin-top:10px;margin-bottom:10px;" border="0" >
						</a>
					</td>
					
					<td align="center" >
						<a href="<?php echo $link_sua; ?>" >Sửa</a>
					</td>
					
				</tr>
			<?php 
		}
	?>
	
</table>