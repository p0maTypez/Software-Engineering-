<?php
$servername = "localhost";
$username = "acasanave1";
$password = "acasanave1";
$dbname = "acasanave1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$length = $_POST['length'];
$use_numbers = $_POST['use_numbers'];
$use_symbols = $_POST['use_symbols'];
$use_lowercase = $_POST['use_lowercase'];
$use_uppercase = $_POST['use_uppercase'];
$generated_password = $_POST['generated_password'];

// Insert data into the table
$sql = "INSERT INTO oddtable (length, use_numbers, use_symbols, use_lowercase, use_uppercase, generated_password)
VALUES ('$length', '$use_numbers', '$use_symbols', '$use_lowercase', '$use_uppercase', '$generated_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
