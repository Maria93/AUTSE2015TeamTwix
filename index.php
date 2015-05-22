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
    </div>
</form> 

<div id="section">
    <h2>Welcome to the SERLER Repository</h2>

Below is a list of topic you'd typically find in Software Engineering. Browse by clicking on an individual topic to reveal a list of papers
    that relate to that topic. You're also welcome to use our search engine to find a specific paper. <br><br>
	<form action="searchProcess.php"id="papfrm" method="post">
<input type="text" name="search"><input type="submit" name="submit" value="Search"> <br><br> <a href="advanced.html">Advanced Search</a>
</form>
    <div id="browseSection">
        
        <h3 style="padding: 5px">
            Browse our catalogue of Empirical Studies topics
            </hr>
        </h3>
        <!-- THIS IS WHERE THE BROWSABLE PAPERS WILL BE DISPLAYED. -->

<?php>
            require_once('connect.php');

			$conn = mysqli_connect($host, $username, $password, $db) or die('Failed to connect!');

			// Checks if connection is successful

	if (!$conn) {
		// Displays an error message, avoid using die() or exit() as this terminates the execution
		// of the PHP script
		echo "<p>Database connection failure<br><br><a href='index.php'>Back to Top</a></p>";
	} else {
		// Upon successful connection
		
		// Get specific papers from the database
        $mothod = "Agile";  
	
		// Set up the SQL command to retrieve the data from the table
        
		// % symbol represent a wild-card to match any characters
		// like is a comparison operator
        $query = "select * from $table"; //where methodology like '%$mothod%'";
        
		
		// executes the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
			echo "<p>Something is wrong with ",	$query;
		} else {
			// Display the retrieved records
			
            
            //echo "<table border=\"1\">";


		/*	echo "<tr>\n"
			         ."<th scope=\"col\">ID</th>\n"
				     ."<th scope=\"col\">Title</th>\n"
				     ."<th scope=\"col\">Author</th>\n"
                     ."<th scope=\"col\">Journal</th>\n"
                     ."<th scope=\"col\">Date(Year)</th>\n"
                     ."<th scope=\"col\">Abstract</th>\n"
                     ."<th scope=\"col\">Link</th>\n"
                     ."<th scope=\"col\">Rating</th>\n"
                     ."<th scope=\"col\">Reason for Rating</th>\n"
                     ."<th scope=\"col\">Rated by</th>\n"
                     ."<th scope=\"col\">Research Level</th>\n"
                     ."<th scope=\"col\">Methodology</th>\n"
                     ."<th scope=\"col\">Pracice</th>\n"
                     ."<th scope=\"col\">Evidence Benefit</th>\n"
                     ."<th scope=\"col\">Evidence Context</th>\n"
                     ."<th scope=\"col\">Evidence Result</th>\n"
                     ."<th scope=\"col\">Integrity</th>\n"
                     ."<th scope=\"col\">Confidence Rating</th>\n"
                     ."<th scope=\"col\">Reason for Evidence Rating</th>\n"
                     ."<th scope=\"col\">Evidence Rated by</th>\n"
                     ."<th scope=\"col\">Research Question</th>\n"
                     ."<th scope=\"col\">Research Method</th>\n"
                     ."<th scope=\"col\">Research Metrics</th>\n"
                     ."<th scope=\"col\">Participant</th>\n"
				 ."</tr>\n";       */


                 
			// retrieve current record pointed by the result pointer
			// Note the = is used to assign the record value to variable $row, this is not an error
			// the ($row = mysqli_fetch_assoc($result)) operation results to false if no record was retrieved
			// _assoc is used instead of _row, so field name can be used
			while ($row = mysqli_fetch_assoc($result)){
            //echo "<center>";
				echo "<p>";
                    //echo "ID: ",$row["ID"],"<br>";
                    echo "Title: ",$row["title"],"<br>";
                    echo "Author: ",$row["author"],"<br>";
                    echo "Journal: ",$row["journal"],"<br>";
                    echo "Date(Year): ",$row["dateYear"],"<br>";
                    echo "Abstract: ",$row["abstract"],"<br>";
                    echo "Link: ","<a href = $row["link"]> </a>","<br>";
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
                    echo "======================================";
                echo <"</p>">;            
            //echo "</center>";
			}
			//echo "</table>";
            
            
			// Frees up the memory, after using the result pointer
			mysqli_free_result($result);
		} // if successful query operation
		
		// close the database connection
		mysqli_close($conn);
	} // if successful database connection
?> 


    </div>

</div>
    <div id="footer">
        <p style="float: right"> <span> Team Twix(c) 2015, Jaspreet Walia, Jean-Yves Kwibuka, Maria Samuelu and Siatua Uili </span></p>
    </div>
	</body>
</html>