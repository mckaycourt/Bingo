<?php
$servername = "localhost";
$username = "mckayfil";
$password = "6SZhx40s8y";
$dbname = "mckayfil_bingo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($_GET['tile'] != null && $_GET['tile'] != ""){
    $sql = "INSERT INTO `bingo` (`id`, `tile`) VALUES (NULL,\"" . $_GET['tile'] . "\");";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://mckayfiles.com/bingo");
?>
