<?php 
$link = mysqli_connect("localhost", "id12844788_rph", "rgmcse", "id12844788_rph");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$query="select * from data";
$result=mysqli_query($link,$query);
?>
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
<body>
  
  
  <nav class="navbar navbar-light bg-light justify-content-between">
        <img src="rgmlogo.png" alt="logo of rgm" width=75 height=75class="rounded">
  <a class="navbar-brand">RGM PROJECTS HUB</a>
  <form class="form-inline" action="search.php" method="POST">
   <div class="form-group">
					<center><input type="text" name="lu" class="form-control" placeholder="Enter Name Of languages used" required></center>
				</div>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
<div class="alert alert-warning" role="alert">
  <ol type="I">
    <li><b>Student can right download any project in this website.</b></li>
  <li><b>Student can use these project as reference to create their own project.</b></li>
  <li><b>Student can search the project file by entering the data in text as year wise or project name wise or name of coordinator/guide or languages used.</b></li> 
  </ol>
</div>
<table class="table table-striped">
  <thead class="thead-light">
    
    <tr>
      <th >Project Id</th>
      <th >Name Of Project</th>
      <th >Name Of Project Guide</th>
      <th >Name Of Team Members</th>
       <th>Languages Used</th> 
      <th> downloadable link</th>
	  <th >Year</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($row=mysqli_fetch_assoc($result))
        {
    ?>   
    <tr>       
       <td><?php echo "$row[pid]";?></td>
        <td><?php echo "$row[pname]";?></td>
      <td><?php echo "$row[pguide]";?></td>
      <td><?php echo "$row[ptm]";?></td>
      <td><?php echo "$row[lu]";?></td>
      <td><?php echo "$row[link]";?></td>
	  <td><?php echo "$row[year]";?></td>
    </tr>
    <?php
  }?>
  </tbody></table>
		<div class="alert alert-danger" role="alert">
  	    
 <a href="adhome.html"><button class="btn btn-danger" type="back">Back</button></a>
</div>
<div class="alert alert-primary" role="alert">
<center> DESIGNED BY CSE-B 2019-2020</center>
</div>
</div>
</div></body>
</html>