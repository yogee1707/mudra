<?php

ob_start();
session_start();

echo "Session variable was ".$_SESSION['test']."<br>";

?>
