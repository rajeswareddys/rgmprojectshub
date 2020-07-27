
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id12844788_rph","rgmcse", "id12844788_rph");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$username=$_POST['name'];
$password=$_POST['password'];
$secretkey=$_POST['sk'];
$request_match_key="cse@501";

$query="select * from faculty";

$result = mysqli_query($link,$query);

if($row = mysqli_fetch_array($result))
{
	if ($request_match_key==$secretkey || $username==$row['name'] && $password==$row['password']) {
echo '<script>
        window.location="fchome.html";
  </script>';
}
else
{
	echo "enter valid username or password";
}
}
mysqli_close($link);
?>