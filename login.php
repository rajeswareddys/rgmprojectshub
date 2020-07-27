
<?php
require('db.php');
$username=$_POST['name'];
$password=$_POST['password'];

$query="select name, password from admin";

$result = mysqli_query($link,$query);

if($row = mysqli_fetch_array($result))
{
	if ($username==$row['name'] && $password==$row['password']) {
echo'	    <script>
	    window.location.replace("http://rgmprojectshub.ml/adhome.html");
	</script>';
}
else
{
	echo "enter valid username or password";
}
}
mysqli_close($link);
?>