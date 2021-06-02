<!DOCTYPE html>
<html>
<head>


<style>
/* width */
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background:#00ffff ; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:#008080; 
}
</style>
 





	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">

</head>
<body>

<?php include 'menu.php';?>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/7.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>nature</h3>
        <p>such a great time </p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/5.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Nature</h3>
        <p>such a great time</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Nature</h3>
        <p>Such a great time</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>
<div class="container-fluid">
	 <div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/g2.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>I am Govinda Bhandari</h2>
			<p>A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.</p>
			<a href="about.php">check more</a>
		</div>
	 </div>
</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
  <img class="card-img-top" src="images/11.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
  <img class="card-img-top" src="images/10.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
  <img class="card-img-top" src="images/9.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

		</div>

	</div>
</div>

</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g1.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g2.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g3.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g4.jpg" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g5.png" class="img-fluid pb-4 ">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
<img src="images/g4.jpg" class="img-fluid pb-4 ">
			</div>
		</div>
	</div>
</section>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>comment</label>
				<textarea class="form-control" name="comment">
					
				</textarea>
			</div>
			 <button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>



<?php include 'footer.php';?>
</body>
</html>