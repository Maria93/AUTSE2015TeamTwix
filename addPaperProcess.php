<?php
	

	//print_r($_POST);

	
	require_once('connect.php');

    //checks if connection is established 
    if(!$conn) {
        echo "<p>Sorry but we could not submit your paper at this time. PLease try again later
        <br>
        <br>
        <a href='index.php'>Return Home</a> 
        </p>";
    }
	

	//Generates the query to be sent to mysql 
    else {

    $title = $_POST['title']; 
    $author = $_POST['author']; 
    $journal = $_POST['journal'];
    $year = $_POST['date']; 
    $abstract = $_POST['abstract'];
    $link = $_POST['link']; 
    $rating = $_POST['rating']; 
    $rateReason = $_POST['reason'];
	$rater = $_POST['aurate']; 
	$researchLevel = $_POST['researchL'];
	$methodology = 	$_POST['methodology'];
	$practise = $_POST['practise'];
	$evBenefit = $_POST['benefits'];
	$evContext = $_POST['context'];
	$evResult = $_POST['result'];
	$integrity = $_POST['integrity']; 
	$conRate = $_POST['conrating'];
	$evRateReason = $_POST['conreason'];
	$evRater =	$_POST['conrate'];
	$reQuestion = $_POST['reques'];
	$reMethod = $_POST['method'];
	$reMetrics = $_POST['metrics'];
	$participant = 	$_POST['participants'];

    //Sql command
	$query = "INSERT INTO $table". "(title,author,journal,dateYear,abstract,link,rating,rateReason,rater,researchLevel,methodology,practice,evBenefit,
                                evContext, evResult,integrity,conRate,evRateReason,evRater,reQuestion,reMethod,reMetrics,participant)". 
	"VALUES"."('$tite', '$author', '$journal', '$year', '$abstract', '$link', '$rating', '$rateReason', '$rater', '$researchLevel', '$methodology',
			'$practise', '$evBenefit', '$evContext', '$evResult', '$integrity', '$conRate', '$evRateReason', '$evRater', '$reQuestion', '$reMethod',
            '$reMetrics', '$participant')";

    //executes the query
    $result = mysqli_query($conn, $query); 
		
		
	//checks if exectuion was sucessful 
    if(!$result) {
        echo "<p>Something is wrong with ", $query, "
        <br>
        <br>
        <a href = 'index.php'>Return to Home</a>
        </p>";
    }
    else {
        echo "<p> Your Paper will be considered for submission. Thank You
        <br>
        <br>
        <a href='index.php.Return to Home</a>
        </p>";
    }
    mysqli_close($conn);
 }
 		
			
	
?>