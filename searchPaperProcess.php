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
require_once('connect.php');

$title = $_GET['search'];

if(!$conn) {
        echo "<p>Sorry, we could not retreive your paper at this time.
        <br>
        <br>
        </p>";
    }//Generates the query to be sent to mysql 
    else {        
        $query = "SELECT * from $table where title LIKE '% $title%'";
        $result = mysqli_query($conn, $query);
	
	    if (!$result) {

            echo "<p>Something is wrong with ",	$query, "</p>";
            
        } else {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Book Title: ",$row['title'],"<br>";
                echo "Link: <a target='_blank' href='",$row['link'],"'>Full Article</a> <br>";
                echo "<hr>";
            }

            $result = mysqli_query($conn, $query);
            $rownull = mysqli_fetch_assoc($result);
            if($rownull == null) {
			    echo "There are no articles to display";
		    } 
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

