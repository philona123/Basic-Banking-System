<?php

	$servername = "localhost";
        $username = "id15598478_sparks";
        $password = "LV_unbg9OyM}oCXE";
        $database = "id15598478_sparkbank";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
