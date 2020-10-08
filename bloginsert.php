<?php  
$db = new mysqli("localhost", "root", "","portfolio");
				if ($db->connect_error) {
				    die("Connection failed: " . $db->connect_error);
				} 
	$title = $_POST['posttitle'];
	$content = $_POST['postcontent'];

	if($title!='' && $content!=''){
	$db->query("insert into blogs (title,content) values ('$title','$content')");	
	}
	echo "succesfully inserted";
?>