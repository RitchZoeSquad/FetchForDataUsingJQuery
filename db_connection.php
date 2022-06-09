<html><head></head><body>'Helloo'

<?php

header('Access-Control-Allow-Origin: *');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wepapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$word = $_POST['word'];
$phonetics = $_POST['phonetics'];
$definition = $_POST['definition'];
$sql = "INSERT INTO words (word, phonetics, definition)

VALUES ('$word', '$phonetics', '$definition')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body></html>
