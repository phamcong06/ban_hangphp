<style type="text/css" >
	div.slideshow img {width:100%;height:400px}
</style>
<div class="slideshow" id="slideshow" >
	<?php 
		$tv="select img from quang_cao order by id_qc";
			$tv_1=$conn->query($tv); 
		while($tv_2 = $tv_1->fetch_assoc()) {
			
			
				echo "<img src='img/img-qc/".$tv_2['img']."'>";
			
		}
	?>
</div>
<script type="text/javascript" >

	var i_img=0;
	var div_slideshow=document.getElementById("slideshow");
	var img_slideshow=div_slideshow.getElementsByTagName("img");
	for(var i=0;i<img_slideshow.length;i++)
	{
		img_slideshow[i].style.display="none";
	}
	img_slideshow[0].style.display="block";
	
	setInterval(function(){
		img_slideshow[i_img].style.display="none";
		i_img=i_img+1;
		if(i_img>=img_slideshow.length){i_img=0;}
		img_slideshow[i_img].style.display="block";		
	},5000);
</script>