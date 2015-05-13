<?php
	

	//print_r($_POST);

	
	require_once('connect.php');
	
	//Generates the query to be sent to mysql 
	$query = "INSERT INTO post(title,author,journal,date,abstract,link,rating,reason,aurate,researchLevel,methodology,practice,benefits,
                                context, result,integrity,conrating,conreason,conrate,reques,method,metrics,participants) 
	VALUES ('".$_POST['title']."',
			'".$_POST['author']."',
			'".$_POST['journal']."',
			'".$_POST['date']."',
			'".$_POST['abstract']."'
			'".$_POST['link']."',
			'".$_POST['rating']."',
			'".$_POST['reason']."',
			'".$_POST['aurate']."',
			'".$_POST['researchL']."',
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
	

?>