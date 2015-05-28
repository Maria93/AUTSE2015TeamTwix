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
			    echo "There are no books to display";
		    } 
        }
        mysqli_close($conn);
    }

?>
