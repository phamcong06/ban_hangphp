<?php
 require_once("connection.php");
 $tv="select * from san_pham where id_sp='1'";

	$tv_2=$conn->query($tv); 
	while($row = $tv_2->fetch_assoc()) {
	echo "<img src='img/img-sp/".$row['img']."' >";
   
    ?>
 <div class="chi_tiet" style="display:none;">
                 <center> <?php echo $row['ten_sp']?>
                <h6><?php echo $row['gia']?>Đ&emsp;<strike style="color:#0000005e;"><?php echo $row['gia_goc']?>Đ</strike></h6></center>
                <a href="" class="btn " style="border: 1px solid black; width:200px;margin-left:35%;">Xem Chi Tiết</a>
                </div>
    <?php } ?>