<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id12844788_rph", "0UO7e#u%)u>}Lx6Z", "id12844788_rph");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$username=$_POST['name'];
$password=$_POST['password'];



$query="select name, password from `student`";

$result = mysqli_query($link,$query);

if($row = mysqli_fetch_array($result))
{
	if ( $username==$row['name'] && $password==$row['password']) {
echo '<script>
        window.location="student.html";
  </script>';
}
else
{
	echo "enter valid username or password";
}
}
mysqli_close($link);
?>