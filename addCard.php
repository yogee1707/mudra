<?php

require_once("connect.php");

$userName = htmlspecialchars($_REQUEST['userName']);
$uid  = htmlspecialchars($_REQUEST['uid']);

$sql = "SELECT id from users WHERE userName='$userName'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
$index = $row['id'];
$time = time();

if($index){
  $sql = "INSERT INTO accounts (id, uid, amount, lastActivity)
          VALUES ('$index','$uid','0','$time')";


  if ($conn->query($sql) === TRUE) {
      echo "Your card got successfully registered.";
  } else {
      echo "You've already registered your card";

  }
}

else{
  echo "User not found!";
}

$conn->close();
?>
