<?php 
		$tv="select img from logo_th order by id_th";
			$tv_1=$conn->query($tv); 
		while($tv_2 = $tv_1->fetch_assoc()) {
			
			
				echo "<img src='img/img_th/".$tv_2['img']."'>";
			
		}
	?>