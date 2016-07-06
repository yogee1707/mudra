<?php

ob_start();
session_start();

$_SESSION['userName'] = htmlspecialchars($_REQUEST['userName']);
$_SESSION['password'] = htmlspecialchars($_REQUEST['password']);

echo "User Name : ".$_SESSION['userName']."<br>";
echo "Password : ".$_SESSION['password']."<br>";

?>
