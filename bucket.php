<!DOCTYPE html>
<html>
<head>
	<title>bucket pg</title>
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
		body,.cont {
		  background: #9796f0;
		  background: -webkit-linear-gradient(to right, #9796f0, #fbc7d4);
		  background: linear-gradient(to right, #9796f0, #fbc7d4);
		}
		.gap{
			margin-top: 20px;
		}
		.img {
		    float:  left;
		    height: 500px;
		    background-size: cover;
			}
			.linethru{
				text-decoration: line-through;
			}
			.block {
			  display: block;
			  width: 100%;
			  border: none;
			  background-color:transparent;
			  color: white;
			  margin:0px;
			  padding: 14px 28px;
			  font-size: 16px;
			  cursor: pointer;
			  text-align: left;
			}

			.block:hover {
			  background-color: #ddd;
			  color: black;
			}
			.mystyle {
				text-decoration: line-through;
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
  <!-- carousel -->
				<div id="demo" class="carousel slide gap" data-ride="carousel">

				  <!-- Indicators -->
				  <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				     <li data-target="#demo" data-slide-to="3"></li>
				    <li data-target="#demo" data-slide-to="4"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="https://media.giphy.com/media/wg4y5TWOFXN3a/giphy.gif" class="img img-thumbnail" alt="a" width="100" height="50">
				    </div>
				     <div class="carousel-item ">
				      <img src="https://media.giphy.com/media/OSGv6nSscwtq0/giphy.gif" class="img img-thumbnail" alt="b" width="100" height="50">
				    </div>
				     <div class="carousel-item ">
				      <img src="https://media.giphy.com/media/gdwhjFuHmkKKuWDD87/giphy.gif" class="img img-thumbnail" alt="c" width="100" height="50">
				    </div>
				     <div class="carousel-item ">
				      <img src="https://media.giphy.com/media/7vQZanyufdRe0/giphy.gif" class="img img-thumbnail" alt="d" width="100" height="50">
				    </div>
				    <div class="carousel-item">
				      <img src="https://media.giphy.com/media/CTX0ivSQbI78A/giphy.gif" class="img img-thumbnail" alt="e" width="100" height="50">
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
			<!--  -----------------------------------carousel ends----->
			<script>
				function func() {
				  var element = document.getElementById("myBn");
				  element.toggleClass("mystyle");
				}
			</script>
			<?php
				$errors="";
				$db = new mysqli("localhost", "root", "","portfolio");
				if ($db->connect_error) {
				    die("Connection failed: " . $db->connect_error);
				} 
				if(isset($_POST['submit'])){ 
				$taskString = $_POST['taskname'];
				if($taskString !=""){
				$db->query("insert into bucket(wish) values ('$taskString')");
				echo '<script>window.location.href="bucket.php"</script>';
					}
					else{
						$errors="Fill task in textbox below";
					}
				}
				
				//delete task
				if(isset($_GET['del_task'])){
					$id = $_GET['del_task'];
					$db->query("DELETE FROM bucket WHERE id=$id");
					header('location: bucket.php');
				}

				$allTasks = $db->query("SELECT * FROM bucket");
				$db->close(); 
			?>
				  		<!-- jumbotron -->
				<div class="container ">
				  <div class="jumbotron cont text-light">
				  <h1><spam style="color: lightblue"><i style='font-size:50px' class='fas'>&#xf43f;</i>FILL DA BUCKET<i style='font-size:50px' class='fas'>&#xf43f;</i></span></h1>  
				  	<form method="POST" action="bucket.php">
				  		<?php if(isset($errors)){ ?>
				  			<p><?php echo $errors; ?></p>
				  		<?php } ?>
					  		<input type="text" name="taskname" class="form-control" placeholder="KARLE APNE SOKH PURE">
					  	<button type="submit" name="submit" style="float: right;"class="btn btn-primary mt-2">THROW INTO BUCKET</button>
					 </form>
				  </div>     
				</div>
 
				
					<?php  $i =1; while($row = mysqli_fetch_array($allTasks)) { ?>
					
						<table class="table table-striped">
							<tr>
								<td class="delete"><a class="linethru close" href="bucket.php?del_task=<?php echo $row['Id']; ?>">x</a>
									<button id="myBn" class="block" onclick="func()" style="background-color: transparent;"><?php echo $i ; ?>. 
								<?php echo $row['wish']; ?> </button>
								</td>
						
							</tr>
						</table>
					
				<?php $i=$i+1; } ?>

				<script>
					if ( window.history.replaceState ) {
       					 window.history.replaceState( null, null, window.location.href );
    	 				 }			
    	 		</script>   		 

</body>
</html>