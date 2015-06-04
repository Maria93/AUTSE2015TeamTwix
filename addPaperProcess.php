<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
	</head>
	<body>
        <img id="logo" src="autLogo.png" alt="HTML5 Icon" style="width:200px;height:200px">
		
        <div id="header">
            <h1>SERLER</h1>
        </div>

<div id="nav">
            <ul>
                <li> <a style="color: #fff" href="index.php">Home</a> </li>
                <li> <a style="color: #fff" href="login.html">Login</a> </li>
                <li> <a style="color: #fff" href="addPaper.html">Submit Article</a> </li>
                <li> <a style="color: #fff" href="about.html">About</a> </li>
                <li> <a style="color: #fff" href="help.html">Support Team</a> </li>
            </ul>
    
    <br> <br>
</div>

<div id="section">
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
    $rating = $_POST['rating'].trim();  
    $rateReason = $_POST['reason'].trim();
	$rater = $_POST['aurate'].trim(); 
	$researchLevel = $_POST['researchL'].trim();

    $link = $_POST['link'].trim();
    
    $practice = $_POST['practice'].trim(); 

    $evBenefit = $_POST['benefits'].trim();
	$evContextWho = $_POST['contextWho'].trim();
    $evContextWhat = $_POST['contextWhat'].trim();
    $evContextWhere = $_POST['contextWhere'].trim();
    $evContextWhen = $_POST['contextWhen'].trim();
    $evContextHow = $_POST['contextHow'].trim();
    $evContextWhy = $_POST['contextWhy'].trim();
	$evResult = $_POST['result'].trim();
	$integrity = $_POST['integrity'].trim();
    $conRate = $_POST['conrating'].trim();
    $evRater =	$_POST['conrater'].trim();
	$evRateReason = $_POST['conreason'].trim();

    $reQuestion = $_POST['reques'].trim();
	$reMethod = $_POST['method'].trim();
    $reMetrics = $_POST['metrics'].trim();
	$participant = 	$_POST['participants'].trim();
	
	 

    //Sql command
	$query = "INSERT INTO $table". "(title,author,journal,year,rating,rateReason,rater,researchLevel,link,practice,evBenefit,
                                contextWho,contextWhat,contextWhere,contextWhen,contextHow,contextWhy, evResult,integrity,conRate,evRater,evRateReason,reQuestion,reMethod,reMetrics,participant)". 
	"VALUES"."('$title', '$author', '$journal', '$year', '$rating', '$rateReason', '$rater', '$researchLevel', '$link', '$practice', '$evBenefit', '$evContextWho', '$evContextWhat', '$evContextWhere', 
               '$evContextWhen', '$evContextHow', '$evContextWhy', '$evResult', '$integrity', '$conRate', '$evRater','$evRateReason', '$reQuestion', '$reMethod', '$reMetrics', '$participant')";

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

</div>
<div id="footer">
    <p style="float: right"> <span> Team Twix(c) 2015, Jaspreet Walia, Jean-Yves Kwibuka, Maria Samuelu and Siatua Uili </span></p>
</div>
</body>
</html>

