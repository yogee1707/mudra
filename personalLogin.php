<?php

session_start();
$_SESSION['login'] = "";

require_once("connect.php");

$userName = htmlspecialchars($_REQUEST['userName']);
$password = htmlspecialchars(sha1($_REQUEST['password']));

$sql = "SELECT admin FROM users WHERE userName='$userName'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
if(!($row['admin'])){
  $sql = "SELECT * FROM users WHERE userName='$userName' AND password='$password'";
  $result = $conn->query($sql);
  $num_rows = mysqli_num_rows($result);   //if the php 5 is installed use: mysql_num_rows function

  echo $num_rows;

  if ($num_rows > 0) {
    echo "<h2 align='center'>"."Success"."</h2>";
    $_SESSION['login'] = "success";
    $conn->close();
    sleep (2);
    header("Location: mudraPersonalPage.php");
    exit;
  }
  else {
    sleep (2);
    echo "<h2 align='center'>"."Failed"."</h2>";
    header("Location: personalLoginPage.php?status=failed");
  }
}
else{
  sleep(2);
  header("Location: personalLoginPage.php?status=Admin");
}

$conn->close();
?>
