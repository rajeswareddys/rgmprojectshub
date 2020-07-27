<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "id12844788_rph", "rgmcse", "id12844788_rph");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 $table=$_POST['table'];
// Attempt insert query execution
$sql = "truncate $table";
if(mysqli_query($link, $sql)){
	echo ' <div class="container">
 
    <!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <img src="rgmlogo.png" alt="..." class="rounded-top" width=75 height=75>
  <span class="navbar-brand mb-0 h1">RGM PROJECTS HUB</span>
</nav>
</div>';
    echo '<div class="container"><div class="alert alert-danger" role="alert">
<center>table truncated  successfully.</center>
</div>';
 echo '
        <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 </head>	<div class="alert alert-danger" role="alert">
 <a href="adhome.html"><button type="back" class="btn btn-danger">Back</button></a>
</div>
<div class="alert alert-primary" role="alert">
<center> DESIGNED BY CSE-B 2019-2020</center>
</div>
	</div></html>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
