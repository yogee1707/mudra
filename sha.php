<?php

session_start();

//echo "Your session variable is ".$_SESSION['test']."<br>";

if(isset($_SESSION['test'])){
  if($_SESSION['test']=='yogee'){
    echo "scuccess"."<br>";
  }

  else{
    echo "failed.php";
  }
}
else {
  echo "session is not yet started!";
}
?>
