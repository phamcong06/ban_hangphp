
<?php
 require_once("connection.php");
 $tv="select * from san_pham where id_sp ='2'";

	$tv_2=$conn->query($tv); 
	while($row = $tv_2->fetch_assoc()) {
	echo "<img src='img/img-sp/".$row['img']."'style='width:400px;'>";
   
    ?>
        <div class="noi_dung" style="width:400px;">
             <center> <h3 ><?php echo $row['ten_sp']?></h3>
                <h6><?php echo $row['gia']?>Đ&emsp;<strike style="color:#0000005e;"><?php echo $row['gia_goc']?>Đ</strike></h6>
                <a href="" class="btn " style="border: 1px solid black; width:200px;margin-left:8%;">Xem Chi Tiết</a>
             </center> </div>     
    <?php } ?>
