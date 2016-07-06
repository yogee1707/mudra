<?php

if(isset($_REQUEST['name'])){
  $name = htmlspecialchars($_REQUEST['name']);
}
else {
  echo "I didn't received anything.";
  exit;
}

echo "Hello, "."$name";


 ?>
