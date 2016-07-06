<?php

require_once("connect.php");

$firstName = htmlspecialchars($_REQUEST['firstName']);
$lastName = htmlspecialchars($_REQUEST['lastName']);
$userName = htmlspecialchars($_REQUEST['userName']);
$password1 = htmlspecialchars($_REQUEST['password1']);
$password2 = htmlspecialchars($_REQUEST['password2']);
$address = htmlspecialchars($_REQUEST['address']);

$sql = "SELECT * FROM users WHERE userName='$userName'";
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);   //if the php 5 is installed use: mysql_num_rows function

if ($num_rows > 0) {
  sleep (2);
  echo "<h2 align='center'>"."Failed"."</h2>";
  header("Location: newRegPage.php?status=duplicate");
}

else if($password1==$password2){

  $passHashed = sha1($password1);

  $sql = "INSERT INTO users (id, userName, password, firstName, lastName, address, admin)
  VALUES (NULL,'$userName','$passHashed','$firstName','$lastName','$address','0')";

  if ($conn->query($sql) ==  TRUE) {
      echo "<h1 align='center'>"."New record created successfully"."</h1>";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  sleep(2);
  header("Location: newRegPage.php?status=success");
}

else {
  sleep(2);
  header("Location: newRegPage.php?status=matching");
}

$conn->close();
?>
