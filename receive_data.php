<?php

save_indicators($_POST["id"],$_POST["i1"],$_POST["i2"]);


function save_indicators( $id,$i1,$i2 ) {

  //Cambia por los detalles de tu base datos
  $dbserver = "localhost";
  $dbuser = "root";
  $password = "root";
  $dbname = "indicators";

	// Create connection
	$conn = new mysqli($dbserver, $dbuser, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO indicators (id, i1, i2)
	VALUES ('$id', '$i1', '$i2')";

	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}

exit();
