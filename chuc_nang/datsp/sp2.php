<?php
 require_once("connection.php");
 $tv="select * from san_pham where id_sp='1'";

	$tv_2=$conn->query($tv); 
	while($row = $tv_2->fetch_assoc()) {  
    ?>
 
                 <h3> <?php echo $row['ten_sp']?><h3>
                  <span><b>Tình Trạng:</b><?php echo $row['tinh_trang']?></span> 
                  &emsp;&emsp;<span><b> Mã Sản Phẩm:</b>Đang cập nhật</span><br>     
                 <span><b>Thương hiệu:</b>IMAGE</span> 
                  &emsp;&emsp;<span><b> Phân Khúc:</b>Chống Nắng body</span><br><hr>    
                  <h5><?php echo $row['gia']?>Đ&emsp;<strike style="color:#0000005e;"><?php echo $row['gia_goc']?>Đ</strike> <span style="fonnt-size:16px; background-color: #e87373;">Tiết Kiệm:<?php echo $row['tyle_giam']?>%</span></h5><hr>
                  <br><br>
                  
        
                
    <?php } ?>