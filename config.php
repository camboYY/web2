<?php
	$dbConnect = @mysqli_connect("18.233.163.66", "myadmin","Admin@12345");
	if (!$dbConnect)
		die("<p>The database server is notavailable.</p>");
	//echo "<p>Successfully connected to the database server.</p>";
	$dbSelect = @mysqli_select_db($dbConnect, database: "aw");
	if (!$dbSelect)
		die("<p>The database is not available.</p>");
	//echo "<p>Successfully opened the database.</p>";
	// additional statements that access the database
	//mysqli_close($dbConnect);
?>