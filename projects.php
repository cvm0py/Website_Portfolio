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
 
</head>
<style>
		 body {
		  background: #4dc3ff;
		  position: relative;
		  background: -webkit-linear-gradient(to right, #4dc3ff, #ddccff); 
		  background: linear-gradient(to right, #4dc3ff, #ddccff);
		}
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
			$('#form').show();
			$('#submit').show();
		});
		
		$('#submit').click(function(){
			$(this).hide();
			var name = $('.pn').val();
			var cate = $('.pc').val();
			var subject = $('.subject').val();
			var brief = $('.Brief').val();
			var  outcome= $('.Outcome').val();


			$('#form').hide();
		//	$('#result').append("<input type='button' class='btn btn-primary' id ='name"+ i+"' value='"+name+"'>");
		//	i++;
			$.post('pro.php',{postname:name, postcate:cate,subject:subject,brief:brief,outcome:outcome},
			function(data){
				$('#phpfunc').html(data);
			});
		window.location.href="projects.php";
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
			<input type="button" class="btn btn-success" id="newPro" name="newPro" class="" value="ADD PROJECT">
				<?php include 'fetchPro.php';?>
			<div id="result" class="mt-3"></div>
		</div>
		<div class="col-sm-6 text-success">
				
				<form method="post" style="display: none;" id="form" class="ml-6 mt-3">
					<div class="form-group">
   						 <label for="pn">PROJECT NAME</label>
    						<input type="text" class="pn form-control" placeholder="AVOID SPACES IN PROJECT NAME" name="pn" id="pn">
 					 </div>
 					 <div class="form-group">
   						 <label for="pc">PROJECT CATEGORY</label>
    						<input type="text" class="pc form-control" placeholder="ENTER THE CATEGORY(I.E - IOT, ML, WT, ANDROID)" name="pc" id="pc">
 					 </div>
 					 <div class="form-group">
   						 <label for="subject">SUBJECT </label>
    						<input type="text" class="subject form-control" placeholder="SHORT SUMMARY" name="subject" id="subject">
 					 </div>
					 <div class="form-group">
   						 <label for="Brief">BRIEF DESCRITION</label>
    						<textarea type="text" class="Brief form-control" placeholder="FULL DETAILED DESCRIPTION OF THE PROJECT" name="Brief" id="Brief"></textarea>
 					 </div>
 					 <div class="form-group">
   						 <label for="Outcome">OUTCOME</label>
    						<input type="text" class="Outcome form-control" placeholder="THINGS I HAVE LEARNED" name="Outcome" id="Outcome">
 					 </div>
				</form>
				
				
				<div id="phpfunc"></div>
				<input type="button" id="submit" name="submit" class="btn btn-primary" style="display: none;" value="Submit DATA">

		</div>
	</div>
</div>


</body>
</html>