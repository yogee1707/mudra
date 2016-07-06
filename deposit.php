<?php

require_once("connect.php");

$uid = htmlspecialchars($_REQUEST['uid']);
$amount = htmlspecialchars($_REQUEST['amount']);
$newAmount = 0;

$sql = "SELECT amount FROM accounts WHERE uid LIKE '$uid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $newAmount = $row['amount']+$amount;
    }
} else {
    echo "<h2 align='center'>"."Your account doesn't exist."."</h2>";
    $conn->close();
    exit;
}

$sql = "UPDATE accounts SET amount='$newAmount' where uid='$uid'";

if ($conn->query($sql) == TRUE) {
    sleep(2);
    echo "<h1 align='center'>"."New record created successfully"."</h1>";
    header("Location: getBalance.php?uid=".$uid);
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
