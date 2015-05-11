<?php
	

	//print_r($_POST);

	
	require_once('connect.php');
	
	//Generates the query to be sent to mysql 
	$query = "INSERT INTO post(statusCode,status,sharePerms,date,permType) 
	VALUES ('".$_POST['title']."',
			'".$_POST['author']."',
			'".$_POST['journal']."',
			'".$_POST['date']."',
			'".$_POST['abstract']."'
			'".$_POST['link']."',
			'".$_POST['rating']."',
			'".$_POST['reason']."',
			'".$_POST['aurate']."',
			'".$_POST['reasearchL']."',
			'".$_POST['methodology']."',
			'".$_POST['practise']."',
			'".$_POST['benefits']."',
			'".$_POST['context']."',
			'".$_POST['result']."',
			'".$_POST['integrity']."',
			'".$_POST['conrating']."',
			'".$_POST['conreason']."',
			'".$_POST['conrate']."',
			'".$_POST['reques']."',
			'".$_POST['method']."',
			'".$_POST['metrics']."',
			'".$_POST['participants']."',
			)";
		
		
			
			
	//trys to send query to mysql
	if($conn->query($query) == true){
		//do if query was successful
		echo "Entry success";
	}
	//do if query wasn't successful
	else{echo "Error: $conn->error";}
	
	
	echo '<br><a href="poststatusform.php">Post another status</a>';
	echo '<br><a href="index.php">Return to Home page</a>';
	
	
	
	
	
	
	
?>