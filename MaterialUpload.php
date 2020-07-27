<!DOCTYPE html>
<html lang="en">
<head>
  <title>RGMCET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
</head>
<style>
body{
	background-image:url(home.jpg);
        background-size:cover;
	}

</style>
<body>
<div class="container">
  <nav class="navbar navbar-light bg-light justify-content-between">
    <img src="rgmlogo.png" alt="logo of rgm" width=75 height=75class="rounded">
	 <br><br>
  <a class="navbar-brand">RGM PROJECTS HUB</a>
  </nav>
<?php include "db.php";?>
<div class="container">
	<div class="content">
		<div class="row">
		
<div class="container">	

<div class="container">	
<div class="container">	
<div class="alert alert-success" role="alert"><h4>   <marquee> <center>Uploading Files From Your Local Directory</center></h4></marquee></div></div> 
			<?php
		
			$errormsg='';
			if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
											{
												$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Add successfully</div>";
											}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="2")
											{
												$errormsg = "<div class='alert alert-danger'><strong>Error!</strong> Add Data</div>";
											}
											else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="3")
											{
												 $errormsg = "<div class='alert alert-info'><strong>Success!</strong> Updated successfully</div>";
											}
											else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="4")
											{
												 $errormsg = "<div class='alert alert-danger'><strong>Success!</strong> Deleted successfully</div>";
											}
										echo $errormsg;
										?>
										
<div class="container">
<div class="container">
<div class="container">

<div class="container">


			<form action="" method="post" enctype="multipart/form-data">
			<div class="col-sm-5"><center>

				<div class="form-group">
					<center><input type="text" name="subname" class="form-control" placeholder="Enter Name Of Project" required></center>
				</div>
				<div class="form-group">
					<center><input type="text" name="pg" class="form-control" placeholder="Enter Name Of Project guide" required></center>
				</div>
				<div class="form-group">
					<center><input type="text" name="tm" class="form-control" placeholder="Enter Name Of Project team members" required></center>
				</div>
				<div class="form-group">
					<center><input type="text" name="lu" class="form-control" placeholder=" list of languages used" required></center>
				</div>
				<div class="form-group">
					<center><input type="text" name="year" class="form-control" placeholder="year" required></center>
				</div>
				<div class="form-group">
					<center><input type="file" name="file[]" id="fileToUpload" class="form-control" multiple></center>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="Upload" name="submit">
				</div></center>
			</div>
			</form>
		</div>
			<div class="alert alert-danger" role="alert">
  	    
 <a href="adhome.html"><button class="btn btn-danger" type="back">Back</button></a>
</div>
<div class="alert alert-primary" role="alert">
<center> DESIGNED BY CSE-B 2019-2020</center>
</div>
</div>
	
	</div>
	

<?php
if(isset($_POST['submit']))
{
	$subname=$_POST['subname'];
	$pg=$_POST['pg'];
	$tm=$_POST['tm'];
	$lu=$_POST['lu'];
	$year=$_POST['year'];
	$upload_dir="upload/";
		$fileimages=$_FILES['file']['name'];
		$count=count($_FILES['file']['name']);
		for($i=0;$i<$count;$i++)
		{
			$s=$i+1;
			$filename = $upload_dir.$_FILES['file']['name'][$i];
			$extension= strtolower(pathinfo($filename,PATHINFO_EXTENSION));
			$sql="SELECT * FROM `files`";
			$rows=mysqli_num_rows(mysqli_query($link,$sql))+$s;
			$newname=$rows.".".$extension;
			$uploadfile=$upload_dir.$newname;
			if(move_uploaded_file($_FILES['file']['tmp_name'][$i],$uploadfile))
			{
				$uploaded_images[] = $newname;
			}
			$insert_sql = "INSERT INTO `files`(`subname`, `file`,`pg`,`tm`,`lu`,`year`) VALUES('$subname','$newname','$pg','$tm','$lu','$year')";
			$query=mysqli_query($link, $insert_sql) or die("database error: ". mysqli_error($link));
					}
	if($query)
			echo '<script type="text/javascript">window.location="MaterialUpload.php?act=1";</script>';
		else
			echo '<script type="text/javascript">window.location="MaterialUpload.php?act=4";</script>';

	}
?>
</body>
</html>
<!--  -->