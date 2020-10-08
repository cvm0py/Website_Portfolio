<!DOCTYPE html>
<html>
<head>
	<title>AboutMe pg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
 
</head>
<body>
	<style>
		body {
		  background: #e6ffff;
		  background: -webkit-linear-gradient(to right, #e6ffff, #e6ffe6);
		  background: linear-gradient(to right, #e6ffff, #e6ffe6);
		}
	</style>
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

	  <div class="bg img-thumbnail tab-pane container " style="background-image: url(bg/bg3.jpg);" >
		  	<!-- NEW PAGE --AboutME -->
		  	<div>
		  		<h1 style="color: darkgrey">About  Me</h1>
		  		<div class="row">
		  		<div class="col-sm-3">
						<div class="card" >
						  <img class="card-img-top img-thumbnail"  src="profile/2.jpg" alt="Card image">
						  <div class="card-body">
						    <h4 class="card-title">Shivam Tyagi</h4>
						    <a href="profile/resume.pdf" class="btn btn-primary" style="size: 15px" target="_blank">See Resume</a>
						    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						  </div>
						</div>
						</div>
						<div class="col-sm-9">
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
		  	</div>
		  </div>
		  </div>
</body>
</html>