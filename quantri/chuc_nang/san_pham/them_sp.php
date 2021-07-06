<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<form action="" method="post">
	<table width="990px"  style="background: #BDBDBD;" border="1">
		<tr>
			<td colspan="2" ><b style="color:blue;font-size:20px" ><center> Thêm Sản Phẩm</center></b><br><br> </td>
			
		</tr><br>
		
		</tr>
		<tr>
			<td width="150px">Hình Ảnh</td>
			<td><input type="text" name="img" ></td>
			

		</tr>
		<tr>
			<td width="150px">Tên Sản Phẩm</td>
			<td><input type="text" name="ten_sp"></td>
		</tr>
		<tr>
			<td width="150px">Giá Khuyến Mãi</td>
			<td><input type="text" name="gia"></td>
			
		</tr>
		<tr>
			<td>Giá Gốc</td>
			<td><input type="text" name="gia_goc"></td>
		</tr>
		<tr>
			<td width="150px"> Tỷ lệ giảm</td>
			<td><input type="text" name="tyle_giam"></td>
		</tr>
		<tr>
			<td width="150px"> Tình Trạng</td>
			<td><input type="text" name="tinh_trang"></td>
		</tr>
		<tr>
			<td width="150px"> Đường link</td>
			<td><input type="text" name="link"></td>
		</tr><br>
		
		<tr>
			<td>&nbsp;</td>
			<td>
				<br>
				<input type="submit" name="bieu_mau_them_sp" value="Thêm Sản Phẩm" style="width:200px;height:50px;font-size:24px" >
			</td>
		</tr>
	</table>
</form>
				
				
				
				