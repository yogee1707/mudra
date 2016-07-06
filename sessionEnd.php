<?php

session_start();

session_destroy();

echo "Your session variable is ".$_SESSION['test']."<br>";

?>
