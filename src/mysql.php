<?php
$link = mysqli_connect("db", "root", "root");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

// mysqli_close($link);


/*
$hostname	= "mysql";
$dbname		= "test_db";
$username	= "root";
$password	= "12345678";

try {

	$conn = new PDO( "mysql:host=$hostname;dbname=$dbname", $username, $password );

	// Configure PDO error mode
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	echo "Connected successfully";
}
catch( PDOException $e ) {

	echo "Failed to connect: " . $e->getMessage();
}

// Perform database operations

// Close the connection
$conn = null;
*/