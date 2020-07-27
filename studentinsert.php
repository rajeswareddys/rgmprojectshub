<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id12844788_rph", "rgmcse", "id12844788_rph");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $user=$_POST['name'];
 $pass=$_POST['password'];
// Attempt insert query execution
$sql = "INSERT INTO student (id,name,password) VALUES ('$id',$user','$pass')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>