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

    <span style="color: white">Login</span><br>

    <form style="color: white" >
        Username <input type="text" name="user">  
        Password <input type="password" name="password"><br><br>  
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<div id="section">
    <h2>Welcome to the SERLER Repository</h2>

        Below is a list of topic you'd typically find in Software Engineering. Browse by clicking on an individual topic to reveal a list of papers
            that relate to that topic. You're also welcome to use our search engine to find a specific paper. <br><br>

    <form action="searchPaperProcess.php"id="papfrm" method="get">
        <input type="text" name="search"><input type="submit" name="submit" value="Search"> <br><br> <a href="advancedSearch.html">Advanced Search</a>
    </form>

    <div id="browseSection">
            <h3 style="padding: 5px">
                Browse our catalogue of Empirical Studies topics:
                <hr>
            </h3>
            <!-- THIS IS WHERE THE BROWSABLE PAPERS WILL BE DISPLAYED. -->
<?php
	require_once("connect.php");

	$conn = @mysqli_connect($host, $username, $password )or die("Can't retrieve browsable data at this time.");
	@mysqli_select_db($conn, $db) or die("Can't select the database");
	if (!$conn) {
    echo "<p>Database connection failure</p>";
	} else {
		$query = "select * from $table";
		$result = mysqli_query($conn, $query);
		if(!$result) {

			echo "<p>Something is wrong with ",	$query, "</p>";
			} else {

		    while ($row = mysqli_fetch_array($result)){	 
			    echo "<p>";

						    //echo "ID: ",$row["ID"],"<br>";

						    echo "Title: ",$row["title"],"<br>";

						    echo "Author: ",$row["author"],"<br>";

						    echo "Journal: ",$row["journal"],"<br>";

						    echo "Date(Year): ",$row["dateYear"],"<br>";

						    echo "Abstract: ",$row["abstract"],"<br>";

					        echo "Link: <a target='_blank' href='",$row['link'],"'>Full Article</a> <br>";

						    echo "Rating: ",$row["rating"],"<br>";

						    echo "Reason for Rating: ",$row["ratingReason"],"<br>";

						    echo "Rate by: ",$row["rater"],"<br>";

						    echo "Research Level: ",$row["researchLevel"],"<br>";

						    echo "Methodology: ",$row["mothodology"],"<br>";

						    echo "Practice: ",$row["practice"],"<br>";

						    echo "Evidence Benefit: ",$row["evBenefit"],"<br>";

						    echo "Evidence Context: ",$row["evContext"],"<br>";

						    echo "Evidence Result: ",$row["evResult"],"<br>";

						    echo "Integrity: ",$row["integrity"],"<br>";

						    echo "Confidence Rating: ",$row["conRate"],"<br>";

						    echo "Reason for Evidence Rating: ",$row["evRateReason"],"<br>";

						    echo "Evidence Rated by: ",$row["evRater"],"<br>";

						    echo "Research Question: ",$row["reQuestion"],"<br>";

						    echo "Research Method: ",$row["reMethod"],"<br>";

						    echo "Research Metrics: ",$row["reMetrics"],"<br>";

						    echo "Participant: ",$row["participant"],"<br>";

						    echo "<hr>";

				echo"</p>";

		     }



            $result = mysqli_query($conn, $query);

            $rownull = mysqli_fetch_assoc($result);

            if($rownull == null) {

			    echo "There are no books to display";

		    } 



			}	



		mysqli_close($conn);

	}  

?>
    </div>

</div>
<div id="footer">
    <p style="float: right"> <span> Team Twix(c) 2015, Jaspreet Walia, Jean-Yves Kwibuka, Maria Samuelu and Siatua Uili </span></p>
</div>
</body>
</html>