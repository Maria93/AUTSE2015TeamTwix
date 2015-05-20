<?php
require_once('connect.php');

    //checks if connection is established 
    if(!$conn) {
        echo "<p>Sorry but we could not find what you are looking for at this time. Please try again later
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
	
	$sql = "SELECT title FROM $table 
			WHERE title = $title AND author = $author AND journal = $journal AND dateYear = $year;
    $result = mysqli_query($conn, $query)";
	
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["title"]. "<br>";
    }
} else {
    echo "Sorry we could not find a match";
}

	}
	 
	mysqli_close($conn);
?> 