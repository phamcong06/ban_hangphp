<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<h1><center>Doanh Thu Tháng</center></h1>
<table width="990px"  border="1">
	
	<tr style="background:#CCFFFF;height:40px;" >
		<td width="550px" ><b>Tháng</b></td>
		<td width="550px" ><b>Tổng Tiền</b></td>
		
	</tr>
	<?php 
	$tv="select MONTH(date),SUM(so_tien) from hd group by MONTH(date)";
	$tv_1=$conn->query($tv); 

		while($tv_2 = $tv_1->fetch_assoc())
		{
			
			$thang=$tv_2['MONTH(date)'];
			$tien=$tv_2['SUM(so_tien)'];
			
			?>
				<tr >
					<td>
						<?php echo ($thang); ?>
					</td>
					<td>
						<?php echo ($tien); ?>
					</td>
					
				</tr>
			<?php 
		}
	?>
	
</table>