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

    $title = $_POST['title'].trim(); 
    $author = $_POST['author'].trim(); 
    $journal = $_POST['journal'].trim();
    $year = $_POST['date'].trim(); 
    $abstract = $_POST['abstract'].trim();
    $link = $_POST['link'].trim(); 
    $rating = $_POST['rating'].trim(); 
    $rateReason = $_POST['reason'].trim();
	$rater = $_POST['aurate'].trim(); 
	$researchLevel = $_POST['researchL'].trim();
	$methodology = 	$_POST['methodology'].trim();
	$practise = $_POST['practise'].trim();
	$evBenefit = $_POST['benefits'].trim();
	$evContext = $_POST['context'].trim();
	$evResult = $_POST['result'].trim();
	$integrity = $_POST['integrity'].trim(); 
	$conRate = $_POST['conrating'].trim();
	$evRateReason = $_POST['conreason'].trim();
	$evRater =	$_POST['conrate'].trim();
	$reQuestion = $_POST['reques'].trim();
	$reMethod = $_POST['method'].trim();
	$reMetrics = $_POST['metrics'].trim();
	$participant = 	$_POST['participants'].trim();

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