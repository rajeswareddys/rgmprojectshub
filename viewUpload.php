<!DOCTYPE html>
<html lang="en">
<head>
  <title>RGMCET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</head>
<style>
body{
	background-image:url(pencil1.jpg);
    background-size:cover;
	}
.table{
	color:black;
	border:8px;
	
}
</style>
<body>
<div class="container">
  <nav class="navbar navbar-light bg-light justify-content-between">
    <img src="rgmlogo.png" alt="logo of rgm" width=75 height=75class="rounded">
	 <br><br>
  <a class="navbar-brand">RGM PROJECTS HUB</a>
  </nav>
<?php require "db.php"?>
<div class="container">
  <div class="table-responsive">          
	  <table class="table table-bordered table-hover" >
		<thead>
		  <tr class="success">
			<th>Project ID</th>
			<th>Name Of Project </th>
			<th>Name Of Project Guide</th>
			<th>Name Of Project Members</th>
			<th>Name Of Languages Used</th>
			<th>Batch Of Year </th>
			<th>Download</th>
		  </tr>
		</thead>
		<tbody>
			<?php 
				$id=array();
				$sql=mysqli_query($link,"SELECT * FROM `files`");
				while($ex=mysqli_fetch_array($sql))
				{
					$id[]=$ex['id'];
					$title[]=$ex['subname'];
					$pg[]=$ex['pg'];
					$tm[]=$ex['tm'];
					$lu[]=$ex['lu'];
					$year[]=$ex['year'];
					$filename[]=$ex['file'];
				}
				for($h=0;$h<sizeof($id);$h++)
				{
					$s=$h+1;
					echo "<tr>";
					echo "<td>".$s."</td>";
					echo "<td>".$title[$h]."</td>";
					echo "<td>".$pg[$h]."</td>";
					echo "<td>".$tm[$h]."</td>";
					echo "<td>".$lu[$h]."</td>";
					echo "<td>".$year[$h]."</td>";
					echo "<td><a href='upload/".$filename[$h]."'>Download</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>

	</div>

</body>
</html>