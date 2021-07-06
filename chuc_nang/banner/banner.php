<?php
 require_once("connection.php");
 $tv="select * from banner limit 0,1";

	$tv_2=$conn->query($tv); 
	while($row = $tv_2->fetch_assoc()) {
	echo "<img src='img/img-logo/".$row['img']."' width='".$row['width']."' height='".$row['height']."' >";}
?>