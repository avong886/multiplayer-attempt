
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

$page_id = mysqli_real_escape_string(html_entities($_POST['page_id']));
$rating = mysqli_real_escape_string(html_entities($_POST['rating']));

$sql = "INSERT INTO current_players (player_name, playerlocation)
VALUES ('TheFirstPlayer', '$rating')";









if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
