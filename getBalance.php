<?php

require_once("connect.php");

$sUser = htmlspecialchars($_REQUEST['uid']);

$sql = "SELECT amount FROM accounts WHERE uid LIKE '$sUser'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<h2 align='center'>"."Your account balance is FM. ".$row['amount']." only"."</h2>";;
    }
} else {
    echo "Recheck your card number or your card number is not yet registered.";
}

$conn->close();
?>
