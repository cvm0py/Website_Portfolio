<!DOCTYPE html>
<html>
<head>
	<title>index pg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
 
</head>
<body>
	<!--Navigation bar------------------------------------------------------>
	<div >
	<!-- Generalised code -------------------------------------------------->
	<!-- navbar -->
	<div class="mynav rounded mt-3">
		<ul class="nav nav-pills">
		  <li class="nav-item">
		    <a class="nav-link" href="index.php">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="AboutME.php" >AboutME</a>
		  </li>
		  <li class="nav-item">

		  <div class="dropdown">
		  <button type="button" class="btn btn-outline-light text-primary  dropdown-toggle" data-toggle="dropdown">
		   Projects
		  </button>
			  <div class="dropdown-menu">
			    <a class="dropdown-item" href="projects.php">IOT</a>
			    <a class="dropdown-item" href="projects.php">Machine Learning</a>
			    <a class="dropdown-item" href="projects.php">Web Dev.</a>
			    <a class="dropdown-item" href="projects.php">Others</a>
			  </div>
		  </div>

		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="todo.php">  TODO</a>
		  </li>
		  <li class="nav-item">
		  	<div class="dropdown">
				  <button type="button" class="btn btn-outline-light text-primary dropdown-toggle" data-toggle="dropdown">
				   Studies
				  </button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="studies.php">AISSCE</a>
				    <a class="dropdown-item" href="studies.php">AISSE</a>
				    <a class="dropdown-item" href="studies.php">COLLEGE</a>
				  </div>
			</div>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="bucket.php"> Bucket List</a>
		  </li>
		  	 <li class="nav-item ">
		    <a class="nav-link" href="blogs.php">My Blog</a>
		  </li>
		 
		</ul>
	</div>
</div>

<!--end of Navigation bar--------------------------------------------------->
<!----HOME PAGE----------------------------------------------------------->
	<div class="bg img-thumbnail" style="background-image:url(bg/bg2.jpg);" >
		  	<!-- Home Pg -->
				  	
				  		<!-- jumbotron -->
				<div class="container">
				  <div class="jumbotron bg-secondary text-light">
				  <h1>Life # vIRTUAL hOME oF <spam style="color: lightblue"><i style='font-size:50px' class='fas'>&#xf43f;</i>S.Mr.Gamer<i style='font-size:50px' class='fas'>&#xf43f;</i></span></h1>  
				    <p>Whats the News of Tommorow ??</p>
				  </div>     
				</div>

				<!-- carousel -->
				<div id="demo" class="carousel slide" data-ride="carousel">

				  <!-- Indicators -->
				  <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="carousel/e1.jpg" class="img-thumbnail" alt="a" width="100" height="50">
				    </div>
				    <div class="carousel-item">
				      <img src="carousel/e2.jpg" class="img-thumbnail" alt="b" width="100" height="50">
				    </div>
				    <div class="carousel-item">
				      <img src="carousel/e3.jpg" class="img-thumbnail" alt="c" width="100" height="50">
				    </div>
				  </div>
				  
				  <!-- Left and right controls -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </a>
			</div>

		</div>


</body>
</html>