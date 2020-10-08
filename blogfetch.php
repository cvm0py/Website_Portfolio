<!DOCTYPE html>
<html>
<head>
	<title>fetchPro pag</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>


<?php 
		$db = new mysqli("localhost", "root", "","portfolio");
		if ($db->connect_error) {
		    die("Connection failed: " . $db->connect_error);
		} 
			$results= $db->query("select * from blogs"); ?>
			
									
		<?php while($row = mysqli_fetch_array($results)) { ?>
			<div class="container"> 	
						<div class="row ">
									<input type="button" style="width: 150px;" class="m-1 btn btn-outline-success recordedData" id="<?php echo $row['title']; ?>" name="name" value="<?php echo $row['title']; ?>">
										
									<div id="btn<?php echo $row['title']; ?>" class="w-100" style="display: none;" >

											<div class="form-group">
						   						 <label for="pn">TITLE</label>
						    						<input type="text" class="form-control" value="<?php echo $row['title'] ?>" name="pn" id="pn">
						 					 </div>
						 					 <div class="form-group">
						   						 <label for="pc">PROJECT CATEGORY</label>
						    						<textarea type="text" class="form-control" name="pc" id="pc"><?php echo $row['content'] ?></textarea>
						 					 </div>
									</div>	
					    </div>
				</div>
	<?php } ?>

</body>
</html>