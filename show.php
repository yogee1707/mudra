<?php

require_once("connect.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>userName</th><th>Name</th><th>Location</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["userName"]."</td><td>".$row["firstName"]."</td><td>".$row["address"]."</td></tr>";
        /*echo "<tr><tr>".$row["id"]."</td>"" - Name: " . $row["uid"]. " " . $row["name"]." ".$row["amount"]."<br>";*/
    }
} else {
    echo "0 results";
}

$conn->close();
?>
