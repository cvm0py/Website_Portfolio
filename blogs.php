<!DOCTYPE html>
<html>
<head>
	<title>step1 pg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
 	<link rel="stylesheet" type="text/css" href="blog.css">

</head>
<style>
		.btnDown{
			margin-top: 25px;
		}
</style>

<!--Navigation bar---------------------------------------------->
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
<script>
	$(function(){
		var i=1;
		$('#newPro').click(function(){
			//$('.black').hide();
			$('#form').show();
			$('#submit').show();
		});
		
		$('#submit').click(function(){
			$(this).hide();
			var title = $('.pn').val();
			var content = $('.pc').val();
			alert(title);
			alert(content);

			$('#form').hide();
		//	$('#result').append("<input type='button' class='btn btn-primary' id ='name"+ i+"' value='"+name+"'>");
		//	i++;
			$.post('bloginsert.php',{posttitle:title, postcontent:content},
			function(data){
				$('#phpfunc').html(data);
			});
			window.location.href="blogs.php";
		});
		$('.recordedData').click(function(){
			var name = $(this).attr('id');
			$('#btn'+ name).toggle();
		});
		
	});
	
</script>
<style>
	.togap{
		margin-top: 200px;
		margin-left: 30px;
		margin-right: 30px;
	}
</style>
<body>
	


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6 text-success ">
			<br>
			<!--<div class="black w-100"><h1>MY</h1></div> -->
			<input type="button" class="btn btn-success" id="newPro" name="newPro" class="" value="ADD BLOG">
				<?php include 'blogfetch.php';?>
			<div id="result" class="mt-3"></div>
			
		</div>
		<div class="col-sm-6 text-success">
			<!--	<div class="black"><h1>BLOG<br>SPACE</h1></div> -->
				<form method="post" style="display: none;" id="form" class="ml-6 mt-3">
					<div class="form-group">
   						 <label for="pn">TITLE</label>
    						<input type="text" class="pn form-control" placeholder="AVOID SPACES IN TITLE NAME" name="pn" id="pn">
 					 </div>
					 <div class="form-group">
   						 <label for="pc">CONTENT</label>
    						<textarea type="text" rows="15" cols="20" class="pc form-control" placeholder="FULL DETAILED CONTENT OF THE INTEREST" name="pc" id="pc"></textarea>
 					 </div>
				</form>
				<div id="phpfunc"></div>
				<input type="button" id="submit" name="submit" class="btn btn-primary" style="display: none;" value="Submit DATA">

		</div>
	</div>
</div>


</body>
</html>