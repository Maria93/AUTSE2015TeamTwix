<?php
require_once('connect.php');

    $title = $_POST['title'].trim(); 
    $author = $_POST['author'].trim(); 
    $journal = $_POST['journal'].trim();
    $year = $_POST['date'].trim();

    //checks if connection is established 
    if(!$conn) {
        echo "<p>Sorry but we could not find what you are looking for at this time. Please try again later.</p>";
    }
	//Generates the query to be sent to mysql 
    else {
	
	    $query = "SELECT title FROM $table WHERE title LIKE '%".$title."%'AND (author = '".$author."' OR journal = '".$journal."' OR dateYear = '".$year."')";
    
        $result = mysqli_query($conn, $query);
	
	    if (!$result) {

            echo "<p>Something is wrong with ",	$query, "</p>";
            
        } else {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Book Title: ",$row['title'],"<br>";
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