<!-- <div class="row"style="float:left;">
<?php
 require_once("connection.php");
 $tv="select * from san_pham ";

	$tv_2=$conn->query($tv); 
	while($row = $tv_2->fetch_assoc()) {?>
        for($i=1;$i<=3;$i++)
			{
	echo "<img src='img/img-sp/".$row['img']."'style='width:400px;'>";
   
    
        <div class="noi_dung" style="width:400px;">
             <center> <h3 ><?php echo $row['ten_sp']?></h3>
                <h6><?php echo $row['gia']?>Đ&emsp;<strike style="color:#0000005e;"><?php echo $row['gia_goc']?>Đ</strike></h6>
                <a href="<?php echo $row['link']?>" class="btn " style="border: 1px solid black; width:200px;margin-left:8%;">Xem Chi Tiết</a>
             </center>    
   
</div>} <?php } ?>
<br><br>
Sản phẩm của chúng tôi 
<br><br> -->

<?php 
	 require_once("connection.php");
     $tv="select * from san_pham ";
	$tv_1=$conn->query($tv); 
	while($tv_2 = $tv_1->fetch_assoc()) {
	echo "<table>";
	
		echo "<tr>";
			for($i=1;$i<=3;$i++)
			{
				echo "<td align='center' width='215px' valign='top' >";
					if($tv_2!=false)
					{
						$link_anh="img/img-sp/".$tv_2['img'];
                        $link_chi_tiet=$tv_2['link'];
						// $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
						$gia=$tv_2['gia'];
						$gia=number_format($gia,0,",",".");
						echo "<a href='$link_chi_tiet' >";
							echo "<img src='$link_anh' width='400px' >";
						echo "</a>";
						echo "<br>";
						echo "<br>";
						echo "<a href='$link_chi_tiet' >";
							echo $tv_2['ten_sp'];
						echo "</a>";
						echo "<div style='margin-top:5px' >";						
						echo $gia;
						echo "</div>";
						echo "<br>";
					}
					else 
					{
						echo "&nbsp;";
					}
				echo "</td>";
				if($i!=3)
				{
					$tv_2 = $tv_1->fetch_assoc();
				}
			}
		echo "</tr>";
	
	echo "</table>";}
?>