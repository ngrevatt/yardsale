<?php
$servername = "localhost";
$username = "bao4dz";
$password = "password";
$dbname = "yardsale";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$city = $_POST['city'];
$zip_code = $_POST['zip_code'];
$address = $_POST['address'];
$state = $_POST['state'];

$sql = "INSERT INTO users (FirstName, LastName, Email, State, City, ZipCode, Address) VALUES ('$first_name', '$last_name', '$email', '$state', '$city', '$zip_code', '$address');";
  
if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>