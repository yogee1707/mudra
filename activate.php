<?php

require_once("connect.php");

$uid = htmlspecialchars($_REQUEST['uid']);
$pinCode1 = htmlspecialchars($_REQUEST['pinCode1']);
$pinCode2 = htmlspecialchars($_REQUEST['pinCode2']);

if($pinCode1==$pinCode2){

  $pin = sha1($pinCode1);
  $time = time();

  $sql = "UPDATE `accounts` SET `pinCode` = '$pin', `lastActivity` = '$time' WHERE `accounts`.`uid` = '$uid'";

  if ($conn->query($sql) == TRUE) {
    sleep(2);
    echo "You've successfully activated your card.";
    $conn->close();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else{
  echo "Passwords don't match.";
  exit;
  $conn->close();
}

?>
