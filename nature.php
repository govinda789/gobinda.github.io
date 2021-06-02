<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title></title>
</head>
<body>
<section>
	<header>
		<a href="#" class="logo">World</a>
		<div class="toggle">
			<img src="images/menu.png">
			</div>
	</header>
	<img src="images/bg.jpg" class="bg">
	<img src="images/bird.png" class="bird">
	<div class="content">
		<h2>We can save the <br><span>Earth</span></h2>
		<p>We can save the Earth by preventing pollution of the Earth and the natural resources such as air and water.</p>
<a href="#">Join us</a>
	</div>
	<ul class="sci">
		<li><a href="#"><img src="images/facebook.png"></a></li>
		<li><a href="#"><img src="images/twitter.png"></a></li>
        <li><a href="#"><img src="images/instagram.png"></a></li>
	</ul>
	<div class="textBlocks">
		<div class="block">
			<h3>Defenders of Earth</h3>
			<p>Sunlight, air, water and vegetation help sustain life on the Earth.</p>
		</div>
		<div class="block">
			<h3>How to save Water.</h3>
			<p>Water is the most important natural resource made <br>available to us by the planet.</p>
		</div>
	</div>
</section>



<script type="text/javascript">
	document.addEventListener("mousemove",function(e){
	const bg = document.querySelecter('.bg');
	const bird = document.querySelecter('.bird');
	const content = document.querySelecter('.content');

   bg.style.width = 100 + e.pageX/100 + '%';
    bg.style.height = 100 + e.pageX/100 + '%';
     bird.style.right = 100 + e.pageX/2 + 'px';
     content.style.left = 100 + e.pageX/2.5 + 'px';
	})
</script>

</body>
</html>