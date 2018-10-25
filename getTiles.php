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

$sql = "SELECT tile FROM bingo";
$result = $conn->query($sql);
echo "<table id=\"list\">";
echo "<tr><th><h2>Please select your preferred options:</h2></th></tr>";
if ($result->num_rows > 0) {
    $inc = 0;
// output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "<tr><td class='options' id='option" . $inc . "' onclick='add(this.id)'>";
        echo $row["tile"];
        echo"</td></tr>";
        $inc++;
    }
    echo "<tr><td id='option$inc>";
    echo "done";
    echo"</td></tr>";
} else {
    echo "0 results";
}
$conn->close();
echo "</table>";
?>
