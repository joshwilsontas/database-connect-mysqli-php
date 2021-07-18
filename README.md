# database-connect-mysqli-php
Database Connection Script for MySQLi and PHP Applications.


Simple Connection Script which will give an error if it isn't connected properly.


e.g 
<?php
  define('DB_HOST',"localhost");
  define('DB_USER',"dbuser");
  define('DB_PASS',"dbpass");
  define('DB_NAME',"dbname");
  
  $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  
  if(!$connection) {
    echo "Connection Failed";
  } else {
    echo "Connected";
  }
?>


