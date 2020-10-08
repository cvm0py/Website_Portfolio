<!DOCTYPE html>
<html>
<head>
	<title>TODO pg</title>
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
</style>
<body>

			<?php
				$errors="";
				$db = new mysqli("localhost", "root", "","portfolio");
				if ($db->connect_error) {
				    die("Connection failed: " . $db->connect_error);
				} 
				if(isset($_POST['submit'])){ 
				$taskString = $_POST['taskname'];
				if($taskString !=""){
				$db->query("insert into todo(task) values ('$taskString')");
				echo '<script>window.location.href="todo.php"</script>';
					}
					else{
						$errors="Fill task in textbox below";
					}
				}
				
				//delete task
				if(isset($_GET['del_task'])){
					$id = $_GET['del_task'];
					$db->query("DELETE FROM todo WHERE id=$id");
					header('location: todo.php');
				}

				$allTasks = $db->query("SELECT * FROM TODO");
				$db->close(); 
			?>
	<!--Navigation bar---------------------------------------------->
		<div id="nav-placeholder">

		</div>

		<script>
				$(function(){
				  $("#nav-placeholder").load("nav.html");
				});
		</script>
<!--end of Navigation bar--------------------------------------------------->


<!--todo page------------------------------------------------------->

			<div class="bg img-thumbnail container" style="background-image: url(bg/bg4.jpg);">
			



		  		  		<!-- jumbotron -->
				<div class="container">
				  <div class="jumbotron bg-secondary text-light">
				  <h1><spam style="color: lightblue"><i style='font-size:50px' class='fas'>&#xf43f;</i>TODO<i style='font-size:50px' class='fas'>&#xf43f;</i></span></h1>  
				  	<form method="POST" action="todo.php">
				  		<?php if(isset($errors)){ ?>
				  			<p><?php echo $errors; ?></p>
				  		<?php } ?>
					  		<input type="text" name="taskname" class="form-control" placeholder="KARLE APNE SOKH PURE">
					  	<button type="submit" name="submit"style="float: right;"class="btn btn-primary mt-2">ADD TASK</button>
					 </form>
				  </div>     
				</div>
 
				
					<?php  $i =1; while($row = mysqli_fetch_array($allTasks)) { ?>
					<div class="alert alert-primary alert-dismissible delete">
						<td><?php echo $i ; ?>. </td>
						<td><?php echo $row['task']; ?></td>
						<td class="delete"><a class="close" href="todo.php?del_task=<?php echo $row['Id']; ?>">x</a></td>
					</div>
				<?php $i=$i+1; } ?>


		<!--  JAVA SCRIPT
			<button class="close" type="button" data-dismiss="alert">&times;
						</button>
					<script type="text/javascript">
					var i=0;
					function func(){    
					    if (document.getElementById('inp').value!='') 
					    {   
					        i++;  
					        var title =document.getElementById('inp').value;
							var newDiv = document.createElement('div');
							var newSmall = document.createElement('small');
							newDiv.classList.add('alert');
							newDiv.classList.add('alert-primary');
							newDiv.classList.add('alert-dismissible');
							var newBtn = document.createElement('button');
							newBtn.classList.add('close');
							newBtn.setAttribute('type','button');
							newBtn.setAttribute('data-dismiss','alert');
							newBtn.appendChild(newSmall);
							var d = new Date();
							const btnTxt0 = document.createTextNode(d.getDate()+'/'+d.getMonth()+'/'+d.getFullYear());
							const btnTxt = document.createTextNode(' x');
							newSmall.appendChild(btnTxt0);
							newSmall.appendChild(btnTxt);
							newDiv.appendChild(newBtn);
							const divTxt = document.createTextNode(title);
							newDiv.appendChild(divTxt);
							document.getElementById('down').appendChild(newDiv);
							
					        
					    }
					}
					</script>

					<div id="down">
					</div>
									-->
		</div>
		<script>
   		 if ( window.history.replaceState ) {
       	 window.history.replaceState( null, null, window.location.href );
    	  }

    	</script>
</body>
</html>