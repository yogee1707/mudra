<?php

require_once("connect.php");

if(isset($_REQUEST['rfid'])){
  $rfid = htmlspecialchars($_REQUEST['rfid']);
}
else {
  echo "Error!";
}

$time = time();


$sql = "INSERT INTO rfid (id, rfid, instance)
        VALUES (NULL,'$rfid','$time')";

if ($conn->query($sql) === TRUE) {
    echo "Your card got successfully registered.";
} else {
    echo "You've already registered your card";
}

$conn->close();
?>
