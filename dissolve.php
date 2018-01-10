
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="/dissolve.php_files/dissolve.css">
	<style></style></head>

	<body>
		
	<div class="wrapper" id="wrapper">
			
	</div>
	
	<script type="text/javascript">
		var getImages = document.getElementsByClassName('imgs');
		var getImagesClone = getImages;
		var i = 0;
		var len = getImages.length;
		setInterval(function loopDissolve(){
			getImages[i].style.opacity = "1";
			getImages[i].style.visibility = "visible";
			for(var x = 0; x < len; x++)
			{
				if (i != x){
					getImages[x].style.opacity = "0";
					getImages[x].style.visibility = "hidden";
				}
			}
			i++;
			if (i >= 20){
				i = 0;
			}
		}, 4000);
		
		
		/* var x = 1;
		var getCanvas = document.getElementById('wrapper');
		setInterval(function loop() {
			getCanvas.style.transform = "translateX(-" + x + "00vw)";
			x++;
			if (x >= 20){
				x=0;
			}
		}, 4000);*/
	</script>
</body></html>