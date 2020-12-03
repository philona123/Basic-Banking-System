<?php

	$conn = mysqli_connect('sql207.epizy.com','epiz_27374481','Qp69efG3NNV3','epiz_27374481_sparksbank');

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>