<?php
$servername = "localhost";
$username = "Senteu";
$password = "Number12";
$dbname = "senteu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)==1) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["Movie_name"]. " " . $row["year_released"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>