<html>
<style>
table, th, td {
    border: 1px solid #e67e22;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style>

<?php

require_once("connect.php");

//$sql = "SELECT * FROM transaction ORDER BY id DESC LIMIT 5";
$sql = "SELECT * FROM transaction ORDER BY id DESC";
$result = $conn->query($sql);

echo "<h2 align='center'>"."This script will show all transactions"."</h2>";

if ($result->num_rows > 0) {
    echo "<table align='center' style='width:50%'><tr><th>ID</th><th>Sender</th><th>Receiver</th><th>Amount</th><th>Time (UTC)</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>"."<td>".$row["id"]."</td>"."<td>".$row["senderUid"]."</td>"."<td>".$row["receiverUid"]."</td>"."<td>"."$row[amount]"."</td>"."<td>".gmdate('M d Y H:i:s', $row['instance'])."</td>"."</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";

$conn->close();
?>
</html>
