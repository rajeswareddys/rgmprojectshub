


<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require 'db.php';
  $id=$_POST['id'];
  $name=$_POST['name'];
    $password=$_POST['password'];
// Attempt insert query execution
$sql ="UPDATE admin
SET id = '$id', name = '$name',password= '$password'
WHERE id = '$id'";
if(mysqli_query($link,$sql)){
 echo ' 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>list of projects</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body><div class="container">
  
  
  <nav class="navbar navbar-light bg-light justify-content-between">
        <img src="rgmlogo.png" alt="logo of rgm" width=75 height=75class="rounded">
  <a class="navbar-brand">RGM PROJECTS HUB</a>
 
</nav>
<div class="alert alert-warning" role="alert">
  <ol type="I">
    <li><b>Student can right download any project in this website.</b></li>
  <li><b>Student can use these project as reference to create their own project.</b></li>
  <li><b>Student can search the project file by entering the data in text as year wise or project name wise or name of coordinator/guide or languages used.</b></li> 
  </ol>
</div><center><div class="alert alert-danger"> Records updated successfully.</div>"</center>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php 
require 'db.php';
$query="select * from admin";
$result=mysqli_query($link,$query);
?>

<table class="table">
  <thead class="thead-dark">
    
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name of faculty</th>
      <th scope="col">password</th>
    
    </tr>
  </thead>
  <tbody>
    <?php 
        while($row=mysqli_fetch_assoc($result))
        {
    ?>   
    <tr>       
       <td><?php echo "$row[id]";?></td>
        <td><?php echo "$row[name]";?></td>
      <td><?php echo "$row[password]";?></td>
      
    </tr>
    <?php
  }?>
  </tbody></table>

</div></body>
</html>