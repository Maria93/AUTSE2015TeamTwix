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

<div id="section">
    <h2>Welcome to the SERLER Repository</h2>
</form> 
Below is a list of topic you'd typically find in Software Engineering. Browse by clicking on an individual topic to reveal a list of papers
    that relate to that topic. You're also welcome to use our search engine to find a specific paper. <br><br>
<input type="text" name="search"><input type="submit" name="submit" value="Search"> <br><br> <a href="advanced.html">Advanced Search</a>
    <div id="browseSection">
        <h3 style="padding: 5px">
            Browse our catalogue of Empirical Studies topics
            <hr>
        </h3>
        <!-- THIS IS WHERE THE BROWSABLE PAPERS WILL BE DISPLAYED. -->

<?ph>
            require_once('connect.php');

			$conn = mysqli_connect($host, $user, $pass, $db) or die('Failed to connect!');
			
			
			// Checks if connection is successful
	if (!$conn) {
		// Displays an error message, avoid using die() or exit() as this terminates the execution
		// of the PHP script
		echo "<p>Database connection failure<br><br><a href='searchstatusform.php'>Return to SEARCH PAGE</a><br><br><a href='index.php'>Return to HOME PAGE</a></p>";
	} else {
		// Upon successful connection
		
		// Get data from the form
		//$search = mysqli_real_escape_string(trim($_GET['search']));
        //$search = trim($_GET['search']);
        $search = $_GET["search"];
        
	
		// Set up the SQL command to retrieve the data from the table
        
		// % symbol represent a wild-card to match any characters
		// like is a comparison operator
        $query = "select * from $table where Status like '%$search%'";
        
		
		// executes the query and store result into the result pointer
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
			echo "<p>Something is wrong with ",	$query, "<br><br><a href='searchstatusform.php'>Return to SEARCH PAGE</a><br><br><a href='index.php'>Return to HOME PAGE</a></p>";
		} else {
			// Display the retrieved records
			
            
            //echo "<table border=\"1\">";
			/*echo "<tr>\n"
			     ."<th scope=\"col\">Status</th>\n"
				 ."<th scope=\"col\">Status Code</th>\n"
				 ."<th scope=\"col\">Share</th>\n"
                 ."<th scope=\"col\">Date Posted</th>\n"
                 ."<th scope=\"col\">Permission</th>\n"
				 ."</tr>\n";*/
                 
			// retrieve current record pointed by the result pointer
			// Note the = is used to assign the record value to variable $row, this is not an error
			// the ($row = mysqli_fetch_assoc($result)) operation results to false if no record was retrieved
			// _assoc is used instead of _row, so field name can be used
			while ($row = mysqli_fetch_assoc($result)){
            echo "<center>";
				echo "<p>";
                    echo "<span>Status: </span>",$row["Status"],"<br>";
                    echo "<span>Status Code: </span>",$row["Status_code"],"<br><br>";
                    echo "<span>Share: </span>",$row["Share"],"<br>";
                    echo "<span>Date: </span>",$row["Date"],"<br>";
                    echo "<span>Permission: </span>",$row["Permission"],"<br>";
                    echo "======================================";
				echo "<br><br><a href='searchstatusform.php'>Return to SEARCH PAGE</a><br><br><a href='index.php'>Return to HOME PAGE</a></p>";               
            echo "</center>";
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