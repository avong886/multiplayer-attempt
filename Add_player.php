
<?php
$servername = "localhost";
$username = "cryszwjw_g_user";
$password = "vWNxak!auom3";
$dbname = "cryszwjw_g_stats";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO current_players (player_name, playerlocation)
VALUES ('TheFirstPlayer', '(0,1,2')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
