<?php  
$db = new mysqli("localhost", "root", "","portfolio");
				if ($db->connect_error) {
				    die("Connection failed: " . $db->connect_error);
				} 
	$name = $_POST['postname'];
	$categ = $_POST['postcate'];
	$subject =$_POST['subject'];
	$brief = $_POST['brief'];
	$outcome = $_POST['outcome'];


	if($name!='' && $categ!='' && $subject!='' && $brief!='' && $outcome!= ''){
	$db->query("insert into projects (name,category,subject,brief,outcome) values ('$name','$categ','$subject','$brief','$outcome')");	
	}
	echo "succesfully inserted";
?>