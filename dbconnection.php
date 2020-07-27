<?php
define('DB_SERVER','localhost');
define('DB_USER','id10316096_root');
define('DB_PASS','0UO7e#u%)u>}Lx6Z');
define('DB_NAME', 'id10316096_mydb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>
