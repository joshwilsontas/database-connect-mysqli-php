<?php
  define('DB_HOST'," ");
  define('DB_USER'," ");
  define('DB_PASS'," ");
  define('DB_NAME'," ");
  
  $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  
  if(!$connection) {
    echo "Connection Failed";
  } else {
    echo "Connected";
  }
?>
