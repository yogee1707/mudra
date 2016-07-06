<?php

require_once("connect.php");

if(isset($_REQUEST['uid'])&isset($_REQUEST['pin'])&isset($_REQUEST['amount'])&isset($_REQUEST['receiverUid'])){

}
else {
  echo "I didn't received anything";
  $conn->close();
  exit;
}

$uid = htmlspecialchars($_REQUEST['uid']);                  //sender account#
$pinCode = htmlspecialchars($_REQUEST['pin']);              //sender password
$amount = htmlspecialchars($_REQUEST['amount']);            //amount to send
$receiverUid = htmlspecialchars($_REQUEST['receiverUid']);  //receiver account#
$pin =  sha1($pinCode);
$time = time();

if($uid==$receiverUid){
  echo "What do you mean?";
  exit;
  $conn->close();
}

//check PIN and UID combination
$sql = "SELECT * FROM accounts WHERE uid='$uid' AND pinCode='$pin'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  $row = $result->fetch_assoc();

  //checking available balance
  if($row['amount']>$amount){
    $senderAmount = $row['amount'] - $amount;
    //echo "<p>"."Sufficient balance available"." After that it balance will be "."$senderAmount"."</p>";
  }
  else {
    echo "Insufficient funds available "."<br>" . $conn->error;
    $conn->close();
    exit;
  }
}
else {
    echo "User not authernticated "."<br>" . $conn->error;
    $conn->close();
    exit;
}

$sql = "SELECT * FROM accounts WHERE uid='$receiverUid'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  $row1 = $result->fetch_assoc();
  //echo "<p>"."Sufficient balance available"." After that it balance will be ".$row1['amount']."</p>";
  $receiverAmount = $row1['amount'] + $amount;
  echo "<p>"."Sender: ".$senderAmount."</p>";
  echo "<p>"."Receiver: ".$receiverAmount."</p>";
}
else {
  echo "No  receiver found: " . $sql . "<br>" . $conn->error;
  $conn->close();
  exit;
}

//Sender amount update
$sql = "UPDATE accounts SET amount='$senderAmount', lastActivity='$time' where uid='$uid'";

if ($conn->query($sql) == TRUE) {
    echo "<h1 align='center'>"."Sender New record created successfully"."</h1>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//Receiver amount update
$sql = "UPDATE accounts SET amount='$receiverAmount', lastActivity='$time' where uid='$receiverUid'";

if ($conn->query($sql) == TRUE) {
    echo "<h1 align='center'>"."Receiver New record created successfully"."</h1>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Inserting entry into transaction table
$sql = "INSERT INTO transaction (id, senderUid, receiverUid, amount, instance)
        VALUES (NULL,'$uid','$receiverUid','$amount','$time')";

if ($conn->query($sql) === TRUE) {
    echo "Transaction successful";
} else {
    echo "Transaction failed";
}

$conn->close();
?>
